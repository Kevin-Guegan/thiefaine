<?php

namespace Thiefaine\ReferentielBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilisateurwebType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
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
            ->add('login', 'text', array(
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
            ->add('password', 'text', array(
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
                )
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
            ->add('groupe');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Thiefaine\ReferentielBundle\Entity\Utilisateurweb'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'thiefaine_referentielbundle_utilisateurweb';
    }
}
