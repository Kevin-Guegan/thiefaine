<?php

namespace Thiefaine\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ChangePasswordFormType as BaseType;
use Symfony\Component\Security\Core\Validator\Constraint\UserPassword as OldUserPassword;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class ChangePasswordFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         if (class_exists('Symfony\Component\Security\Core\Validator\Constraints\UserPassword')) {
            $constraint = new UserPassword();
        } else {
            // Symfony 2.1 support with the old constraint class
            $constraint = new OldUserPassword();
        }

        //parent::buildForm($builder, $options);
        $builder
        ->add('current_password', 'password', array(
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
                ),
                'mapped' => false,
                'constraints' => $constraint,
            ))
        ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array(
                    'label' => 'Password',
                    'label_attr' => array(
                        'class' => 'control-label',
                        ),
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Password',
                        'title' => 'Renseigner le password de l\'utilisateur.',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'right',
                        ),
                    ),
                'second_options' => array(
                    'label' => 'Vérification',
                    'label_attr' => array(
                        'class' => 'control-label',
                        ),
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Password',
                        'title' => 'Renseigner le password de l\'utilisateur.',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'right',
                        ),
                    ),
                'invalid_message' => 'fos_user.password.mismatch',
            ));

    }

    public function getName()
    {
        return 'thiefaine_user_change_password';
    }
}