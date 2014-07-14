<?php

namespace Thiefaine\ReferentielBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Thiefaine\ReferentielBundle\Form\MessageType;

class InformationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('message',new messageType())
            ->add('zone', 'entity', array    (  'class' => 'ThiefaineReferentielBundle:Zone',
                                                'property' => 'nom',
                                                'label'  => 'Zone *',
                                                'label_attr'   =>  array ( 'class' => 'control-label' ),
                                                'attr'   =>  array  (   'class' => 'form-control',
                                                                        'placeholder' => 'Titre',
                                                                        'title' => "Renseigner le titre de l'information.",
                                                                        'data-toggle' => 'tooltip',
                                                                        'data-placement' => 'right'
                                                                    )
                                            )
                )
            ->add('alerte', 'checkbox', array(
                'label' => 'Envoyer une alerte',

                'label_attr' => array(
                    'style' => 'font-weight: inherit;'

                ),
                'attr' => array(
                    'class' => 'form-control pull-right',
                ),
                'required' => false,
            ))
        ;

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Thiefaine\ReferentielBundle\Entity\Information'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'thiefaine_referentielbundle_information';
    }
}
