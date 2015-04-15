<?php

namespace Thiefaine\ReferentielBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ZoneType extends AbstractType
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
                    'title' => 'Renseigner le nom de la zone.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ))
            ->add('latitude', 'text', array(
                'label' => 'Latitude',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Latitude',
                    'title' => 'Renseigner la latitude de la zone.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                ),
                'required' => false,
            ))
            ->add('longitude', 'text', array(
                'label' => 'Longitude',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Longitude',
                    'title' => 'Renseigner la longitude de la zone.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                ),
                'required' => false,
            ))
            ->add('zoom', 'text', array(
                'label' => 'Zoom',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Zoom',
                    'title' => 'Renseigner le zoom de la zone.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                ),
                'required' => false,
            ))
            ->add('actif', 'checkbox', array(
                'label' => 'Activée',
                'label_attr' => array(
                    'style' => 'font-weight: inherit;'
                ),
                'attr' => array(
                    'class' => 'pull-right',
                ),
                'required' => false,
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Thiefaine\ReferentielBundle\Entity\Zone'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'thiefaine_referentielbundle_zone';
    }
}
