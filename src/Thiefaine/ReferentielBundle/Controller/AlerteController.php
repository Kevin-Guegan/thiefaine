<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
            $utilisateur = $this->container->get('security.context')->getToken()->getUser();
            if (!$utilisateur) {
                throw $this->createNotFoundException("Impossible de trouver l'utilisateur");
            }

            // On met à jour le message de l'alerte
            $message = $alerte->getMessage();

            // file
            $file = $form['message']['attachement']->getData();
            if($file != null){
                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $message->setUrlphoto($finalNameFile);
            }
            $message->setDateCreation(new \DateTime('now'));
            $message->setTypemessage($typeMessage);
            $message->setUtilisateurweb($utilisateur);
            $em->persist($message);

            $alerte->setMessage($message);
            $em->persist($alerte);            

            $em->flush();

            return $this->redirect($this->generateUrl('alerte'));
        }

        return $this->render('ThiefaineReferentielBundle:Alerte:new.html.twig', array(
            'entity' => $alerte,
            'form'   => $form->createView(),
        ));
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
        //$deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Alerte:edit.html.twig', array(
            'entity'      => $alerte,
            'edit_form'   => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
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

        //$deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($alerte);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            // file
            $file = $editForm['message']['attachement']->getData();
            if($file != null){
                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $alerte->setUrlphoto($finalNameFile);
            }

            return $this->redirect($this->generateUrl('alerte'));
        }

        return $this->render('ThiefaineReferentielBundle:Alerte:edit.html.twig', array(
            'entity'      => $alerte,
            'edit_form'   => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
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
            ->setAction($this->generateUrl('alerte'))
            ->add('annuler', 'reset', array    ( 'label'  => 'Annuler',
                                                 'attr' =>  array ( 'class' => 'btn btn-default' )
                                                )
                )
            ->getForm()
        ;
    }
}
