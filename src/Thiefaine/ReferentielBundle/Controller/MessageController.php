<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;

use Thiefaine\ReferentielBundle\Entity\Push;
use Thiefaine\ReferentielBundle\Entity\Message;
use Thiefaine\ReferentielBundle\Entity\Zone;
use Thiefaine\ReferentielBundle\Entity\Utilisateurmobile;
use Thiefaine\ReferentielBundle\Form\MessageType;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

/**
 * Message controller.
 *
 */
class MessageController extends Controller
{

    /**
     * Liste de tout les messages
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $messages = $em->getRepository('ThiefaineReferentielBundle:Message')->findBy([], ['datecreation' => 'DESC']);

        $twig = 'ThiefaineReferentielBundle:Message:index.html.twig';
        $paramTwig = array(
            'messages' => $messages,
        );

        return $this->render($twig, $paramTwig);
    }

    /**
     * Afficher un formulaire pour visionner un message
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $message = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        if (!$message) {
            throw $this->createNotFoundException("Impossible de trouver le message.");
        }

        $showForm = $this->createShowForm($message);
        $twig = 'ThiefaineReferentielBundle:Message:show.html.twig';
        $paramTwig = array(
            'message' => $message,
            'show_form' => $showForm->createView(),
        );

        return $this->render($twig,$paramTwig);
    }

    /**
     * Afficher un formulaire pour la création des messages
     *
     */
    public function newAction()
    {
        $message = new Message();
        $form   = $this->createCreateForm($message);

        $em = $this->getDoctrine()->getManager();

        $zones = $em->getRepository('ThiefaineReferentielBundle:Zone')->findAll();
        $categories = $em->getRepository('ThiefaineReferentielBundle:Keyword')->findAll();

        $twig = 'ThiefaineReferentielBundle:Message:new.html.twig';
        $paramTwig = array(
                'message' => $message,
                'show' => false,
                'form'   => $form->createView(),
            );
        $messageName = 'notice';

        if (!$zones) {
            return $this->getRenderError($twig, $paramTwig, $messageName,
                'Veuillez d\'abord créer une zone.');

        } elseif (!$zones) {
            return $this->getRenderError($twig, $paramTwig, $messageName,
                'Veuillez d\'abord créer une zone.');
        } else {
            $paramTwig['show'] = true;
            return $this->render($twig, $paramTwig);
        }
    }

    /**
     * Création d'un nouveau message
     *
     */
    public function createAction(Request $request)
    {
        $message = new Message();
        $form = $this->createCreateForm($message);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $zones = $em->getRepository('ThiefaineReferentielBundle:Zone')->findAll();

        $twig = 'ThiefaineReferentielBundle:Message:new.html.twig';
        $paramTwig = array(
                'message' => $message,
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
            $keywords = $message->getKeywords();

            // Contrôle du message
            $messageMessage = $message->getMessage();
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $messageMessage, -1);

            if ($message == '') {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Veuillez saisir un message.');
            }

            // Contrôle de la zone
            $zoneMessage = $message->getZone();
            if (null === $zoneMessage) {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Veuillez sélectionner une zone.');
            }

            // file
            $file = $form['attachement']->getData();
            if($file != null){
                $dir = __DIR__.'/../../../../web/uploads/documents';

                //check if dir exist, if not, create it
                if (!is_dir($dir)){
                    mkdir($dir,0777,true);
                }

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $message->setUrlphoto("/uploads/documents/".$finalNameFile);
            }
            $message->setDateCreation(new \DateTime('now'));
            $message->setUtilisateurweb($utilisateur);
            $message->setMessage($messageMessage);
            
            $em->persist($message);
            $em->flush();

            //push message
            $mobileUsers = $em->getRepository('ThiefaineReferentielBundle:Utilisateurmobile')->findAll();
            foreach ($mobileUsers as $mobileUser) {
                
                $pushMessage = new Push();
                $sendMessage = array(
                    "type" => "EnsembleMessage",
                    "id" => $message->getId(),
                    "alerte" => $message->getAlerte()
                );
                $sendMessage = json_encode($sendMessage);

                $this->container->get('rms_push_notifications')->send(
                    $pushMessage->makeMessage(
                        $sendMessage,
                        $mobileUser->getToken()
                    )
                );
            }

            return $this->redirect($this->generateUrl('message'));
        }

