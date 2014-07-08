<?php

namespace Thiefaine\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ChangePasswordFormType as BaseType;

class ChangePasswordFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        /*$builder
        ->add('current_password', 'text', array(
                'label' => 'Mot de passe actuel',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Mot de passe actuel',
                    'title' => 'Renseigner votre mot de passe actuel.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ))
        ->add('plainPassword_first', 'text', array(
                'label' => 'Nouveau mot de passe',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Nouveau mot de passe',
                    'title' => 'Renseigner votre nouveau mot de passe.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ))
        ->add('plainPassword_second', 'text', array(
                'label' => 'Vérification du mot de passe',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Nouveau mot de passe',
                    'title' => 'Renseigner de nouveau votre nouveau mot de passe.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ));*/

    }

    public function getName()
    {
        return 'thiefaine_user_change_password';
    }
}