<?php

namespace Thiefaine\ReferentielBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategorieType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', 'text', array    (   'label'  => 'Nom',
                                                'label_attr'   =>  array ( 'class' => 'control-label' ),
                                                'attr'   =>  array  (   'class' => 'form-control',
                                                                        'placeholder' => 'Titre',
                                                                        'title' => "Renseigner le nom de la catégorie.",
                                                                        'maxlength' => '25',
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
            'data_class' => 'Thiefaine\ReferentielBundle\Entity\Categorie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'thiefaine_referentielbundle_categorie';
    }
}
