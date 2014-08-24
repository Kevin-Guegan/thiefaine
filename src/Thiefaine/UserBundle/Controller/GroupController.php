<?php

namespace Thiefaine\UserBundle\Controller;

use FOS\UserBundle\Controller\GroupController as BaseController;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FilterGroupResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseGroupEvent;
use FOS\UserBundle\Event\GroupEvent;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GroupController extends BaseController
{

    /**
     * Show the new form
     */
    public function newAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        /** @var $groupManager \FOS\UserBundle\Model\GroupManagerInterface */
        $groupManager = $this->container->get('fos_user.group_manager');
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.group.form.factory');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $group = $groupManager->createGroup('');

        $dispatcher->dispatch(FOSUserEvents::GROUP_CREATE_INITIALIZE, new GroupEvent($group, $request));

        $form = $formFactory->createForm();
        $form->setData($group);

        if ($request->isMethod('POST')) {

            $form->bind($request);

            if ($form->isValid()) {

                $groupExist = $groupManager->findGroupByName($group->getName());
                if ($groupExist != null){
                    $this->container->get('session')->getFlashBag()->add(
                        'notice',
                        'Le nom du groupe existe déjà.'
                    );
                    return $this->container->get('templating')->renderResponse('FOSUserBundle:Group:new.html.'.$this->getEngine(), array(
                        'form' => $form->createview(),
                    ));
                }

                // On set la gendarmerie de l'appli
                $gendarmeries = $em->getRepository('ThiefaineReferentielBundle:Gendarmerie')->findAll();
                if (count($gendarmeries) != 1) {
                    $this->container->get('session')->getFlashBag()->add(
                        'notice',
                        'Impossible de trouver la gendarmerie dans l\'application.'
                    );
                    return $this->render('FOSUserBundle:Group:new.html.twig', array(
                        'form'   => $form->createView(),
                    ));
                } else {
                    $gendarmerie = $gendarmeries[0];    
                }
                $group->setGendarmerie($gendarmerie);

				$gererGroupes = $form['gerergroupes']->getData();
	            $gererUtilisateurs = $form['gererutilisateurs']->getData();
                $gererCategories = $form['gerercategories']->getData();
                $gererZones = $form['gererzones']->getData();
	            $gererInfos = $form['gererinfos']->getData();
	            $gererConseils = $form['gererconseils']->getData();

                $roles = array();
	            if ($gererGroupes) {
	            	$roles[] = 'ROLE_MANAGE_GROUP';
	            }

	            if ($gererUtilisateurs) {
	            	$roles[] = 'ROLE_MANAGE_USER';
	            }

                if ($gererZones) {
                    $roles[] = 'ROLE_MANAGE_ZONE';
                }

                if ($gererCategories) {
                    $roles[] = 'ROLE_MANAGE_CATEGORIE';
                }

	            if ($gererInfos) {
	            	$roles[] = 'ROLE_MANAGE_INFORMATION';
	            }

	            if ($gererConseils) {
	            	$roles[] = 'ROLE_MANAGE_CONSEIL';
	            }

	            $group->setRoles($roles);

                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::GROUP_CREATE_SUCCESS, $event);

                $groupManager->updateGroup($group);

                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('fos_user_group_list');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::GROUP_CREATE_COMPLETED, new FilterGroupResponseEvent($group, $request, $response));

                return $response;
            }
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Group:new.html.'.$this->getEngine(), array(
            'form' => $form->createview(),
        ));
    }

    /**
    * Edit one group, show the edit form
    */
    public function editAction(Request $request, $groupName)
    {
        /** @var $groupManager \FOS\UserBundle\Model\GroupManagerInterface */
        $groupManager = $this->container->get('fos_user.group_manager');

        $group = $this->findGroupBy('name', $groupName);

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $event = new GetResponseGroupEvent($group, $request);
        $dispatcher->dispatch(FOSUserEvents::GROUP_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.group.form.factory');

        $form = $formFactory->createForm();
        $form->setData($group);

        if ($request->isMethod('POST')) {
            $form->bind($request);

            if ($form->isValid()) {

                $newName = $form['name']->getData();

                $gererGroupes = $form['gerergroupes']->getData();
                $gererUtilisateurs = $form['gererutilisateurs']->getData();
                $gererZones = $form['gererzones']->getData();
                $gererCategories = $form['gerercategories']->getData();
                $gererInfos = $form['gererinfos']->getData();
                $gererConseils = $form['gererconseils']->getData();

                $roles = array();
                if ($gererGroupes) {
                    $roles[] = 'ROLE_MANAGE_GROUP';
                }

                if ($gererUtilisateurs) {
                    $roles[] = 'ROLE_MANAGE_USER';
                }

                if ($gererZones) {
                    $roles[] = 'ROLE_MANAGE_ZONE';
                }

                if ($gererCategories) {
                    $roles[] = 'ROLE_MANAGE_CATEGORIE';
                }

                if ($gererInfos) {
                    $roles[] = 'ROLE_MANAGE_INFORMATION';
                }

                if ($gererConseils) {
                    $roles[] = 'ROLE_MANAGE_CONSEIL';
                }

                $group->setRoles($roles);

                if ($groupName != $newName) {
                    $groupExist = $groupManager->findGroupByName($group->getName());

                    if ($groupExist != null){

                        $group->setName($groupName);
                        $form = $formFactory->createForm();
                        $form->setData($group);

                        $this->container->get('session')->getFlashBag()->add(
                            'notice',
                            'Le nom du groupe existe déjà.'
                        );

                        return $this->container->get('templating')->renderResponse('FOSUserBundle:Group:edit.html.'.$this->getEngine(), array(
                            'form' => $form->createview(),
                            'group_name' => $group->getName(),
                            'group_role_manage_group' => $group->hasRole('ROLE_MANAGE_GROUP'),
                            'group_role_manage_user' => $group->hasRole('ROLE_MANAGE_USER'),
                            'group_role_manage_zone' => $group->hasRole('ROLE_MANAGE_ZONE'),
                            'group_role_manage_categorie' => $group->hasRole('ROLE_MANAGE_CATEGORIE'),
                            'group_role_manage_information' => $group->hasRole('ROLE_MANAGE_INFORMATION'),
                            'group_role_manage_conseil' => $group->hasRole('ROLE_MANAGE_CONSEIL'),
                        ));
                    }
                }

                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::GROUP_EDIT_SUCCESS, $event);

                $groupManager->updateGroup($group);

                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('fos_user_group_list');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::GROUP_EDIT_COMPLETED, new FilterGroupResponseEvent($group, $request, $response));

                return $response;
            }
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Group:edit.html.'.$this->getEngine(), array(
            'form' => $form->createview(),
            'group_name' => $group->getName(),
            'group_role_manage_group' => $group->hasRole('ROLE_MANAGE_GROUP'),
            'group_role_manage_user' => $group->hasRole('ROLE_MANAGE_USER'),
            'group_role_manage_zone' => $group->hasRole('ROLE_MANAGE_ZONE'),
            'group_role_manage_categorie' => $group->hasRole('ROLE_MANAGE_CATEGORIE'),
            'group_role_manage_information' => $group->hasRole('ROLE_MANAGE_INFORMATION'),
            'group_role_manage_conseil' => $group->hasRole('ROLE_MANAGE_CONSEIL'),
        ));
    }

     /**
     * Delete one group
     */
    public function deleteAction(Request $request, $groupName)
    {
        $em = $this->container->get('doctrine')->getManager();

        $group = $this->findGroupBy('name', $groupName);

        $users = $em->getRepository('ThiefaineUserBundle:Utilisateurweb')->findAll();
        foreach ($users as $user) {
            if ($user->hasGroup($group->getName())) {

                // on met à jour les conseils, infos et zones de l'utilsateur => on met à null l'id utilisateur
                $conseils = $user->getConseils();
                $informations = $user->getInformations();
                $zones = $user->getZones();

                foreach ($conseils as $conseil) {
                    $conseil->setUtilisateurweb(null);
                }
                foreach ($informations as $information) {
                    $information->setUtilisateurweb(null);
                }
                foreach ($zones as $zone) {
                    $zone->setUtilisateurweb(null);
                }
                $em->remove($user);
                $em->flush();
            }

        }

        $this->container->get('fos_user.group_manager')->deleteGroup($group);

        $response = new RedirectResponse($this->container->get('router')->generate('fos_user_group_list'));

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');
        $dispatcher->dispatch(FOSUserEvents::GROUP_DELETE_COMPLETED, new FilterGroupResponseEvent($group, $request, $response));

        return $response;
    }


}
