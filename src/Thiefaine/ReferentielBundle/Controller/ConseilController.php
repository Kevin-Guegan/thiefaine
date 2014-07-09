<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;

use Thiefaine\ReferentielBundle\Entity\Message;
use Thiefaine\ReferentielBundle\Form\MessageType;


use FOS\RestBundle\View\View;

/**
 * Message controller.
 *
 */
class ConseilController extends Controller
{

    /**
     * Lists all Message entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        // Message de type conseil
        $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('conseil');
        if (!$typeMessage) {
            throw $this->createNotFoundException('Impossible de trouver les messages de type conseil.');
            $entities = null;
        } else {
            $idTypeMessage = $typeMessage->getId();
            $entities = $em->getRepository('ThiefaineReferentielBundle:Message')->findByTypemessage($idTypeMessage);
        }

        return $this->render('ThiefaineReferentielBundle:Conseil:index.html.twig', array(
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

        return $this->render('ThiefaineReferentielBundle:Conseil:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
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

            // Message de type conseil
            $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('conseil');
            if (!$typeMessage) {
                throw $this->createNotFoundException('Impossible de trouver les messages de type conseil.');
            }

            // utilisateur
            $utilisateur = $em->getRepository('ThiefaineReferentielBundle:Utilisateurweb')->findOneById(1);
            if (!$utilisateur) {
                throw $this->createNotFoundException("Impossible de trouver l'utilisateur");
            }

            // On met à jour le conseil
            $entity->setDateCreation(new \DateTime('now'));
            $entity->setTypemessage($typeMessage);
            $entity->setUtilisateurweb($utilisateur);

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('conseil', array('id' => $entity->getId())));
        }

        return $this->render('ThiefaineReferentielBundle:Conseil:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
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
            throw $this->createNotFoundException('Impossible de trouver le conseil.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Conseil:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
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
            throw $this->createNotFoundException('Impossible de trouver le conseil.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            // On met à jour la date de mise à jour
            $entity->setDatemiseajour(new \DateTime('now'));

            $em->flush();

            return $this->redirect($this->generateUrl('conseil', array('id' => $id)));
        }

        return $this->render('ThiefaineReferentielBundle:Conseil:edit.html.twig', array(
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

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de trouver le conseil.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('conseil'));
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
        $form = $this->createForm(new MessageType(), $entity, array(
            'action' => $this->generateUrl('conseil_create'),
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
    * Creates a form to edit a Message entity.
    *
    * @param Message $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Message $entity)
    {
        $form = $this->createForm(new MessageType(), $entity, array(
            'action' => $this->generateUrl('conseil_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('valider', 'submit', array    ( 'label'  => 'Valider',
                                                 'attr' =>  array ( 'class' => 'btn btn-primary' )
                                                )
                );

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
            ->setAction($this->generateUrl('conseil_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('annuler', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }


    /**
    * Get availalble Conseil.
    *
    * @Get("/conseil")
    *
    * @ApiDoc
    */
    public function getConseilAction() {
        $view = View::create();
        //$view = new View();
        $em = $this->getDoctrine()->getManager();
        $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('conseil');
        $idTypeMessage = $typeMessage->getId();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Message')->findByTypemessage($idTypeMessage);
        $view->setData($entity);

        return $this->handlerView($view);
    }

    /**
    * Get availalble OneConseil.
    *
    * @param $idConseil id of a conseil.
    * @Get("/conseil/{idConseil}")
    *
    * @ApiDoc
    */
    public function getOneConseilAction($idConseil) {
        $view = View::create();
        //$view = new View();
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($idConseil);
        $typemessage = $entity->getTypemessage()->getLibelle();
        if($typemessage == "conseil"){
            $view->setData($entity);

            return $this->handlerView($view);

        }else{
            return $this->handlerView($view);
        }
    }

    /**
    * @return \FOS\RestBundle\View\ViewHandler
    */
    protected function handlerView($view)
    {
        return $this->container->get('fos_rest.view_handler')->handle($view);
    }
}
