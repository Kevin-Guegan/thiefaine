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
     * Liste de tous les conseils
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        // Message de type conseil
        $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('conseil');
        if (!$typeMessage) {
            throw $this->createNotFoundException('Impossible de trouver les messages de type conseil.');
            $conseils = null;
        } else {
            $idTypeMessage = $typeMessage->getId();
            $conseils = $em->getRepository('ThiefaineReferentielBundle:Message')->findByTypemessage($idTypeMessage);
        }

        return $this->render('ThiefaineReferentielBundle:Conseil:index.html.twig', array(
            'conseils' => $conseils,
        ));
    }

    /**
     * Afficher un formulaire pour créer un conseil
     *
     */
    public function newAction()
    {
        $conseil = new Message();
        $form   = $this->createCreateForm($conseil);

        return $this->render('ThiefaineReferentielBundle:Conseil:new.html.twig', array(
            'entity' => $conseil,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Création d'un nouveau conseil
     *
     */
    public function createAction(Request $request)
    {
        $conseil = new Message();

        $form = $this->createCreateForm($conseil);
        $form->handleRequest($request);

        if ($form->isValid()) {

            // message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $conseil->getMessage(), -1);

            if ($message == '') {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez saisir un message.'
                );
                return $this->render('ThiefaineReferentielBundle:Conseil:new.html.twig', array(
                    'entity' => $conseil,
                    'form'   => $form->createView(),
                ));
            }

            $em = $this->getDoctrine()->getManager();

            // Message de type conseil
            $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('conseil');
            if (!$typeMessage) {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Impossible de trouver les messages de type conseil'
                );
                return $this->render('ThiefaineReferentielBundle:Conseil:new.html.twig', array(
                    'entity' => $conseil,
                    'form'   => $form->createView(),
                ));
            }

            // utilisateur
            $utilisateur = $this->container->get('security.context')->getToken()->getUser();
            if (!$utilisateur) {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Impossible de trouver l\'utilisateur'
                );
                return $this->render('ThiefaineReferentielBundle:Conseil:new.html.twig', array(
                    'entity' => $conseil,
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
                $conseil->setUrlphoto($finalNameFile);
            }

            // On met à jour le conseil
            $conseil->setDateCreation(new \DateTime('now'));
            $conseil->setTypemessage($typeMessage);
            $conseil->setUtilisateurweb($utilisateur);

            $em->persist($conseil);
            $em->flush();

            return $this->redirect($this->generateUrl('conseil', array('id' => $conseil->getId())));
        }

        return $this->render('ThiefaineReferentielBundle:Conseil:new.html.twig', array(
            'entity' => $conseil,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Afficher un formulaire pour éditer un conseil
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $conseil = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        if (!$conseil) {
            throw $this->createNotFoundException('Impossible de trouver le conseil.');
        }

        $editForm = $this->createEditForm($conseil);
        //$deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Conseil:edit.html.twig', array(
            'entity'      => $conseil,
            'edit_form'   => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Modifier un conseil
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $conseil = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        if (!$conseil) {
            throw $this->createNotFoundException('Impossible de trouver le conseil.');
        }

        $editForm = $this->createEditForm($conseil);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            // message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $conseil->getMessage(), -1);

            if ($message == '') {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez saisir un message.'
                );
                return $this->render('ThiefaineReferentielBundle:Conseil:edit.html.twig', array(
                    'entity' => $conseil,
                    'edit_form'   => $editForm->createView(),
                ));
            }

            // On met à jour la date de mise à jour
            $conseil->setDatemiseajour(new \DateTime('now'));

            // file
            $file = $editForm['attachement']->getData();
            if($file != null){
                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $conseil->setUrlphoto($finalNameFile);
            }
            $em->flush();

            return $this->redirect($this->generateUrl('conseil', array('id' => $id)));
        }

        return $this->render('ThiefaineReferentielBundle:Conseil:edit.html.twig', array(
            'entity'      => $conseil,
            'edit_form'   => $editForm->createView(),
        ));

    }

    /**
     * Supprimer un conseil
     *
     */
    public function deleteAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $conseil = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        if (!$conseil) {
            throw $this->createNotFoundException('Impossible de trouver le conseil.');
        }

        $em->remove($conseil);
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
