<?php

namespace Thiefaine\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', 'text', array(
                'label' => 'Nom',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Nom',
                    'title' => 'Renseigner votre nom.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ))
        ->add('prenom', 'text', array(
                'label' => 'Prenom',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Prenom',
                    'title' => 'Renseigner votre prenom.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ))
        ->add('email', 'text', array(
                'label' => 'E-mail',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'E-mail',
                    'title' => 'Renseigner votre email.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ))
        ->add('infos', 'textarea', array(
                'label' => 'Informations',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Informations',
                    'title' => 'Information sur votre status.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ));

    }

    public function getName()
    {
        return 'thiefaine_user_profile';
    }
}