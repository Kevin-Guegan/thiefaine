<?php

namespace Thiefaine\ReferentielBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class InformationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('titre', 'text', array    (   'label'  => 'Titre',
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
                                                'attr'   =>  array ( 'class' => 'form-control' ),
                                                'disabled' => true
                                            )
                )
            ->add('attachement', 'file', array( 
                'label'  => 'Joindre une photo',
                'required' => false,
                'label_attr'   =>  array(
                    'class' => 'control-label'
                ),
                'attr'   =>  array(
                    'class' => 'form-control filestyle',
                    'placeholder' => 'Photo',
                    'title' => "Joindre une photo ou copier/coller un lien d'image (le bouton visualiser n'est disponible que pour les liens d'image internet).",
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right',
                    'data-buttonText' => ' Rechercher...',
                    'accept' => 'image/*'
                ),
                'mapped' => false )
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
            ->add('message', 'textarea', array  (   'label'  => 'Message',
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
            ->add('zone', 'entity', array    (  'class' => 'ThiefaineReferentielBundle:Zone',
                                                'query_builder' => function(EntityRepository $er) {
                                                  return $er->createQueryBuilder('z')
                                                            ->where('z.actif = true');
                                                },
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
                    'class' => 'pull-right',
                ),
                'required' => false,
            ))
            ->add('categories','entity', array(
                'class'     => 'ThiefaineReferentielBundle:Categorie',
                'property'  => 'libelle',
                'label'     => 'Categorie',
                'expanded'  => false,
                'multiple'  => true,
                'label_attr'   =>  array ( 'class' => 'control-label' ),
                'attr'   =>  array  (   'class' => 'form-control',
                                        'placeholder' => 'Titre',
                                        'title' => "Renseigner la catégorie.",
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
