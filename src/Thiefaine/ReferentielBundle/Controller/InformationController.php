<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;

use Thiefaine\ReferentielBundle\Entity\Message;
use Thiefaine\ReferentielBundle\Form\MessageType;
use FOS\RestBundle\View\View;
/**
 * Message controller.
 *
 */
class InformationController extends Controller
{

	/**
	 * Lists all Message entities.
	 *
	 */
	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();

        // Message de type information
        $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('information');
        if (!$typeMessage) {
            throw $this->createNotFoundException('Impossible de trouver les messages de type information.');
            $entities = null;
        } else {
            $idTypeMessage = $typeMessage->getId();
            $entities = $em->getRepository('ThiefaineReferentielBundle:Message')->findByTypemessage($idTypeMessage);
        }

        return $this->render('ThiefaineReferentielBundle:Information:index.html.twig', array(
            'entities' => $entities,
        ));
	}

	/**
	 * Displays a form to create a new Message entity.
	 *
	 */
	public function newAction()
	{
		$information = new Message();
		$form   = $this->createCreateForm($information);

		return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
			'entity' => $information,
			'form'   => $form->createView(),
		));
	}

	/**
	 * Creates a new Message entity.
	 *
	 */
	public function createAction(Request $request)
	{
		$information = new Message();

        $form = $this->createCreateForm($information);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            // Message de type information
            $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('information');
            if (!$typeMessage) {
                throw $this->createNotFoundException('Impossible de trouver les messages de type information.');
            }

            // utilisateur
            $utilisateur = $em->getRepository('ThiefaineReferentielBundle:Utilisateurweb')->findOneById(1);
            if (!$utilisateur) {
                throw $this->createNotFoundException("Impossible de trouver l'utilisateur");
            }
            
            // On met à jour l'information
            $information->setDateCreation(new \DateTime('now'));
            $information->setTypemessage($typeMessage);
            $information->setUtilisateurweb($utilisateur);
			
            $em->persist($information);

            $em->flush();

            return $this->redirect($this->generateUrl('information'));
        }

        return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
            'entity' => $information,
            'form'   => $form->createView(),
        ));
	}

	/**
	 * Displays a form to edit an existing Message entity.
	 *
	 */
	public function editAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException("Impossible de trouver l'information.");
		}

		$editForm = $this->createEditForm($entity);
		$deleteForm = $this->createDeleteForm($id);

		return $this->render('ThiefaineReferentielBundle:Information:edit.html.twig', array(
			'entity'      => $entity,
			'edit_form'   => $editForm->createView(),
			'delete_form' => $deleteForm->createView(),
		));
	}

	/**
	 * Edits an existing Message entity.
	 *
	 */
	public function updateAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();

		$entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException("Impossible de trouver l'information.");
		}

		$editForm = $this->createEditForm($entity);
		$editForm->handleRequest($request);

		if ($editForm->isValid()) {

			// On met à jour la date de mise à jour
            $entity->setDatemiseajour(new \DateTime('now'));

			$em->flush();

			return $this->redirect($this->generateUrl('information'));
		}

		return $this->render('ThiefaineReferentielBundle:Information:edit.html.twig', array(
			'entity'      => $entity,
			'edit_form'   => $editForm->createView(),
			'delete_form' => $deleteForm->createView(),
		));
	}
	/**
	 * Deletes a Message entity.
	 *
	 */
	public function deleteAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException("Impossible de trouver l'information.");
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('information'));
	}

	/**
	* Creates a form to create a Message entity.
	*
	* @param Message $entity The entity
	*
	* @return \Symfony\Component\Form\Form The form
	*/
	private function createCreateForm(Message $information)
	{
		$form = $this->createForm(new MessageType(), $information, array(
			'action' => $this->generateUrl('information_create'),
			'method' => 'POST',
		));

		$form->add('valider', 'submit', array    ( 'label'  => 'Valider',
	                                             'attr' =>  array ( 'class' => 'btn btn-primary' )
	                                            )
	            )
	            ->add('annuler', 'reset', array    ( 'label'  => 'Annuler',
	                                             'attr' =>  array ( 'class' => 'btn btn-default' )
	                                            )
	            );

		return $form;
	}

	/**
	* Creates a form to edit a Message entity.
	*
	* @param Message $entity The entity
	*
	* @return \Symfony\Component\Form\Form The form
	*/
	private function createEditForm(Message $entity)
	{
		$form = $this->createForm(new MessageType(), $entity, array(
			'action' => $this->generateUrl('information_update', array('id' => $entity->getId())),
			'method' => 'PUT',
		));

		$form->add('valider', 'submit', array    ( 'label'  => 'Valider',
                                                 'attr' =>  array ( 'class' => 'btn btn-primary' )
                                                )
                );

		return $form;
	}

	/**
	 * Creates a form to delete a Message entity by id.
	 *
	 * @param mixed $id The entity id
	 *
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createDeleteForm($id)
	{
		return $this->createFormBuilder()
			->setAction($this->generateUrl('information_delete', array('id' => $id)))
			->setMethod('DELETE')
			->add('annuler', 'submit', array('label' => 'Delete'))
			->getForm()
		;
	}


    /**
    * Get availalble Information.
    *
    * @Get("/information")
    *
    * @ApiDoc
    */
    public function getInformationAction() {
        $view = View::create();
        //$view = new View();
        $em = $this->getDoctrine()->getManager();
        $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('information');
        $idTypeMessage = $typeMessage->getId();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Message')->findByTypemessage($idTypeMessage);
        $view->setData($entity);

        return $this->handlerView($view);
    }

    /**
    * Get availalble OneInformation.
    *
    * @param $idInformation id of an information.
    * @Get("/information/{idInformation}")
    *
    * @ApiDoc
    */
    public function getOneInformationAction($idInformation) {
        $view = View::create();
        //$view = new View();
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($idInformation);
        $typemessage = $entity->getTypemessage()->getLibelle();
        if($typemessage == "information"){
            $view->setData($entity);

            return $this->handlerView($view);

        }else{
            return $this->handlerView($view);
        }
    }

    /**
    * @return \FOS\RestBundle\View\ViewHandler
    */
    protected function handlerView($view)
    {
        return $this->container->get('fos_rest.view_handler')->handle($view);
    }
}
