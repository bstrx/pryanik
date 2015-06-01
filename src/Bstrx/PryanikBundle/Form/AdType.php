<?php

namespace Bstrx\PryanikBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enabled')
            ->add('price')
            ->add('created')
            ->add('type')
            ->add('title')
            ->add('description')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bstrx\PryanikBundle\Entity\Ad'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pryanikbundle_ad';
    }
}
