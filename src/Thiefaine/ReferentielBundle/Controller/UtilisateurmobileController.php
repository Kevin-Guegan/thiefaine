<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Post;

use Thiefaine\ReferentielBundle\Entity\Utilisateurmobile;
use Thiefaine\ReferentielBundle\Form\UtilisateurmobileType;

use FOS\RestBundle\View\View;

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
    * Post new mobile user.
    * 
    * @param $idGend id of Gendarmerie.
    * @param $idMobile id of Mobile.
    * @param $token notification token.
    * 
    * @Post("/utilisateurmobile/create/{idGend}/{idMobile}/{token}")
    * @ApiDoc
    */
    public function createAction(Request $request, $idGend, $idMobile, $token)
    {
        $view = View::create();
        $em = $this->getDoctrine()->getManager();

        /*if (($idGend == "{idGend}") || ($token == "{token}") || ($idMobile == "{idMobile}")) {
            $view->setData("POST Error : no idGend / token / idMobiles in URL");
            return $this->handlerView($view); 
        }*/

        $mobileUser = $em->getRepository('ThiefaineReferentielBundle:Utilisateurmobile')->findByIdmobile($idMobile);
        if(!$mobileUser){

            $gend = $em->getRepository('ThiefaineReferentielBundle:Gendarmerie')->find($idGend);
            $date = new \DateTime('now');

            $utilisateurmobile = new Utilisateurmobile();
            $utilisateurmobile->setGendarmerie($gend);
            $utilisateurmobile->setToken($token);
            $utilisateurmobile->setDatecreation($date);
            $utilisateurmobile->setIdmobile($idMobile);            

            $em->persist($utilisateurmobile);
            $em->flush();

            $view->setData("add success");

       }else{

            $mobileUser = $mobileUser[0];

            $gend = $em->getRepository('ThiefaineReferentielBundle:Gendarmerie')->find($idGend);
            $mobileUser->setGendarmerie($gend);
            $mobileUser->setToken($token);

            $em->persist($mobileUser);
            $em->flush();

            $view->setData("change success");

        }

        return $this->handlerView($view);
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

    /**
    * @return \FOS\RestBundle\View\ViewHandler
    */
    protected function handlerView($view)
    {
        return $this->container->get('fos_rest.view_handler')->handle($view);
    }
}
