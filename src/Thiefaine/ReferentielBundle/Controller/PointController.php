<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;

use Thiefaine\ReferentielBundle\Entity\Point;
use Thiefaine\ReferentielBundle\Form\PointType;
use FOS\RestBundle\View\View;

/**
 * Point controller.
 *
 */
class PointController extends Controller
{

    /**
     * Lists all Point entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ThiefaineReferentielBundle:Point')->findAll();

        return $this->render('ThiefaineReferentielBundle:Point:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Point entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Point();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('point_show', array('id' => $entity->getId())));
        }

        return $this->render('ThiefaineReferentielBundle:Point:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Point entity.
    *
    * @param Point $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Point $entity)
    {
        $form = $this->createForm(new PointType(), $entity, array(
            'action' => $this->generateUrl('point_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Point entity.
     *
     */
    public function newAction($idzone, $lat, $lng, $rad)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $zone = $em->getRepository('ThiefaineReferentielBundle:Zone')->find($idzone);

        $point = new Point();
        $point->setZone($zone);
        $point->setLatitude($lat);
        $point->setLongitude($lng);
        $point->setRadius($rad);

        $em->persist($point);
        $em->flush();

        return new Response($point->getId());
    }

    /**
     * Finds and displays a Point entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Point')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Point entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Point:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Point entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Point')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Point entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Point:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Point entity.
    *
    * @param Point $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Point $entity)
    {
        $form = $this->createForm(new PointType(), $entity, array(
            'action' => $this->generateUrl('point_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Point entity.
     *
     */
    public function updateAction($idpoint, $lat, $lng, $rad)
    {
        $em = $this->getDoctrine()->getManager();

        $point = $em->getRepository('ThiefaineReferentielBundle:Point')->find($idpoint);
        $point->setLatitude($lat);
        $point->setLongitude($lng);
        $point->setRadius($rad);

        $em->flush();

        return new Response("ok");
    }
    /**
     * Deletes a Point entity.
     *
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $point = $em->getRepository('ThiefaineReferentielBundle:Point')->find($id);

        $em->remove($point);
        $em->flush();

        return new Response("ok");
    }

    /**
     * Creates a form to delete a Point entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('point_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

    /**
      *Get availalble Point.
      *
      *@param $zone id of th e zone.
      *
      *@Get("/point/{zone}")
      *@ApiDoc
    */

    public function getPointAction($zone) {

        $view = View::create();

        //$view = new View();

        $em = $this->getDoctrine()->getManager();



        $entity = $em->getRepository('ThiefaineReferentielBundle:Point')->find($zone);

        $view->setData($entity);

        

        return $this->handlerView($view);

    }

    

    /**
      *@return \FOS\RestBundle\View\ViewHandler
     */

    protected function handlerView($view)

    {

        return $this->container->get('fos_rest.view_handler')->handle($view);

    }

 }
