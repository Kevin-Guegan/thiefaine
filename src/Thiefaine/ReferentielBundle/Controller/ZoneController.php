<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Thiefaine\ReferentielBundle\Entity\Zone;
use Thiefaine\ReferentielBundle\Form\ZoneType;

/**
 * Zone controller.
 *
 */
class ZoneController extends Controller
{

    /**
     * Lists all Zone entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $zones = $em->getRepository('ThiefaineReferentielBundle:Zone')->findAll();

        return $this->render('ThiefaineReferentielBundle:Zone:index.html.twig', array(
            'zones' => $zones,
        ));
    }

    /**
     * Finds and displays a Zone entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Zone')->find($id);
        $entity->getPoints();


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Zone entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Zone:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        
        ));
    }

     /**
     * Displays a form to create a new Zone entity.
     *
     */
    public function newAction()
    {
        $entity = new Zone();
        $form   = $this->createCreateForm($entity);

        return $this->render('ThiefaineReferentielBundle:Zone:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Zone entity.
     *
     */
    public function createAction(Request $request)
    {
        $zone = new Zone();
        $form = $this->createCreateForm($zone);
        $form->handleRequest($request);

        if ($form->isValid()) {
            
            // utilisateur web
            $utilisateur = $this->container->get('security.context')->getToken()->getUser();
            if (!$utilisateur) {
                throw $this->createNotFoundException("Impossible de trouver l'utilisateur");
            }

            $zone->setUtilisateurweb($utilisateur);

            $em = $this->getDoctrine()->getManager();
            $em->persist($zone);
            $em->flush();

            return $this->redirect($this->generateUrl('zone_edit', array('id' => $zone->getId())));
        }

        return $this->render('ThiefaineReferentielBundle:Zone:new.html.twig', array(
            'entity' => $zone,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Zone entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Zone')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Zone entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Zone:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Zone entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Zone')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Zone entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('zone'));
        }

        return $this->render('ThiefaineReferentielBundle:Zone:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Zone entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $zone = $em->getRepository('ThiefaineReferentielBundle:Zone')->find($id);

        if (!$zone) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Impossible de trouver la zone'
            );
            return $this->redirect($this->generateUrl('zone'));
        }

        $em->remove($zone);
        $em->flush();

        return $this->redirect($this->generateUrl('zone'));
    }

    /**
    * Creates a form to create a Zone entity.
    *
    * @param Zone $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Zone $entity)
    {
        $form = $this->createForm(new ZoneType(), $entity, array(
            'action' => $this->generateUrl('zone_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
    * Creates a form to edit a Zone entity.
    *
    * @param Zone $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Zone $entity)
    {
        $form = $this->createForm(new ZoneType(), $entity, array(
            'action' => $this->generateUrl('zone_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        return $form;
    }



    /**
     * Creates a form to delete a Zone entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('zone_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
