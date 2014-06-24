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

				$gererGroupes = $form['gerergroupes']->getData();
	            $gererUtilisateurs = $form['gererutilisateurs']->getData();
	            $gererAlertes = $form['gereralertes']->getData();
	            $gererInfos = $form['gererinfos']->getData();
	            $gererConseils = $form['gererconseils']->getData();
                $gererZones = $form['gererzones']->getData();

                $roles = array();
	            if ($gererGroupes) {
	            	$roles[] = 'ROLE_MANAGE_GROUP';
	            }

	            if ($gererUtilisateurs) {
	            	$roles[] = 'ROLE_MANAGE_USER';
	            }

	            if ($gererAlertes) {
	            	$roles[] = 'ROLE_MANAGE_ALERTE';
	            }

	            if ($gererInfos) {
	            	$roles[] = 'ROLE_MANAGE_INFORMATION';
	            }

	            if ($gererConseils) {
	            	$roles[] = 'ROLE_MANAGE_CONSEIL';
	            }

                if ($gererZones) {
                    $roles[] = 'ROLE_MANAGE_ZONE';
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
                $gererAlertes = $form['gereralertes']->getData();
                $gererInfos = $form['gererinfos']->getData();
                $gererConseils = $form['gererconseils']->getData();
                $gererZones = $form['gererzones']->getData();

                $roles = array();
                if ($gererGroupes) {
                    $roles[] = 'ROLE_MANAGE_GROUP';
                }

                if ($gererUtilisateurs) {
                    $roles[] = 'ROLE_MANAGE_USER';
                }

                if ($gererAlertes) {
                    $roles[] = 'ROLE_MANAGE_ALERTE';
                }

                if ($gererInfos) {
                    $roles[] = 'ROLE_MANAGE_INFORMATION';
                }

                if ($gererConseils) {
                    $roles[] = 'ROLE_MANAGE_CONSEIL';
                }

                if ($gererZones) {
                    $roles[] = 'ROLE_MANAGE_ZONE';
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
                            'group_role_manage_alerte' => $group->hasRole('ROLE_MANAGE_ALERTE'),
                            'group_role_manage_information' => $group->hasRole('ROLE_MANAGE_INFORMATION'),
                            'group_role_manage_conseil' => $group->hasRole('ROLE_MANAGE_CONSEIL'),
                            'group_role_manage_zone' => $group->hasRole('ROLE_MANAGE_ZONE'),
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
            'group_role_manage_alerte' => $group->hasRole('ROLE_MANAGE_ALERTE'),
            'group_role_manage_information' => $group->hasRole('ROLE_MANAGE_INFORMATION'),
            'group_role_manage_conseil' => $group->hasRole('ROLE_MANAGE_CONSEIL'),
            'group_role_manage_zone' => $group->hasRole('ROLE_MANAGE_ZONE'),
        ));
    }


}
