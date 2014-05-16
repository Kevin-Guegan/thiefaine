<?php

namespace Thiefaine\ReferentielBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConseilType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', 'text', array    (   'label'  => 'Titre *',
                                                'label_attr'   =>  array ( 'class' => 'control-label' ),
                                                'attr'   =>  array  (   'class' => 'form-control',
                                                                        'placeholder' => 'Titre',
                                                                        'title' => "Renseigner le titre de l'information.",
                                                                        'data-toggle' => 'tooltip',
                                                                        'data-placement' => 'right'
                                                                    )
                                            )
                )
            ->add('urlphoto', 'text', array     (   'label'  => 'Photo',
                                                    'required' => false,
                                                'label_attr'   =>  array ( 'class' => 'control-label' ),
                                                'attr'   =>  array (    'class' => 'form-control',
                                                                        'placeholder' => 'Photo',
                                                                        'title' => "Joindre une photo ou copier/coller un lien d'image (le bouton visualiser n'est disponible que pour les liens d'image internet).",
                                                                        'data-toggle' => 'tooltip',
                                                                        'data-placement' => 'right'
                                                                    )
                                            )
                )
            ->add('urllien', 'text', array  (   'label'  => 'Lien',
                                                'required' => false,
                                                'label_attr'   =>  array ( 'class' => 'control-label' ),
                                                'attr'   =>  array  (   'class' => 'form-control',
                                                                        'placeholder' => 'Lien',
                                                                        'title' => "Renseigner un lien",
                                                                        'data-toggle' => 'tooltip',
                                                                        'data-placement' => 'right'
                                                                    )
                                            )
                )
            ->add('datevalidite', 'date', array     (   'widget' => 'single_text',
                                                        'input' => 'datetime',
                                                        'format' => 'dd/MM/yyyy',
                                                'label'  => 'Date de validité',
                                                'label_attr'   =>  array    ( 'class' => 'control-label' ),
                                                'required' => false,
                                                'attr'   =>  array  (   'class' => 'form-control',
                                                                        'placeholder' => 'Date de validité',
                                                                        'title' => "Renseigner / Sélectionner une date de validitée (infinie si non rempli).",
                                                                        'data-toggle' => 'tooltip',
                                                                        'data-placement' => 'right'
                                                                    )
                                            )
                )
            ->add('message', 'textarea', array  (   'label'  => 'Message *',
                                                'label_attr'   =>  array (  'class' => 'control-label',
                                                                            'for' => 'infoInformation' ),
                                                'attr'   =>  array (    'class' => 'form-control',
                                                                        'name' => 'infoInformation',
                                                                        'id' => 'infoInformation',
                                                                        'cols' => '50',
                                                                        'placeholder' => "Saisisser les informations complémentaires liées à l'info."
                                                                    )
                                            )
                )
            ->add('valider', 'submit', array    ( 'label'  => 'Valider',
                                                 'attr' =>  array ( 'class' => 'btn btn-primary' )
                                                )
                )
            ->add('annuler', 'reset', array    ( 'label'  => 'Annuler',
                                                 'attr' =>  array ( 'class' => 'btn btn-default' )
                                                )
                );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Thiefaine\ReferentielBundle\Entity\Conseil'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'thiefaine_referentielbundle_conseil';
    }
}
