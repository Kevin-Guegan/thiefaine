<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Thiefaine\ReferentielBundle\Entity\Utilisateurweb;
use Thiefaine\ReferentielBundle\Form\UtilisateurwebType;

/**
 * Utilisateurweb controller.
 *
 */
class UtilisateurwebController extends Controller
{

    /**
     * Lists all Utilisateurweb entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ThiefaineUserBundle:Utilisateurweb')->findAll();

        return $this->render('ThiefaineReferentielBundle:Utilisateurweb:index.html.twig', array(
            'entities' => $entities,
        ));
    }


    /**
     * Displays a form to edit an existing Utilisateurweb entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ThiefaineUserBundle:Utilisateurweb')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateurweb entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ThiefaineReferentielBundle:Utilisateurweb:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Utilisateurweb entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('ThiefaineUserBundle:Utilisateurweb')->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Unable to find Utilisateurweb entity.');
        }

        //$deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($user);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $userManager = $this->container->get('fos_user.user_manager');
            $userManager->updateUser($user);

            return $this->redirect($this->generateUrl('thiefaine_referentiel_utilisateurweb_list'));
        }

        return $this->render('ThiefaineReferentielBundle:Utilisateurweb:edit.html.twig', array(
            'entity'      => $user,
            'edit_form'   => $editForm->createView(),
        ));
    }
    
    /**
     * Deletes a Utilisateurweb entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ThiefaineReferentielBundle:Utilisateurweb')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Utilisateurweb entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('utilisateurweb'));
    }

    /**
     * Creates a form to delete a Utilisateurweb entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('utilisateurweb_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    /**
    * Creates a form to edit a Utilisateurweb entity.
    *
    * @param Utilisateurweb $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(\Thiefaine\UserBundle\Entity\Utilisateurweb $entity)
    {
        $form = $this->createForm(new \Thiefaine\UserBundle\Form\Type\RegistrationFormType('\Thiefaine\UserBundle\Entity\Utilisateurweb'), $entity, array(
            'action' => $this->generateUrl('utilisateurweb_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        return $form;
    }

    /**
    * Creates a form to create a Utilisateurweb entity.
    *
    * @param Utilisateurweb $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(\Thiefaine\UserBundle\Entity\Utilisateurweb $entity)
    {
        $form = $this->createForm(new \Thiefaine\UserBundle\Form\Type\ProfileFormType(), $entity, array(
            'action' => $this->generateUrl('utilisateurweb_create'),
            'method' => 'POST',
        ));

        return $form;
    }
}
