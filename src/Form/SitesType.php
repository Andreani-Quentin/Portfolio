<?php

namespace App\Form;

use App\Entity\Sites;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class SitesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tech')
            ->add('content')
            ->add('link')
            ->add('title')
            ->add('img', FileType::class, [
                'label' => false,
                'multiple' => false,
                'mapped' => false,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Sites::class,
        ]);
    }
}
