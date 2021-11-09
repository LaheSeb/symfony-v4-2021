<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TableChoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder->add('table_number_list', ChoiceType::class, [
            'choices' => [
                'Table de 1' => 1,
                'Table de 2' => 2,
                'Table de 3' => 3,
                'Table de 4' => 4,
                'Table de 5' => 5,
                'Table de 6' => 6,
                'Table de 7' => 7,
                'Table de 8' => 8,
                'Table de 9' => 9,
                'Table de 10' => 10,
                'Table de 11' => 11,

            ]])
            ->add('lines_count', IntegerType::class, [
                'attr' => ['style' => 'width:35px'],
                'data' => 5,
            ])

            ->add('color', ChoiceType::class, [
                //'attr' => ['style' => 'width:35px'],
                'choices' => [
                    'Couleur rouge' => 'red',
                    'Couleur jaune' => 'yellow',
                    'Couleur orange' => 'orange',
                    'Couleur marron' => 'brown',
                    'Couleur noir' => 'black',
                    'Couleur gris' => 'gray',
                    'Couleur violet' => 'purple',
                    'Couleur pink' => 'pink',
                    'Couleur bleu' => 'blue',
                ],
            ])
            ->add('Choisir', SubmitType::class, [
                'attr' => ['class' => 'save'],
            ]);

    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
