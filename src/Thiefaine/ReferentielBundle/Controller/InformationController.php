<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;

use Thiefaine\ReferentielBundle\Entity\Information;
use Thiefaine\ReferentielBundle\Entity\Zone;
use Thiefaine\ReferentielBundle\Form\InformationType;

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

        $informations = $em->getRepository('ThiefaineReferentielBundle:Information')->findAll();

        return $this->render('ThiefaineReferentielBundle:Information:index.html.twig', array(
            'informations' => $informations,
        ));
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

        return $this->render('ThiefaineReferentielBundle:Information:show.html.twig', array(
            'information' => $information,
            'show_form' => $showForm->createView(),
        ));
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
        $show = true;

        if (!$zones && !$categories) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Veuillez d\'abord créer une zone et une catégorie.'
            );
            $show = false;
        } elseif (!$zones) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Veuillez d\'abord créer une zone.'
            );
            $show = false;
        } elseif (!$categories) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Veuillez d\'abord créer une catégorie.'
            );
            $show = false;
        }

        return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
            'information' => $information,
            'show' => $show,
            'form'   => $form->createView(),
        ));
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
        $show = true;

        if ($form->isValid()) {

            // utilisateur
            $utilisateur = $this->container->get('security.context')->getToken()->getUser();
            if (!$utilisateur) {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Impossible de trouver l\'utilisateur.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
                    'information' => $information,
                    'show' => $show,
                    'form'   => $form->createView(),
                ));
            }

            // Contrôle de l'information
            $messageInformation = $information->getMessage();
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $messageInformation, -1);

            if ($message == '') {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez saisir un message.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
                    'information' => $information,
                    'show' => $show,
                    'form'   => $form->createView(),
                ));
            }

            // Contrôle de la zone
            $zoneInformation = $information->getZone();
            if (null === $zoneInformation) {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez sélectionner une zone.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
                    'information' => $information,
                    'show' => $show,
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
                $information->setUrlphoto($finalNameFile);
            }
            $information->setDateCreation(new \DateTime('now'));
            $information->setUtilisateurweb($utilisateur);
            $em->persist($information);

            $information->setMessage($messageInformation);
            $em->persist($information);            

            $em->flush();

            return $this->redirect($this->generateUrl('information'));
        }

        return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
            'information' => $information,
            'show' => $show,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Afficher un formulaire pour éditer une information
    *
    */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $information = $em->getRepository('ThiefaineReferentielBundle:Information')->find($id);

        if (!$information) {
            throw $this->createNotFoundException("Impossible de trouver l'information.");
        }

        $editForm = $this->createEditForm($information);
        //$deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Information:edit.html.twig', array(
            'information' => $information,
            'edit_form' => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Modifier une information
    *
    */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $information = $em->getRepository('ThiefaineReferentielBundle:Information')->find($id);

        if (!$information) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Impossible de trouver l\'information.'
            );
            return $this->render('ThiefaineReferentielBundle:Information:edit.html.twig', array(
                'entity' => $information,
                'edit_form' => $editForm->createView(),
            ));
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
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez saisir un message.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:edit.html.twig', array(
                    'entity' => $information,
                    'edit_form' => $editForm->createView(),
                ));
            }

            // file
            $file = $editForm['attachement']->getData();
            if($file != null){
                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $information->setUrlphoto($finalNameFile);
            }

            $em->flush();

            return $this->redirect($this->generateUrl('information'));
        }

        return $this->render('ThiefaineReferentielBundle:Information:edit.html.twig', array(
            'entity' => $information,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
    * Afficher un formulaire pour cloner une information
    *
    */
    public function cloneAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $information = $em->getRepository('ThiefaineReferentielBundle:Information')->find($id);
        if (!$information) {
            throw $this->createNotFoundException("Impossible de trouver l'information.");
        }


        $cloneForm = $this->createCloneForm($information);

        return $this->render('ThiefaineReferentielBundle:Information:clone.html.twig', array(
            'information' => $information,
            'clone_form' => $cloneForm->createView(),
        ));
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

        if (!$information) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Impossible de trouver l\'information.'
            );
            return $this->render('ThiefaineReferentielBundle:Information:clone.html.twig', array(
                'information' => $information,
                'clone_form' => $cloneForm->createView(),
            ));
        }

        if ($cloneForm->isValid()) {

            // On met à jour le message de l'information
            $messageInformation = $information->getMessage();

            // message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $messageInformation, -1);

            if ($message == '') {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez saisir un message.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:clone.html.twig', array(
                    'information' => $information,
                    'edit_form' => $cloneForm->createView(),
                ));
            }

            // file
            $file = $cloneForm['attachement']->getData();
            if($file != null){
                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $information->setUrlphoto($finalNameFile);
            }

            $em->flush();

            return $this->redirect($this->generateUrl('information'));
        }

        return $this->render('ThiefaineReferentielBundle:Information:clone.html.twig', array(
            'information' => $information,
            'clone_form' => $cloneForm->createView(),
        ));
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
}
