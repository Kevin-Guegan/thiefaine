<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\View\View;

use Thiefaine\ReferentielBundle\Entity\Information;
use Thiefaine\ReferentielBundle\Entity\Message;
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
     * Afficher un formulaire pour la création des informations
     *
     */
    public function newAction()
    {
        $information = new Information();
        $form   = $this->createCreateForm($information);

        $em = $this->getDoctrine()->getManager();
        $zones = $em->getRepository('ThiefaineReferentielBundle:Zone')->findAll();
        if (!$zones) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Veuillez d\'abord créer une zone.'
            );
        }

        return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
            'information' => $information,
            'zones' => $zones,
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

        if ($form->isValid()) {

           

            // Message de type information
            $typeMessage = $em->getRepository('ThiefaineReferentielBundle:Typemessage')->findOneByLibelle('information');
            if (!$typeMessage) {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Impossible de trouver les messages de type information.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
                    'information' => $information,
                    'zones' => $zones,
                    'form'   => $form->createView(),
                ));
            }

            // utilisateur
            $utilisateur = $this->container->get('security.context')->getToken()->getUser();
            if (!$utilisateur) {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Impossible de trouver l\'utilisateur.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
                    'information' => $information,
                    'zones' => $zones,
                    'form'   => $form->createView(),
                ));
            }

            // Contrôle de l'information
            $messageInformation = $information->getMessage();

            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $messageInformation->getMessage(), -1);

            if ($message == '') {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez saisir un message.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
                    'information' => $information,
                    'zones' => $zones,
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
                    'zones' => $zones,
                    'form'   => $form->createView(),
                ));
            }

            // file
            $file = $form['message']['attachement']->getData();
            if($file != null){
                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $messageInformation->setUrlphoto($finalNameFile);
            }
            $messageInformation->setDateCreation(new \DateTime('now'));
            $messageInformation->setTypemessage($typeMessage);
            $messageInformation->setUtilisateurweb($utilisateur);
            $em->persist($messageInformation);

            $information->setMessage($messageInformation);
            $em->persist($information);            

            $em->flush();

            return $this->redirect($this->generateUrl('information'));
        }

        return $this->render('ThiefaineReferentielBundle:Information:new.html.twig', array(
            'information' => $information,
            'zones' => $zones,
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
            'information'      => $information,
            'edit_form'   => $editForm->createView(),
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
                'entity'      => $information,
                'edit_form'   => $editForm->createView(),
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
            $message = preg_replace($pattern, $replacement, $messageInformation->getMessage(), -1);

            if ($message == '') {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez saisir un message.'
                );
                return $this->render('ThiefaineReferentielBundle:Information:edit.html.twig', array(
                    'entity'      => $information,
                    'edit_form'   => $editForm->createView(),
                ));
            }

            $em->flush();

            // file
            $file = $editForm['message']['attachement']->getData();
            if($file != null){
                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $information->getMessage()->setUrlphoto($finalNameFile);
            }

            return $this->redirect($this->generateUrl('information'));
        }

        return $this->render('ThiefaineReferentielBundle:Information:edit.html.twig', array(
            'entity'      => $information,
            'edit_form'   => $editForm->createView(),
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
    * Creates a form to edit a Information entity.
    *
    * @param Information $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Information $entity)
    {
        $form = $this->createForm(new InformationType(), $entity, array(
            'action' => $this->generateUrl('information_update', array('id' => $entity->getId())),
            'method' => 'PUT',
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
      *Get availalble Information.
      *
      *@param $id id of the information.
      *
      *@Get("/information/{id}")
      *@ApiDoc
    */

    public function getInformationAction($id) {

        $view = View::create();

        //$view = new View();

        $em = $this->getDoctrine()->getManager();


        $entity = $em->getRepository('ThiefaineReferentielBundle:Information')->find($id);

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
