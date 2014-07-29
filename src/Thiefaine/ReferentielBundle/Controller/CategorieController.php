<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Thiefaine\ReferentielBundle\Entity\Categorie;
use Thiefaine\ReferentielBundle\Form\CategorieType;

/**
 * Categorie controller.
 *
 * @Route("/categorie")
 */
class CategorieController extends Controller
{

    /**
     * Lists all Categorie entities.
     *
     * @Route("/", name="categorie")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('ThiefaineReferentielBundle:Categorie')->findAll();

        return array(
            'categories' => $categories,
        );
    }
    /**
     * Creates a new Categorie entity.
     *
     * @Route("/", name="categorie_create")
     * @Method("POST")
     * @Template("ThiefaineReferentielBundle:Categorie:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $categorie = new Categorie();
        $form = $this->createCreateForm($categorie);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();

            return $this->redirect($this->generateUrl('categorie'));
        }

        return array(
            'categorie' => $categorie,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Categorie entity.
     *
     * @param Categorie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Categorie $entity)
    {
        $form = $this->createForm(new CategorieType(), $entity, array(
            'action' => $this->generateUrl('categorie_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Categorie entity.
     *
     * @Route("/new", name="categorie_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $categorie = new Categorie();
        $form   = $this->createCreateForm($categorie);

        return array(
            'categorie' => $categorie,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Categorie entity.
     *
     * @Route("/{id}", name="categorie_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineReferentielBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Categorie entity.
     *
     * @Route("/{id}/edit", name="categorie_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $categorie = $em->getRepository('ThiefaineReferentielBundle:Categorie')->find($id);

        if (!$categorie) {
            throw $this->createNotFoundException('Unable to find Categorie categorie.');
        }

        $editForm = $this->createEditForm($categorie);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'categorie'      => $categorie,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Categorie entity.
    *
    * @param Categorie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Categorie $entity)
    {
        $form = $this->createForm(new CategorieType(), $entity, array(
            'action' => $this->generateUrl('categorie_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Categorie entity.
     *
     * @Route("/{id}", name="categorie_update")
     * @Method("PUT")
     * @Template("ThiefaineReferentielBundle:Categorie:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $categorie = $em->getRepository('ThiefaineReferentielBundle:Categorie')->find($id);

        if (!$categorie) {
            throw $this->createNotFoundException('Unable to find Categorie categorie.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($categorie);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('categorie', array('id' => $id)));
        }

        return array(
            'categorie'      => $categorie,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Supprimer une categorie
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Categorie')->find($id);

        if (!$entity) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Impossible de trouver la categorie'
            );
            return $this->redirect($this->generateUrl('categorie'));
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('categorie'));
    }

    /**
     * Creates a form to delete a Categorie entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categorie_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
