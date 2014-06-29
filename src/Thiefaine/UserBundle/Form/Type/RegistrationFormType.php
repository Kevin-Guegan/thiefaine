<?php

namespace Thiefaine\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //parent::buildForm($builder, $options);
        $builder
            ->add('nom', 'text', array(
                'label' => 'Nom',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Nom',
                    'title' => 'Renseigner le nom de l\'utilisateur.',
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
                    'title' => 'Renseigner le prenom de l\'utilisateur.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ))
            ->add('username', 'text', array(
                'label' => 'Login',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Login',
                    'title' => 'Renseigner le login de l\'utilisateur.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
                'label' => 'Password',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Password',
                    'title' => 'Renseigner le password de l\'utilisateur.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                ),
            ))

            ->add('email', 'email', array(
                'label' => 'Email',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Email',
                    'title' => 'Renseigner le email de l\'utilisateur.',
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
                    'title' => 'Renseigner les informations de l\'utilisateur.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ))
        	->add('groupes');
    }

    public function getName()
    {
        return 'thiefaine_user_registration';
    }
}