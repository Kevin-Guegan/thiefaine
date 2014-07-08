<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Thiefaine\ReferentielBundle\Entity\Message;
use Thiefaine\ReferentielBundle\Form\MessageType;

/**
 * Message controller.
 *
 */
class InformationController extends Controller
{

	/**
	 * Liste des informations
	 *
	 */
	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();

        // Message de type information
        $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('information');
        if (!$typeMessage) {
            throw $this->createNotFoundException('Impossible de trouver les messages de type information.');
            $informations = null;
        } else {
            $idTypeMessage = $typeMessage->getId();
            $informations = $em->getRepository('ThiefaineReferentielBundle:Message')->findByTypemessage($idTypeMessage);
        }

        return $this->render('ThiefaineReferentielBundle:Information:index.html.twig', array(
            'informations' => $informations,
        ));
	}

	/**
	 * Afficher un formulaire pour créer une information
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
	 * Création de l'information
	 *
	 */
	public function createAction(Request $request)
	{
		$information = new Message();

        $form = $this->createCreateForm($information);
        $form->handleRequest($request);

        if ($form->isValid()) {

        	// message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $information->getMessage(), -1);

            if ($message == '') {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez saisir un message.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
                    'entity' => $information,
                    'form'   => $form->createView(),
                ));
            }

            $em = $this->getDoctrine()->getManager();
            
            // Message de type information
            $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('information');
            if (!$typeMessage) {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Impossible de trouver les messages de type information.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
                    'entity' => $information,
                    'form'   => $form->createView(),
                ));
            }

            // utilisateur
            $utilisateur = $this->container->get('security.context')->getToken()->getUser();
            if (!$utilisateur) {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Impossible de trouver l\'utilisateur.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
                    'entity' => $information,
                    'form'   => $form->createView(),
                ));
            }

            // file
            $file = $form['attachement']->getData();
            if($file != null){
            	$dir = __DIR__.'/../../../../web/uploads/documents';

            	$nameFile = $file->getClientOriginalName();
				$finalNameFile = rand(1, 99999).'-'.$nameFile;

            	$file->move($dir, $finalNameFile);
            	$information->setUrlphoto($finalNameFile);
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
	 * Affiche un formulaire pour modifier une information
	 *
	 */
	public function editAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$information = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

		if (!$information) {
			throw $this->createNotFoundException("Impossible de trouver l'information.");
		}

		$editForm = $this->createEditForm($information);
		//$deleteForm = $this->createDeleteForm($id);

		return $this->render('ThiefaineReferentielBundle:Information:edit.html.twig', array(
			'entity'      => $information,
			'edit_form'   => $editForm->createView(),
			//'delete_form' => $deleteForm->createView(),
		));
	}

	/**
	 * Modification d'une information
	 *
	 */
	public function updateAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();

		$information = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

		if (!$information) {
			throw $this->createNotFoundException("Impossible de trouver l'information.");
		}

		$editForm = $this->createEditForm($information);
		$editForm->handleRequest($request);

		if ($editForm->isValid()) {

			// message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $information->getMessage(), -1);

            if ($message == '') {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez saisir un message.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:edit.html.twig', array(
                    'entity' => $information,
                    'edit_form'   => $editForm->createView(),
                ));
            }

			// file
            $file = $editForm['attachement']->getData();
            if($file != null){
            	$dir = __DIR__.'/../../../../web/uploads/documents';

            	$nameFile = $file->getClientOriginalName();
				$finalNameFile = rand(1, 99999).'-'.$nameFile;

            	$file->move($dir, $finalNameFile);
            	$information->setUrlphoto($finalNameFile);
            }

			// On met à jour la date de mise à jour
            $information->setDatemiseajour(new \DateTime('now'));

			$em->flush();

			return $this->redirect($this->generateUrl('information'));
		}

		return $this->render('ThiefaineReferentielBundle:Information:edit.html.twig', array(
			'entity'      => $information,
			'edit_form'   => $editForm->createView(),
		));
	}

	/**
	 * Suppression d'une information
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
}
