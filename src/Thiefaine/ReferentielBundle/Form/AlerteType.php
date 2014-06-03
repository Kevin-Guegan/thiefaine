<?php

namespace Thiefaine\ReferentielBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Thiefaine\ReferentielBundle\Form\MessageType;

class AlerteType extends AbstractType
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
            
        ;

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Thiefaine\ReferentielBundle\Entity\Alerte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'thiefaine_referentielbundle_alerte';
    }
}
