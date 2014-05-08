<?php

namespace Thiefaine\ReferentielBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InformationType extends AbstractType
{
		/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('titre', 'text', array 	( 	'label'  => 'Titre',
												'label_attr'   =>  array ( 'class' => 'control-label' ),
												'attr'   =>  array 	( 	'class' => 'form-control',
																		'placeholder' => 'Titre'
																	)
											)
				)
			->add('urlphoto', 'text', array 	( 	'label'  => 'Photo',
												'label_attr'   =>  array ( 'class' => 'control-label' ),
												'attr'   =>  array ( 	'class' => 'form-control',
																		'placeholder' => 'Photo'
																	)
											)
				)
			->add('urllien', 'text', array 	( 	'label'  => 'Lien',
												'label_attr'   =>  array ( 'class' => 'control-label' ),
												'attr'   =>  array 	( 	'class' => 'form-control',
																		'placeholder' => 'Lien'
																	)
											)
				)
			->add('datevalidite', 'text', array 	( 	'label'  => 'Date de validité',
												'label_attr'   =>  array 	( 'class' => 'control-label' ),
												'attr'   =>  array 	( 	'class' => 'form-control',
																		'placeholder' => 'Date de validité'
																	)
											)
				)
			->add('message', 'textarea', array 	( 	'label'  => 'Message *',
												'label_attr'   =>  array ( 	'class' => 'control-label',
																			'for' => 'infoInformation' ),
												'attr'   =>  array ( 	'class' => 'form-control',
																		'name' => 'infoInformation',
																		'id' => 'infoInformation',
																		'cols' => '50',
																		'placeholder' => "Saisisser les informations complémentaires liées à l'info."
																	)
											)
				);
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
		return 'thiefaine_referentielbundle_information';
	}
}