        return $this->render($twig, $paramTwig);
    }

    /**
    * Afficher un formulaire pour éditer un message
    *
    */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $message = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        $twig = 'ThiefaineReferentielBundle:Message:edit.html.twig';

        if (!$message) {
            throw $this->createNotFoundException("Impossible de trouver le message.");
        }

        $editForm = $this->createEditForm($message);

        $paramTwig = array(
            'message' => $message,
            'edit_form' => $editForm->createView(),
        );

        return $this->render($twig, $paramTwig);
    }

    /**
    * Modifier un message
    *
    */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $message = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        $twig = 'ThiefaineReferentielBundle:Message:edit.html.twig';
        $paramTwig = array(
            'entity' => $message,
            'edit_form' => $editForm->createView(),
        );
        $messageName = 'notice';

        if (!$message) {
            return $this->getRenderError($twig, $paramTwig, $messageName,
                'Impossible de trouver le message.');
        }

        //$deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($message);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            // On met à jour le message du message
            $messageMessage = $message->getMessage();

            // message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $messageMessage, -1);

            if ($message == '') {
                return $this->getRenderError($twig, $paramTwig, $messageName,
                    'Veuillez saisir un message.');
            }

            // file
            $file = $editForm['attachement']->getData();
            if($file != null){
                
                //suppression de la photo
                $photo = $message->getUrlphoto();
                if($photo != null){
                    $fs = new Filesystem();
                    $dir = __DIR__.'/../../../../web';
                    $fs->remove($dir.$photo);
                }

                $dir = __DIR__.'/../../../../web/uploads/documents';

                $nameFile = $file->getClientOriginalName();
                $finalNameFile = rand(1, 99999).'-'.$nameFile;

                $file->move($dir, $finalNameFile);
                $message->setUrlphoto("/uploads/documents/".$finalNameFile);
            }

            $em->flush();

            return $this->redirect($this->generateUrl('message'));
        }

        return $this->render($twig, $paramTwig);
    }

    /**
    * Afficher un formulaire pour cloner un message
    *
    */
    public function cloneAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $message = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        $twig = 'ThiefaineReferentielBundle:Message:clone.html.twig';

        if (!$message) {
            throw $this->createNotFoundException("Impossible de trouver le message.");
        }
        $cloneForm = $this->createCloneForm($message);

        $paramTwig = array(
            'message' => $message,
            'clone_form' => $cloneForm->createView(),
        );

        return $this->render($twig, $paramTwig);
    }

    /**
    * Modifier un message
    *
    */
    public function cloneupdateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $message = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        $message = clone $message;
        $em->detach($message);
        $em->persist($message);

        $cloneForm = $this->createCloneForm($message);
        $cloneForm->handleRequest($request);

        $twig = 'ThiefaineReferentielBundle:Message:clone.html.twig';
        $paramTwig = array(
            'message' => $message,
            'clone_form' => $cloneForm->createView(),
        );
        $messageName = 'notice';

        if (!$message) {
            return $this->getRenderError($twig, $paramTwig, $messageName,
                'Impossible de trouver le message.');
        }

        if ($cloneForm->isValid()) {

            // On met à jour le message du message
            $messageMessage = $message->getMessage();

            // message non vide
            $pattern = '/<p>(?:\s|&nbsp;)+<\/p>/';
            $replacement = '';
            $message = preg_replace($pattern, $replacement, $messageMessage, -1);

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
                $message->setUrlphoto("/uploads/documents/".$finalNameFile);
            }

            $em->flush();

            //push message
            $mobileUsers = $em->getRepository('ThiefaineReferentielBundle:Utilisateurmobile')->findAll();
            foreach ($mobileUsers as $mobileUser) {
                
                $pushMessage = new Push();
                $sendMessage = array(
                    "type" => "EnsembleMessage",
                    "id" => $message->getId(),
                    "alerte" => $message->getAlerte()
                );
                $sendMessage = json_encode($sendMessage);

                $this->container->get('rms_push_notifications')->send(
                    $pushMessage->makeMessage(
                        $sendMessage,
                        $mobileUser->getToken()
                    )
                );
            }

            return $this->redirect($this->generateUrl('message'));
        }

        return $this->render($twig, $paramTwig);
    }

    /**
     * Supprimer un message
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Message')->find($id);

        if (!$entity) {
            $this->container->get('session')->getFlashBag()->add(
                'notice',
                'Impossible de trouver le message'
            );
            return $this->redirect($this->generateUrl('message'));
        }

        $em->remove($entity);
        $em->flush();

        //suppression de la photo
        $photo = $entity->getUrlphoto();
        if($photo != null){
            $fs = new Filesystem();
            $dir = __DIR__.'/../../../../web';

            //chercher si la photo est utilisée ailleurs
            $repo = $em->getRepository('ThiefaineReferentielBundle:Message');
            $query = $repo->createQueryBuilder('info');
            $query->select('COUNT(info)');
            $query->where('info.urlphoto = :photoUrl');
            $query->setParameter('photoUrl',$photo);
            $count = $query->getQuery()->getSingleScalarResult();
            
            //si non, la supprimer
            if ($count < 1){
                $fs->remove($dir.$photo);
            }
        }

        return $this->redirect($this->generateUrl('message'));
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
            'action' => $this->generateUrl('message_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
    * Creates a form to create a Message entity.
    *
    * @param Message $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCloneForm($message)
    {

        $form = $this->createForm(new MessageType(), $message, array(
            'action' => $this->generateUrl('message_cloneupdate', array('id' => $message->getId())),
            'method' => 'POST'
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
            ->setAction($this->generateUrl('message'))
            ->add('annuler', 'reset', array    ( 'label'  => 'Annuler',
                                                 'attr' =>  array ( 'class' => 'btn btn-default' )
                                                )
                )
            ->getForm()
        ;
    }

    /**
     * Creates a form to show a Message entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createShowForm(Message $entity)
    {
        $form = $this->createForm(new MessageType(), $entity, array(
            'action' => $this->generateUrl('message'),
        ));

        return $form;
    }

    /**
      * Get availalble one Message.
      *
      * @param $idMessage id of the message.
      *
      * @View()
      * @Get("/message/{idMessage}")
      * @ApiDoc
    */
    public function getMessageOneAction($idMessage) {

        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository('ThiefaineReferentielBundle:Message')->find($idMessage);
        
        if($message->getUrlphoto() != null){
            
            $domaineName = $_SERVER['HTTP_HOST'];
            $message->setUrlphoto(
                $domaineName.$message->getUrlphoto()
            );

        }

        return $message;

    }

    /**
      * Get availalble Message.
      *
      * @View()
      * @Get("/message")
      * @ApiDoc
    */
    public function getMessageAction() {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ThiefaineReferentielBundle:Message')->findAll();

        $messages = array(); $i=0;
        foreach ($entity as $message) {
            $messages[$i] = $message->getId();
            $i++;
        }

        return $messages;

    }

    private function getRenderError($twig, $paramTwig, $messageName, $message){
        $this->container->get('session')->getFlashBag()->add(
            $messageName,
            $message
        );
        return $this->render($twig, $paramTwig);
    }


}
