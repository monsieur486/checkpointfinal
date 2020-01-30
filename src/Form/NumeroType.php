<?php

namespace App\Form;

use App\Entity\Numero;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NumeroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('actif')
            ->add('horaire')
            ->add('titre')
            ->add('resume')
            ->add('image')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Numero::class,
        ]);
    }
}
