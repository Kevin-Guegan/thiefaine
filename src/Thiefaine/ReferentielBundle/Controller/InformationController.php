<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Thiefaine\ReferentielBundle\Entity\Message;
use Thiefaine\ReferentielBundle\Form\InformationType;

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

		$entities = $em->getRepository('ThiefaineReferentielBundle:Message')->findByIdtypemessage('information');

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
		$entity = new Message();
		$form   = $this->createCreateForm($entity);

		return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
			'entity' => $entity,
			'form'   => $form->createView(),
		));
	}

	/**
	* Creates a form to create a Message entity.
	*
	* @param Message $entity The entity
	*
	* @return \Symfony\Component\Form\Form The form
	*/
	private function createCreateForm(Message $entity)
	{
		$form = $this->createForm(new InformationType(), $entity, array(
			'action' => $this->generateUrl('information_create'),
			'method' => 'POST',
		));

		return $form;
	}

	/**
	 * Creates a new Message entity.
	 *
	 */
	public function createAction(Request $request)
	{
		$entity = new Message();
		$form = $this->createCreateForm($entity);
		$form->handleRequest($request);

		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($entity);
			$em->flush();

			return $this->redirect($this->generateUrl('information'));
		}

		return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
			'entity' => $entity,
			'form'   => $form->createView(),
		));
	}

	/**
	 * Finds and displays a Message entity.
	 *
	 */
	public function showAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException("Impossible de trouver l'information.");
		}

		$deleteForm = $this->createDeleteForm($id);

		return $this->render('ThiefaineReferentielBundle:Information:show.html.twig', array(
			'entity'      => $entity,
			'delete_form' => $deleteForm->createView(),        ));
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
	* Creates a form to edit a Message entity.
	*
	* @param Message $entity The entity
	*
	* @return \Symfony\Component\Form\Form The form
	*/
	private function createEditForm(Message $entity)
	{
		$form = $this->createForm(new InformationType(), $entity, array(
			'action' => $this->generateUrl('information_update', array('id' => $entity->getId())),
			'method' => 'PUT',
		));

		$form->add('submit', 'submit', array('label' => 'Update'));

		return $form;
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

		$deleteForm = $this->createDeleteForm($id);
		$editForm = $this->createEditForm($entity);
		$editForm->handleRequest($request);

		if ($editForm->isValid()) {
			$em->flush();

			return $this->redirect($this->generateUrl('information_edit', array('id' => $id)));
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
		$form = $this->createDeleteForm($id);
		$form->handleRequest($request);

		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

			if (!$entity) {
				throw $this->createNotFoundException("Impossible de trouver l'information.");
			}

			$em->remove($entity);
			$em->flush();
		}

		return $this->redirect($this->generateUrl('information'));
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
			->add('submit', 'submit', array('label' => 'Delete'))
			->getForm()
		;
	}
}
