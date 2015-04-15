<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Thiefaine\ReferentielBundle\Entity\Keyword;
use Thiefaine\ReferentielBundle\Form\KeywordType;

/**
 * Keyword controller.
 *
 * @Route("/keyword")
 */
class KeywordController extends Controller
{

    /**
     * Lists all Keyword entities.
     *
     * @Route("/", name="keyword")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $keywords = $em->getRepository('ThiefaineReferentielBundle:Keyword')->findAll();

        return array(
            'keywords' => $keywords,
        );
    }

    /**
     * Displays a form to create a new Keyword entity.
     *
     * @Route("/new", name="keyword_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $keyword = new Keyword();
        $form   = $this->createCreateForm($keyword);

        return $this->render('ThiefaineReferentielBundle:Keyword:new.html.twig', array(
            'keyword' => $keyword,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Keyword entity.
     *
     * @Route("/", name="keyword_create")
     * @Method("POST")
     * @Template("ThiefaineReferentielBundle:Keyword:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $keyword = new Keyword();
        $form = $this->createCreateForm($keyword);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($keyword);
            $em->flush();

            return $this->redirect($this->generateUrl('keyword'));
        }

        return array(
            'keyword' => $keyword,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Keyword entity.
     *
     * @Route("/{id}/edit", name="keyword_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $keyword = $em->getRepository('ThiefaineReferentielBundle:Keyword')->find($id);

        if (!$keyword) {
            throw $this->createNotFoundException('Impossible de trouver le mot-clé.');
        }

        $editForm = $this->createEditForm($keyword);
        //$deleteForm = $this->createDeleteForm($id);

        return array(
            'keyword'      => $keyword,
            'edit_form'   => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Keyword entity.
     *
     * @Route("/{id}", name="keyword_update")
     * @Method("PUT")
     * @Template("ThiefaineReferentielBundle:Keyword:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $keyword = $em->getRepository('ThiefaineReferentielBundle:Keyword')->find($id);

        if (!$keyword) {
            throw $this->createNotFoundException('Unable to find Keyword keyword.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($keyword);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('keyword', array('id' => $id)));
        }

        return array(
            'keyword'      => $keyword,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Supprimer un keyword
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $keyword = $em->getRepository('ThiefaineReferentielBundle:Keyword')->find($id);

        if (!$keyword) {
            throw $this->createNotFoundException('Impossible de trouver le mot-clé.');
        }

        $em->remove($keyword);
        $em->flush();

        return $this->redirect($this->generateUrl('keyword'));
    }

    /**
     * Creates a form to create a Keyword entity.
     *
     * @param Keyword $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Keyword $entity)
    {
        $form = $this->createForm(new KeywordType(), $entity, array(
            'action' => $this->generateUrl('keyword_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
    * Creates a form to edit a Keyword entity.
    *
    * @param Keyword $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Keyword $entity)
    {
        $form = $this->createForm(new KeywordType(), $entity, array(
            'action' => $this->generateUrl('keyword_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        return $form;
    }

    /**
     * Creates a form to delete a Keyword entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('keyword_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
