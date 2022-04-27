<?php

namespace App\Form;

use App\Entity\Movie;
// use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MovieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl outline-none',
                    'placeholder' => 'Enter Name'
                ),
                'label' => false,
                'required' => false,
            ])
            ->add('releaseDate', IntegerType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block mb-4 mt-3 border-b-2 w-full h-20 text-6xl outline-none',
                    'placeholder' => 'Enter Release Date'
                ),
                'label' => false,
                'required' => false,

            ])
            ->add('ImagePath', FileType::class, array(
                'required' => false,
                'mapped' => false,
                'required' => false,

            ))
            // ->add('actors')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
