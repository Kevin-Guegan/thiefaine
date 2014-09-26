<?php

namespace Thiefaine\UserBundle\Controller;

use FOS\UserBundle\Controller\RegistrationController as BaseController;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

class RegistrationController extends BaseController
{

    public function registerAction(Request $request)
    {

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $form = $formFactory->createForm();

        // on regarde si il existe des geoupes avant ^_^
        $em = $this->container->get('doctrine')->getManager();
        if ( count($em->getRepository('ThiefaineUserBundle:Group')->findAll()) == 0) {
             $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Veuillez tout d\'abord créer un groupe dans l\'application.'
            );
            return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.'.$this->getEngine(), array(
                'form' => $form->createView(),
            ));
        }

        $user = $userManager->createUser();
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form->setData($user);

        if ('POST' === $request->getMethod()) {
            $form->bind($request);

            if ($form->isValid()) {

                $userExist = $userManager->findUserByEmail($user->getEmail());
                if ($userExist == null) {
                    $userExist = $userManager->findUserByUsername($user->getUsername());
                    $notice = 'Le login de connexion est déjà utilisé.';
                } else {
                    $notice = 'L\'adresse email est déjà utilisée.';
                }
                if ($userExist != null){
                    $this->container->get('session')->getFlashBag()->add(
                        'notice',
                        $notice
                    );
                    return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.'.$this->getEngine(), array(
                        'form' => $form->createView(),
                    ));
                }

                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

                $userManager->updateUser($user);

                // On envoi un mail à l'utilisateur pour changer de mot de passe
                $message = \Swift_Message::newInstance()
                    ->setSubject('Création d\'un nouveau compte')
                    ->setFrom('admin@thiefaine.com')
                    ->setTo($user->getEmail())
                    ->setBody($this->renderView('ReferentielBundle:Utilisateurweb:email.txt.twig', array('name' => $name)))
                ;
                $this->get('mailer')->send($message);

                
                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('thiefaine_referentiel_utilisateurweb_list');
                    $response = new RedirectResponse($url);
                }

                //$dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.'.$this->getEngine(), array(
            'form' => $form->createView(),
        ));
    }
        /**
     * Receive the confirmation token from user email provider, login the user
     */
    public function confirmAction(Request $request, $token)
    {
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');

        $user = $userManager->findUserByConfirmationToken($token);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with confirmation token "%s" does not exist', $token));
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $user->setConfirmationToken(null);
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRM, $event);

        $userManager->updateUser($user);

        if (null === $response = $event->getResponse()) {
            $url = $this->container->get('router')->generate('fos_user_registration_confirmed');
            $response = new RedirectResponse($url);
        }

        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRMED, new FilterUserResponseEvent($user, $request, $response));

        return $response;
    }

    /**
     * Tell the user his account is now confirmed
     */
    public function confirmedAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:confirmed.html.'.$this->getEngine(), array(
            'user' => $user,
        ));
    }

}
