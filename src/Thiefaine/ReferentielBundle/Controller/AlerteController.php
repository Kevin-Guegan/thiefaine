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

        $alertes = $em->getRepository('ThiefaineReferentielBundle:Alerte')->findAll();

        return $this->render('ThiefaineReferentielBundle:Alerte:index.html.twig', array(
            'alertes' => $alertes,
        ));
    }

    /**
     * Displays a form to create a new Alerte entity.
     *
     */
    public function newAction()
    {
        $alerte = new Alerte();
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
        $alerte = new ALerte();
        $form = $this->createCreateForm($alerte);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();

             // Message de type alerte
            $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('alerte');
            if (!$typeMessage) {
                throw $this->createNotFoundException('Impossible de trouver les messages de type alerte.');
            }

            // utilisateur
            $utilisateur = $em->getRepository('ThiefaineReferentielBundle:Utilisateurweb')->findOneById(1);
            if (!$utilisateur) {
                throw $this->createNotFoundException("Impossible de trouver l'utilisateur");
            }

            // On met à jour le message de l'alerte
            $message = $alerte->getMessage();
            $message->setDateCreation(new \DateTime('now'));
            $message->setTypemessage($typeMessage);
            $message->setUtilisateurweb($utilisateur);
            $em->persist($message);

            $alerte->setMessage($message);
            $em->persist($alerte);            

            $em->flush();

            return $this->redirect($this->generateUrl('alerte_show', array('id' => $alerte->getId())));
        }

        return $this->render('ThiefaineReferentielBundle:Alerte:new.html.twig', array(
            'entity' => $alerte,
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

        $alerte = $em->getRepository('ThiefaineReferentielBundle:Alerte')->find($id);

        if (!$alerte) {
            throw $this->createNotFoundException("Impossible de trouver l'alerte.");
        }

        $editForm = $this->createEditForm($alerte);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Alerte:edit.html.twig', array(
            'entity'      => $alerte,
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

        $alerte = $em->getRepository('ThiefaineReferentielBundle:Alerte')->find($id);

        if (!$alerte) {
            throw $this->createNotFoundException("Impossible de trouver l'alerte.");
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($alerte);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('alerte', array('id' => $id)));
        }

        return $this->render('ThiefaineReferentielBundle:Alerte:edit.html.twig', array(
            'entity'      => $alerte,
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
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Alerte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException("Impossible de trouver l'alerte");
        }

        $em->remove($entity);
        $em->flush();

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
    * Creates a form to edit a Alerte entity.
    *
    * @param Alerte $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Alerte $entity)
    {
        $form = $this->createForm(new AlerteType(), $entity, array(
            'action' => $this->generateUrl('alerte_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('valider', 'submit', array    ( 'label'  => 'Valider',
                                                 'attr' =>  array ( 'class' => 'btn btn-primary' )
                                                )
                );

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
            ->add('annuler', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
