<?php

namespace CREA\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('telephone')
            ->add('nomEntreprise')
            ->add('numeroEnregistrementEntreprise')
            ->add('isCoder', 'choice', array(
                'choices' => array(true => 'Oui', false => 'Non'),
                'expanded' => false,
                'multiple' => false
            ))
            ->add('isPrototype', 'choice', array(
                'choices' => array(true => 'Oui', false => 'Non'),
                'expanded' => false,
                'multiple' => false
            ))
            ->add('adresse')
            ->add('descriptionEntreprise')
            ->add('descriptionProduit')

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CREA\MainBundle\Entity\Post'
        ));
    }
}
