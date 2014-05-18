<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Thiefaine\ReferentielBundle\Entity\Alerte;
use Thiefaine\ReferentielBundle\Entity\Message;
use Thiefaine\ReferentielBundle\Entity\Zone;
use Thiefaine\ReferentielBundle\Form\AlerteType;

/**
 * Alerte controller.
 *
 */
class AlerteController extends Controller
{

    /**
     * Lists all Alerte entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ThiefaineReferentielBundle:Alerte')->findAll();

        return $this->render('ThiefaineReferentielBundle:Alerte:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Displays a form to create a new Alerte entity.
     *
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        // Message de type conseil
        $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('alerte');
        if (!$typeMessage) {
            throw $this->createNotFoundException('Impossible de trouver les messages de type alerte.');
        }

        // utilisateur
        $utilisateur = $em->getRepository('ThiefaineReferentielBundle:Utilisateurweb')->findOneById(1);
        if (!$utilisateur) {
            throw $this->createNotFoundException("Impossible de trouver l'utilisateur");
        }

        // On met à jour le conseil
        $message = new Message();
        $message->setDateCreation(new \DateTime('now'));
        $message->setTypemessage($typeMessage);
        $message->setUtilisateurweb($utilisateur);

        $alerte = new Alerte();
        $alerte->setMessage($message);

        // on récupère les zones sélectionables
        $zonesUtilisateur = $em->getRepository('ThiefaineReferentielBundle:Zone')->findByUtilisateurweb(1);
        if (!$zonesUtilisateur) {
            //throw $this->createNotFoundException("Impossible de trouver des zones");
            //return $this->redirect($this->generateUrl('alerte'));
        }

        // $em->persist($alerte->getMessage());
        $form   = $this->createCreateForm($alerte);

        return $this->render('ThiefaineReferentielBundle:Alerte:new.html.twig', array(
            'entity' => $alerte,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Alerte entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ALerte();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('alerte_show', array('id' => $entity->getId())));
        }

        return $this->render('ThiefaineReferentielBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Alerte entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Alerte entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Alerte:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Alerte entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Alerte entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Alerte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Alerte entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Alerte entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('alerte_edit', array('id' => $id)));
        }

        return $this->render('ThiefaineReferentielBundle:Alerte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Alerte entity.
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
                throw $this->createNotFoundException('Unable to find Alerte entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('alerte'));
    }

    /**
    * Creates a form to create a Alerte entity.
    *
    * @param Alerte $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Alerte $entity)
    {
        $form = $this->createForm(new AlerteType(), $entity, array(
            'action' => $this->generateUrl('alerte_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
    * Creates a form to edit a Alerte entity.
    *
    * @param Alerte $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Message $entity)
    {
        $form = $this->createForm(new AlerteType(), $entity, array(
            'action' => $this->generateUrl('alerte_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        return $form;
    }

    /**
     * Creates a form to delete a Alerte entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('alerte_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
