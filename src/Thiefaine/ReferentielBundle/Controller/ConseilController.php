<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;

use Thiefaine\ReferentielBundle\Entity\Conseil;
use Thiefaine\ReferentielBundle\Form\ConseilType;

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


        $test = json_decode('{"id":1,"titre":"test","message":"<p>christopher lou&euml;t<\/p>","datecreation":"2014-07-29T21:44:10+0200","datemiseajour":"2014-07-30T21:03:25+0200","utilisateurweb":{"id":1,"username":"adminuser","username_canonical":"adminuser","email":"admin@admin.user","email_canonical":"admin@admin.user","enabled":true,"salt":"mihc2e4qwhcsoskck08w0wgggkkc0ks","password":"CBEhfKv3A8PCBxbPEBjE+awPAYx\/txjHsaAUDM79do2aXWrOjZkiXMLcEQi6o4wFyMLdTZDiGe+AHPfunWXuOA==","last_login":"2014-07-30T21:01:20+0200","groups":[],"locked":false,"expired":false,"roles":["ROLE_SUPER_ADMIN"],"credentials_expired":false,"nom":"admin","prenom":"admin","conseils":{"1":{"id":2,"titre":"cdls,jclcskdcl,kcs,k","message":"<p>scqsqqcsqcs<\/p>","datecreation":"2014-07-30T21:01:32+0200","categories":[]}},"informations":[{"id":1,"titre":"cacacaca","message":"<p>xsxsxsxsxs<\/p>","datecreation":"2014-07-29T21:43:59+0200","alerte":false,"zone":{"id":1,"nom":"toto","points":[]},"categories":[{"id":3,"libelle":"pupute"}]},{"id":10,"titre":"pipipipipi","message":"<p>pipipippi<\/p>","datecreation":"2014-07-29T21:43:59+0200","alerte":false,"zone":{"id":1,"nom":"toto","points":[]},"categories":[{"id":3,"libelle":"pupute"}]}],"zones":[{"id":1,"nom":"toto","points":[]}]},"categories":[]}');

        return $this->render('ThiefaineReferentielBundle:Conseil:index.html.twig', array(
            'conseils' => $conseils,
            'test' => $test
        ));
    }

    /**
     * Afficher un formulaire pour créer un conseil
     *
     */
    public function newAction()
    {
        $conseil = new Conseil();
        $form   = $this->createCreateForm($conseil);

        return $this->render('ThiefaineReferentielBundle:Conseil:new.html.twig', array(
            'conseil' => $conseil,
            'form'   => $form->createView(),
        ));
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
            $conseil->setUtilisateurweb($utilisateur);

            $em->persist($conseil);
            $em->flush();

            return $this->redirect($this->generateUrl('conseil', array('id' => $conseil->getId())));
        }

        return $this->render('ThiefaineReferentielBundle:Conseil:new.html.twig', array(
            'conseil' => $conseil,
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

        $conseil = $em->getRepository('ThiefaineReferentielBundle:Conseil')->find($id);

        if (!$conseil) {
            throw $this->createNotFoundException('Impossible de trouver le conseil.');
        }

        $editForm = $this->createEditForm($conseil);
        //$deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Conseil:edit.html.twig', array(
            'conseil'      => $conseil,
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

        $conseil = $em->getRepository('ThiefaineReferentielBundle:Conseil')->find($id);

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
                    'conseil' => $conseil,
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
        $conseil = $em->getRepository('ThiefaineReferentielBundle:Conseil')->find($id);

        if (!$conseil) {
            throw $this->createNotFoundException('Impossible de trouver le conseil.');
        }

        $em->remove($conseil);
        $em->flush();

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

        return $conseil;
    }

}
