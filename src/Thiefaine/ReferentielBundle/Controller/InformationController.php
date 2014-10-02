<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;

use Thiefaine\ReferentielBundle\Entity\Push;
use Thiefaine\ReferentielBundle\Entity\Information;
use Thiefaine\ReferentielBundle\Entity\Zone;
use Thiefaine\ReferentielBundle\Entity\Utilisateurmobile;
use Thiefaine\ReferentielBundle\Form\InformationType;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

/**
 * Information controller.
 *
 */
class InformationController extends Controller
{

    /**
     * Liste de toutes les informations
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $informations = $em->getRepository('ThiefaineReferentielBundle:Information')->findBy([], ['datecreation' => 'DESC']);

        $twig = 'ThiefaineReferentielBundle:Information:index.html.twig';
        $paramTwig = array(
            'informations' => $informations,
        );

        return $this->render($twig, $paramTwig);
    }

    /**
     * Afficher un formulaire pour visionner une information
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $information = $em->getRepository('ThiefaineReferentielBundle:Information')->find($id);

        if (!$information) {
            throw $this->createNotFoundException("Impossible de trouver l'information.");
        }

        $showForm = $this->createShowForm($information);
        $twig = 'ThiefaineReferentielBundle:Information:show.html.twig';
        $paramTwig = array(
            'information' => $information,
            'show_form' => $showForm->createView(),
        );

        return $this->render($twig,$paramTwig);
    }

    /**
     * Afficher un formulaire pour la création des informations
     *
     */
    public function newAction()
    {
        $information = new Information();
        $form   = $this->createCreateForm($information);

        $em = $this->getDoctrine()->getManager();

        $zones = $em->getRepository('ThiefaineReferentielBundle:Zone')->findAll();
        $categories = $em->getRepository('ThiefaineReferentielBundle:Categorie')->findAll();

        $twig = 'ThiefaineReferentielBundle:Information:new.html.twig';
        $paramTwig = array(
                'information' => $information,
                'show' => false,
                'form'   => $form->createView(),
            );
        $messageName = 'notice';

        if (!$zones && !$categories) {
            return $this->getRenderError($twig, $paramTwig, $messageName,
                'Veuillez d\'abord créer une zone et une catégorie.');

        } elseif (!$zones) {
            return $this->getRenderError($twig, $paramTwig, $messageName,
                'Veuillez d\'abord créer une zone.');
        } elseif (!$categories) {
            return $this->getRenderError($twig, $paramTwig, $messageName,
                'Veuillez d\'abord créer une catégorie.');
        } else {
            $paramTwig['show'] = true;
            return $this->render($twig, $paramTwig);
        }
    }

    /**
     * Création d'une nouvelle information
     *
     */
    public function createAction(Request $request)
    {
        $information = new Information();
        $form = $this->createCreateForm($information);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $zones = $em->getRepository('ThiefaineReferentielBundle:Zone')->findAll();

        $twig = 'ThiefaineReferentielBundle:Information:new.html.twig';
        $paramTwig = array(
                'information' => $information,
                'show' => true,
                'form'   => $form->createView(),
            );
        $messageName = 'notice';

        if ($form->isValid()) {

            // utilisateur
            $utilisateur = $this->container->get('security.context')->getToken()->getUser();
            if (!$utilisateur) {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Impossible de trouver l\'utilisateur.');
            }

            // Au moins une catégorie de sélectionné
            $categories = $information->getCategories();
            if (count($categories)==0) {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Veuillez sélectionner au moins une catégorie.');
            }

            // Contrôle de l'information
            $messageInformation = $information->getMessage();
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $messageInformation, -1);

            if ($message == '') {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Veuillez saisir un message.');
            }

            // Contrôle de la zone
            $zoneInformation = $information->getZone();
            if (null === $zoneInformation) {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Veuillez sélectionner une zone.');
            }

