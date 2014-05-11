<?php

namespace Thiefaine\ReferentielBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('message')
            ->add('datecreation')
            ->add('datemiseajour')
            ->add('datevalidite')
            ->add('compteurlecture')
            ->add('urlphoto')
            ->add('urllien')
            ->add('idtypemessage', 'entity', array(
                'class' => 'ThiefaineReferentielBundle:Typemessage',
                'property' => 'id',
            ))
            ->add('idutilisateur', 'entity', array(
                'class' => 'ThiefaineReferentielBundle:Utilisateurweb',
                'property' => 'id',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Thiefaine\ReferentielBundle\Entity\Message'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'thiefaine_referentielbundle_message';
    }
}
