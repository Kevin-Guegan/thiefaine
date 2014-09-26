<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;

use Thiefaine\ReferentielBundle\Entity\Conseil;
use Thiefaine\ReferentielBundle\Entity\Push;
use Thiefaine\ReferentielBundle\Entity\Utilisateurmobile;
use Thiefaine\ReferentielBundle\Form\ConseilType;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

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
        $conseils = $em->getRepository('ThiefaineReferentielBundle:Conseil')->findAll();

        $twig = 'ThiefaineReferentielBundle:Conseil:index.html.twig';
        $paramTwig = array(
            'conseils' => $conseils,
        );


        return $this->render($twig, $paramTwig);
    }

    /**
     * Afficher un formulaire pour visionner un conseil
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $conseil = $em->getRepository('ThiefaineReferentielBundle:Conseil')->find($id);

        if (!$conseil) {
            throw $this->createNotFoundException("Impossible de trouver le conseil.");
        }

        $showForm = $this->createShowForm($conseil);

        $twig = 'ThiefaineReferentielBundle:Conseil:show.html.twig';
        $paramTwig = array(
            'conseil' => $conseil,
            'show_form' => $showForm->createView(),
        );

        return $this->render($twig, $paramTwig);
    }

    /**
     * Afficher un formulaire pour créer un conseil
     *
     */
    public function newAction()
    {
        $conseil = new Conseil();
        $form   = $this->createCreateForm($conseil);

        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('ThiefaineReferentielBundle:Categorie')->findAll();

        $twig = 'ThiefaineReferentielBundle:Conseil:new.html.twig';
        $messageName = 'notice';
        $paramTwig = array(
            'conseil' => $conseil,
            'show' => false,
            'form'   => $form->createView(),
        );

        if (!$categories) {            
            return $this->getRenderError($twig, $paramTwig, $messageName,
                'Veuillez d\'abord créer une catégorie.');
        }

        $paramTwig['show'] = true;
        return $this->render($twig, $paramTwig);
    }
    
    /**
     * Création d'un nouveau conseil
     *
     */
    public function createAction(Request $request)
    {
        $conseil = new Conseil();

        $form = $this->createCreateForm($conseil);
        $form->handleRequest($request);

        $twig = 'ThiefaineReferentielBundle:Conseil:new.html.twig';
        $messageName = 'notice';
        $paramTwig = array(
            'entity' => $conseil,
            'show' => true,
            'form'   => $form->createView(),
        );

        if ($form->isValid()) {

            // utilisateur
            $utilisateur = $this->container->get('security.context')->getToken()->getUser();
            if (!$utilisateur) {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Impossible de trouver l\'utilisateur');
            }

            // Au moins une catégorie de sélectionné
            $categories = $conseil->getCategories();
            if (count($categories)==0) {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Veuillez sélectionner au moins une catégorie.');
            }

            // message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $conseil->getMessage(), -1);

            if ($message == '') {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Veuillez saisir un message.');
            }

            $em = $this->getDoctrine()->getManager();

            // file
            $file = $form['attachement']->getData();
            if($file != null){
                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $conseil->setUrlphoto("/uploads/documents/".$finalNameFile);
            }

            //On met à jour le conseil
            $conseil->setDateCreation(new \DateTime('now'));
            $conseil->setUtilisateurweb($utilisateur);

            $em->persist($conseil);
            $em->flush();

            //push message
            $mobileUsers = $em->getRepository('ThiefaineReferentielBundle:Utilisateurmobile')->findAll();
            foreach ($mobileUsers as $mobileUser) {
                
                $pushMessage = new Push();
                $sendMessage = array("type" => "GendarmerieConseil", "id" => $conseil->getId());
                $sendMessage = json_encode($sendMessage);

                $this->container->get('rms_push_notifications')->send(
                    $pushMessage->makeMessage(
                        $sendMessage,
                        $mobileUser->getToken()
                    )
                );
            }

            return $this->redirect($this->generateUrl('conseil', array('id' => $conseil->getId())));
        }

        return $this->render($twig, $paramTwig);
    }

    /**
     * Afficher un formulaire pour éditer un conseil
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $conseil = $em->getRepository('ThiefaineReferentielBundle:Conseil')->find($id);

        if (!$conseil) {
            throw $this->createNotFoundException('Impossible de trouver le conseil.');
        }

        $editForm = $this->createEditForm($conseil);

        $twig = 'ThiefaineReferentielBundle:Conseil:edit.html.twig';
        $paramTwig = array(
            'conseil'      => $conseil,
            'edit_form'   => $editForm->createView(),
        );

        return $this->render($twig, $paramTwig);
    }

    /**
     * Modifier un conseil
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $conseil = $em->getRepository('ThiefaineReferentielBundle:Conseil')->find($id);

        if (!$conseil) {
            throw $this->createNotFoundException('Impossible de trouver le conseil.');
        }

        $editForm = $this->createEditForm($conseil);
        $editForm->handleRequest($request);

        $twig = 'ThiefaineReferentielBundle:Conseil:edit.html.twig';
        $messageName = 'notice';
        $paramTwig = array(
            'conseil' => $conseil,
            'edit_form'   => $editForm->createView(),
        );

        if ($editForm->isValid()) {

            // message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $conseil->getMessage(), -1);

            if ($message == '') {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Veuillez saisir un message.');
            }

            // On met à jour la date de mise à jour
            $conseil->setDatemiseajour(new \DateTime('now'));

            // file
            $file = $editForm['attachement']->getData();
            if($file != null){
                
                //suppression de la photo
                $photo = $conseil->getUrlphoto();
                if($photo != null){
                    $fs = new Filesystem();
                    $dir = __DIR__.'/../../../../web';
                    $fs->remove($dir.$photo);
                }

                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $conseil->setUrlphoto("/uploads/documents/".$finalNameFile);
            }
            $em->flush();

            return $this->redirect($this->generateUrl('conseil', array('id' => $id)));
        }

        return $this->render($twig, $paramTwig);
    }

    /**
     * Supprimer un conseil
     *
     */
    public function deleteAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $conseil = $em->getRepository('ThiefaineReferentielBundle:Conseil')->find($id);

        if (!$conseil) {
            throw $this->createNotFoundException('Impossible de trouver le conseil.');
        }

        $em->remove($conseil);
        $em->flush();

        //suppression de la photo
        $photo = $conseil->getUrlphoto();
        if($photo != null){
            $fs = new Filesystem();
            $dir = __DIR__.'/../../../../web';
            $fs->remove($dir.$photo);
        }

        return $this->redirect($this->generateUrl('conseil'));
    }

     /**
    * Creates a form to create a Conseil entity.
    *
    * @param Conseil $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Conseil $entity)
    {
        $form = $this->createForm(new ConseilType(), $entity, array(
            'action' => $this->generateUrl('conseil_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
    * Creates a form to edit a Conseil entity.
    *
    * @param Conseil $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Conseil $entity)
    {
        $form = $this->createForm(new ConseilType(), $entity, array(
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
     * Creates a form to show a Conseil entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createShowForm(Conseil $entity)
    {
        $form = $this->createForm(new ConseilType(), $entity, array(
            'action' => $this->generateUrl('conseil'),
        ));

        return $form;
    }


    /**
    * Get availalble Conseil.
    *
    * @View()
    * @Get("/conseil")
    * @ApiDoc
    */
    public function getConseilAction() {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Conseil')->findAll();

        $conseils = array(); $i=0;
        foreach ($entity as $conseil) {
            
            $conseils[$i] = $conseil->getId();
            $i++;
        }

        return $conseils;
    }

    /**
    * Get availalble OneConseil.
    *
    * @param $idConseil id of a conseil.
    *
    * @View()
    * @Get("/conseil/{idConseil}")
    * @ApiDoc
    */
    public function getOneConseilAction($idConseil) {

        $em = $this->getDoctrine()->getManager();
        $conseil = $em->getRepository('ThiefaineReferentielBundle:Conseil')->find($idConseil);

        if($conseil->getUrlphoto() != null){
            
            $domaineName = $_SERVER['HTTP_HOST'];
            $conseil->setUrlphoto(
                $domaineName.$conseil->getUrlphoto()
            );

        }

        return $conseil;
    }

    private function getRenderError($twig, $paramTwig, $messageName, $message){
        $this->container->get('session')->getFlashBag()->add(
            $messageName,
            $message
        );
        return $this->render($twig, $paramTwig);
    }

}
