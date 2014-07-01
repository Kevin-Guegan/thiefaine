<?php

/*
* This file is part of the FOSUserBundle package.
*
* (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Thiefaine\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\GroupFormType as BaseType;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupFormType extends BaseType
{

    private $class;

    /**
     * Constructor
     * 
     * @param $class
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // $em = ...
        // $objFromDb = $em->getRepository('')->find($id);

        //$em = $this->getDoctrine()->getManager();
        //$groupe = $em->getRepository('ThiefaineUserBundle:Alerte')->find($id);

        //$groupManager = $this->container->get('fos_user.group_manager');
        //$group = $groupManager->findGroupBy('name', $groupName);

        
        //$var = $objFromDb->hasRoles('ROLE_MANAGE_GROUP');

        //$em = $options['em'];
        //$group = $em->getRepository('ThiefaineUserBundle:Group')->find($id);

        //$rp = $this->em->getRepository('ThiefaineUserBundle:Groupe');

        parent::buildForm($builder, $options);

         $builder
        ->add('name', 'text', array(
                'label' => 'Nom',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Nom',
                    'title' => 'Renseigner le nom du groupe.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ))
        ->add('gerergroupes', 'checkbox', array(
            'label' => 'Gestion des groupes',
            'label_attr' => array(
                'style' => 'font-weight: inherit;'
            ),
            'attr' => array(
                'class' => 'form-control pull-right',
            ),
            'mapped' => false,
            'required' => false,
        ))
        ->add('gererutilisateurs', 'checkbox', array(
            'label' => 'Gestion des utilisateurs',
            'label_attr' => array(
                'style' => 'font-weight: inherit;'
            ),
            'attr' => array(
                'class' => 'form-control pull-right',
            ),
            'mapped' => false,
            'required' => false,
        ))
        ->add('gereralertes', 'checkbox', array(
            'label' => 'Gestion des alertes',
            'label_attr' => array(
                'style' => 'font-weight: inherit;'
            ),
            'attr' => array(
                'class' => 'form-control pull-right',
            ),
            'mapped' => false,
            'required' => false,
        ))
        ->add('gererinfos', 'checkbox', array(
            'label' => 'Gestion des informations',
            'label_attr' => array(
                'style' => 'font-weight: inherit;'
            ),
            'attr' => array(
                'class' => 'form-control pull-right',
            ),
            'mapped' => false,
            'required' => false,
        ))
        ->add('gererconseils', 'checkbox', array(
            'label' => 'Gestion des conseils',
            'label_attr' => array(
                'style' => 'font-weight: inherit;'
            ),
            'attr' => array(
                'class' => 'form-control pull-right',
            ),
            'mapped' => false,
            'required' => false,
        ))
        ->add('gererzones', 'checkbox', array(
            'label' => 'Gestion des zones',
            'label_attr' => array(
                'style' => 'font-weight: inherit;'
            ),
            'attr' => array(
                'class' => 'form-control pull-right',
            ),
            'mapped' => false,
            'required' => false,
        ));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Thiefaine\UserBundle\Entity\Groupe',
        ));
    }

    public function getName()
    {
        return 'thiefaine_user_group';
    }
}