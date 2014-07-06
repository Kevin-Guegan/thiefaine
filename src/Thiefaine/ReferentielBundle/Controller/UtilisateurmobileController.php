<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Thiefaine\ReferentielBundle\Entity\Utilisateurmobile;
use Thiefaine\ReferentielBundle\Form\UtilisateurmobileType;

/**
 * Utilisateurmobile controller.
 *
 */
class UtilisateurmobileController extends Controller
{

    /**
     * Lists all Utilisateurmobile entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ThiefaineReferentielBundle:Utilisateurmobile')->findAll();

        return $this->render('ThiefaineReferentielBundle:Utilisateurmobile:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Utilisateurmobile entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Utilisateurmobile();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateurmobile_show', array('id' => $entity->getId())));
        }

        return $this->render('ThiefaineReferentielBundle:Utilisateurmobile:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Utilisateurmobile entity.
     *
     * @param Utilisateurmobile $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Utilisateurmobile $entity)
    {
        $form = $this->createForm(new UtilisateurmobileType(), $entity, array(
            'action' => $this->generateUrl('utilisateurmobile_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Utilisateurmobile entity.
     *
     */
    public function newAction()
    {
        $entity = new Utilisateurmobile();
        $form   = $this->createCreateForm($entity);

        return $this->render('ThiefaineReferentielBundle:Utilisateurmobile:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Utilisateurmobile entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Utilisateurmobile')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateurmobile entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Utilisateurmobile:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Utilisateurmobile entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Utilisateurmobile')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateurmobile entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Utilisateurmobile:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Utilisateurmobile entity.
    *
    * @param Utilisateurmobile $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Utilisateurmobile $entity)
    {
        $form = $this->createForm(new UtilisateurmobileType(), $entity, array(
            'action' => $this->generateUrl('utilisateurmobile_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Utilisateurmobile entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Utilisateurmobile')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateurmobile entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateurmobile_edit', array('id' => $id)));
        }

        return $this->render('ThiefaineReferentielBundle:Utilisateurmobile:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Utilisateurmobile entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ThiefaineReferentielBundle:Utilisateurmobile')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Utilisateurmobile entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('utilisateurmobile'));
    }

    /**
     * Creates a form to delete a Utilisateurmobile entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('utilisateurmobile_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
