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
            ->add('message',new messageType() )
            ->add('zone')
            ->add('valider', 'submit', array    ( 'label'  => 'Valider',
                                                 'attr' =>  array ( 'class' => 'btn btn-primary' )
                                                )
                )
            ->add('annuler', 'reset', array    ( 'label'  => 'Annuler',
                                                 'attr' =>  array ( 'class' => 'btn btn-default' )
                                                )
                );
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
