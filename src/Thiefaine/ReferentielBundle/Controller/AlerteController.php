<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\View\View;

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
     * Liste de toutes les alertes
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
     * Afficher un formulaire pour la création des alertes
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
     * Création d'une nouvelle alerte
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
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Impossible de trouver les messages de type alerte.'
                );
                return $this->render('ThiefaineReferentielBundle:Alerte:new.html.twig', array(
                    'entity' => $alerte,
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
                return $this->render('ThiefaineReferentielBundle:Alerte:new.html.twig', array(
                    'entity' => $alerte,
                    'form'   => $form->createView(),
                ));
            }

            // Contrôle de l'alerte
            $messageAlerte = $alerte->getMessage();

            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $messageAlerte->getMessage(), -1);

            if ($message == '') {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez saisir un message.'
                );
                return $this->render('ThiefaineReferentielBundle:Alerte:new.html.twig', array(
                    'entity' => $alerte,
                    'form'   => $form->createView(),
                ));
            }

            // Contrôle de la zone
            $zoneAlerte = $alerte->getZone();
            if (null === $zoneAlerte) {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez sélectionner une zone.'
                );
                return $this->render('ThiefaineReferentielBundle:Alerte:new.html.twig', array(
                    'entity' => $alerte,
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
                $messageAlerte->setUrlphoto($finalNameFile);
            }
            $messageAlerte->setDateCreation(new \DateTime('now'));
            $messageAlerte->setTypemessage($typeMessage);
            $messageAlerte->setUtilisateurweb($utilisateur);
            $em->persist($messageAlerte);

            $alerte->setMessage($messageAlerte);
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
     * Afficher un formulaire pour éditer une alerte
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
     * Modifier une alerte
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $alerte = $em->getRepository('ThiefaineReferentielBundle:Alerte')->find($id);

        if (!$alerte) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Impossible de trouver l\'alerte.'
            );
            return $this->render('ThiefaineReferentielBundle:Alerte:edit.html.twig', array(
                'entity'      => $alerte,
                'edit_form'   => $editForm->createView(),
            ));
        }

        //$deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($alerte);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            // On met à jour le message de l'alerte
            $messageAlerte = $alerte->getMessage();

            // message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $messageAlerte->getMessage(), -1);

            if ($message == '') {
                $this->container->get('session')->getFlashBag()->add(
                    'notice',
                    'Veuillez saisir un message.'
                );
                return $this->render('ThiefaineReferentielBundle:Alerte:edit.html.twig', array(
                    'entity'      => $alerte,
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
                $alerte->setUrlphoto($finalNameFile);
            }

            return $this->redirect($this->generateUrl('alerte'));
        }

        return $this->render('ThiefaineReferentielBundle:Alerte:edit.html.twig', array(
            'entity'      => $alerte,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
     * Supprimer une alerte
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Alerte')->find($id);

        if (!$entity) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Impossible de trouver l\'alerte'
            );
            return $this->redirect($this->generateUrl('alerte'));
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

    /**
      *Get availalble Alerte.
      *
      *@param $id id of the alerte.
      *
      *@Get("/alerte/{id}")
      *@ApiDoc
    */

    public function getAlerteAction($id) {

        $view = View::create();

        //$view = new View();

        $em = $this->getDoctrine()->getManager();


        $entity = $em->getRepository('ThiefaineReferentielBundle:Alerte')->find($id);

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