            // file
            $file = $form['attachement']->getData();
            if($file != null){
                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $information->setUrlphoto("/uploads/documents/".$finalNameFile);
            }
            $information->setDateCreation(new \DateTime('now'));
            $information->setUtilisateurweb($utilisateur);
            $information->setMessage($messageInformation);
            
            $em->persist($information);
            $em->flush();

            //push message
            $mobileUsers = $em->getRepository('ThiefaineReferentielBundle:Utilisateurmobile')->findAll();
            foreach ($mobileUsers as $mobileUser) {
                
                $pushMessage = new Push();
                $sendMessage = array(
                    "type" => "GendarmerieInformation",
                    "id" => $information->getId(),
                    "alerte" => $information->getAlerte()
                );
                $sendMessage = json_encode($sendMessage);

                $this->container->get('rms_push_notifications')->send(
                    $pushMessage->makeMessage(
                        $sendMessage,
                        $mobileUser->getToken()
                    )
                );
            }

            return $this->redirect($this->generateUrl('information'));
        }

        return $this->render($twig, $paramTwig);
    }

    /**
    * Afficher un formulaire pour éditer une information
    *
    */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $information = $em->getRepository('ThiefaineReferentielBundle:Information')->find($id);

        $twig = 'ThiefaineReferentielBundle:Information:edit.html.twig';

        if (!$information) {
            throw $this->createNotFoundException("Impossible de trouver l'information.");
        }

        $editForm = $this->createEditForm($information);

        $paramTwig = array(
            'information' => $information,
            'edit_form' => $editForm->createView(),
        );

        return $this->render($twig, $paramTwig);
    }

    /**
    * Modifier une information
    *
    */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $information = $em->getRepository('ThiefaineReferentielBundle:Information')->find($id);

        $twig = 'ThiefaineReferentielBundle:Information:edit.html.twig';
        $paramTwig = array(
            'entity' => $information,
            'edit_form' => $editForm->createView(),
        );
        $messageName = 'notice';

        if (!$information) {
            return $this->getRenderError($twig, $paramTwig, $messageName,
                'Impossible de trouver l\'information.');
        }

        //$deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($information);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            // On met à jour le message de l'information
            $messageInformation = $information->getMessage();

            // message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $messageInformation, -1);

            if ($message == '') {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Veuillez saisir un message.');
            }

            // file
            $file = $editForm['attachement']->getData();
            if($file != null){
                
                //suppression de la photo
                $photo = $information->getUrlphoto();
                if($photo != null){
                    $fs = new Filesystem();
                    $dir = __DIR__.'/../../../../web';
                    $fs->remove($dir.$photo);
                }

                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $information->setUrlphoto("/uploads/documents/".$finalNameFile);
            }

            $em->flush();

            return $this->redirect($this->generateUrl('information'));
        }

        return $this->render($twig, $paramTwig);
    }

    /**
    * Afficher un formulaire pour cloner une information
    *
    */
    public function cloneAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $information = $em->getRepository('ThiefaineReferentielBundle:Information')->find($id);

        $twig = 'ThiefaineReferentielBundle:Information:clone.html.twig';

        if (!$information) {
            throw $this->createNotFoundException("Impossible de trouver l'information.");
        }
        $cloneForm = $this->createCloneForm($information);

        $paramTwig = array(
            'information' => $information,
            'clone_form' => $cloneForm->createView(),
        );

        return $this->render($twig, $paramTwig);
    }

        /**
    * Modifier une information
    *
    */
    public function cloneupdateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $information = $em->getRepository('ThiefaineReferentielBundle:Information')->find($id);

        $information = clone $information;
        $em->detach($information);
        $em->persist($information);

        $cloneForm = $this->createCloneForm($information);
        $cloneForm->handleRequest($request);

        $twig = 'ThiefaineReferentielBundle:Information:clone.html.twig';
        $paramTwig = array(
            'information' => $information,
            'clone_form' => $cloneForm->createView(),
        );
        $messageName = 'notice';

        if (!$information) {
            return $this->getRenderError($twig, $paramTwig, $messageName,
                'Impossible de trouver l\'information.');
        }

        if ($cloneForm->isValid()) {

            // On met à jour le message de l'information
            $messageInformation = $information->getMessage();

            // message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $messageInformation, -1);

            if ($message == '') {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Veuillez saisir un message.');
            }

            // file
            $file = $cloneForm['attachement']->getData();
            if($file != null){
                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $information->setUrlphoto("/uploads/documents/".$finalNameFile);
            }

            $em->flush();

            //push message
            $mobileUsers = $em->getRepository('ThiefaineReferentielBundle:Utilisateurmobile')->findAll();
            foreach ($mobileUsers as $mobileUser) {
                
                $pushMessage = new Push();
                $sendMessage = array(
                    "type" => "GendarmerieInformation",
                    "id" => $information->getId(),
                    "alerte" => $information->getAlerte()
                );
                $sendMessage = json_encode($sendMessage);

                $this->container->get('rms_push_notifications')->send(
                    $pushMessage->makeMessage(
                        $sendMessage,
                        $mobileUser->getToken()
                    )
                );
            }

            return $this->redirect($this->generateUrl('information'));
        }

        return $this->render($twig, $paramTwig);
    }

    /**
     * Supprimer une information
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Information')->find($id);

        if (!$entity) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Impossible de trouver l\'information'
            );
            return $this->redirect($this->generateUrl('information'));
        }

        $em->remove($entity);
        $em->flush();

        //suppression de la photo
        $photo = $entity->getUrlphoto();
        if($photo != null){
            $fs = new Filesystem();
            $dir = __DIR__.'/../../../../web';
            $fs->remove($dir.$photo);
        }

        return $this->redirect($this->generateUrl('information'));
    }

    /**
    * Creates a form to create a Information entity.
    *
    * @param Information $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Information $entity)
    {
        $form = $this->createForm(new InformationType(), $entity, array(
            'action' => $this->generateUrl('information_create'),
            'method' => 'POST',
        ));

        return $form;
    }

        /**
    * Creates a form to create a Information entity.
    *
    * @param Information $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCloneForm($information)
    {

        $form = $this->createForm(new InformationType(), $information, array(
            'action' => $this->generateUrl('information_cloneupdate', array('id' => $information->getId())),
            'method' => 'POST'
        ));
        return $form;
    }

    /**
     * Creates a form to delete a Information entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('information'))
            ->add('annuler', 'reset', array    ( 'label'  => 'Annuler',
                                                 'attr' =>  array ( 'class' => 'btn btn-default' )
                                                )
                )
            ->getForm()
        ;
    }

    /**
     * Creates a form to show a Information entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createShowForm(Information $entity)
    {
        $form = $this->createForm(new InformationType(), $entity, array(
            'action' => $this->generateUrl('information'),
        ));

        return $form;
    }

    /**
      * Get availalble one Information.
      *
      * @param $idInformation id of the information.
      *
      * @View()
      * @Get("/information/{idInformation}")
      * @ApiDoc
    */
    public function getInformationOneAction($idInformation) {

        $em = $this->getDoctrine()->getManager();
        $information = $em->getRepository('ThiefaineReferentielBundle:Information')->find($idInformation);
        
        if($information->getUrlphoto() != null){
            
            $domaineName = $_SERVER['HTTP_HOST'];
            $information->setUrlphoto(
                $domaineName.$information->getUrlphoto()
            );

        }

        return $information;

    }

    /**
      * Get availalble Information.
      *
      * @View()
      * @Get("/information")
      * @ApiDoc
    */
    public function getInformationAction() {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Information')->findAll();

        $informations = array(); $i=0;
        foreach ($entity as $information) {
            $informations[$i] = $information->getId();
            $i++;
        }

        return $informations;

    }

    private function getRenderError($twig, $paramTwig, $messageName, $message){
        $this->container->get('session')->getFlashBag()->add(
            $messageName,
            $message
        );
        return $this->render($twig, $paramTwig);
    }


}
