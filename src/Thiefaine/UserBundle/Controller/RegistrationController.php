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

    public function addFlashBag($notice) {
        $this->container->get('session')->getFlashBag()->add(
            'notice',
            $notice
        );
    }

    public function renderResponse($form,$show){
        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.'.$this->getEngine(), array(
            'form' => $form->createView(),
            'show' => $show
        ));
    }

    public function sendMail(){
        /*
        $message = \Swift_Message::newInstance()
            ->setSubject('Création d\'un nouveau compte')
            ->setFrom('admin@thiefaine.com')
            ->setTo($user->getEmail())
            ->setBody($this->renderView('ReferentielBundle:Utilisateurweb:email.txt.twig', array('name' => $name)))
        ;
        $this->get('mailer')->send($message);
        */
    }

    public function registerAction(Request $request)
    {

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $form = $formFactory->createForm();

        // on regarde si il existe des groupes avant ^_^
        $em = $this->container->get('doctrine')->getManager();
        if ( count($em->getRepository('ThiefaineUserBundle:Group')->findAll()) == 0) {
            $this->addFlashBag('Veuillez tout d\'abord créer un groupe dans l\'application.');
            return $this->renderResponse($form,false);
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

            // On bind tout et on fait les contrôles
            $form->bind($request);
            $notice = '';

            // Contrôle que l'adresse mail n'existe pas
            $userExist = $userManager->findUserByEmail($user->getEmail());
            if (null !== $userExist) {
                $notice = 'L\'adresse email est déjà utilisée.';
            }

            // Contrôle que le login n'est pas déjà utilisé
            if ('' === $notice){
                $userExist = $userManager->findUserByUsername($user->getUsername());
                if (null !== $userExist) {
                    $notice = 'Le login de connexion est déjà utilisé.';
                }
            }

            // Contrôle de l'information
            if ('' === $notice){
                $messageUser = $user->getInfos();
                $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
                $replacement = '';
                $message = preg_replace($pattern, $replacement, $messageUser, -1);
                if ('' === $message) {
                    $notice = 'Veuillez saisir les informations sur l\'utilisateur.';
                }
            }

            // valid === false si un seul caractère de saisie ^_^
            if ('' === $notice && false === $form->isValid()) {
                $notice = 'Veuillez saisir au moins 2 caractères dans chaque entrée du formulaire.';
            }

            // On ajoute l'erreur à la vue si nécessaire
            if ('' !== $notice){
                $this->addFlashBag($notice);
                return $this->renderResponse($form,true);
            } else {
                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

                $userManager->updateUser($user);

                //$this->sendMail();
                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('thiefaine_referentiel_utilisateurweb_list');
                    $response = new RedirectResponse($url);
                }

                //$dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
                return $response;
            }
        }

        return $this->renderResponse($form,true);
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
