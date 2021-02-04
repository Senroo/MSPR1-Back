<?php

namespace App\Form;

use App\Entity\MapMarker;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class MapMarkerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => "Intitulé du marqueur",
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un nom',
                    ]),
                ],
            ])
            ->add('description', TextType::class, [
                'label' => "Description du marqueur",
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer une description',
                    ]),
                ],
            ])
            ->add('location', TextType::class, [
                'label' => "Emplacement dans le festival",
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un lieu',
                    ]),
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type du marqueur',
                'choices'  => [
                    'WC' => 'WC',
                    'Bar' => 'Bar',
                    'Restaurant' => 'Restaurant',
                    'Accueil' => 'Accueil',
                    'Parking' => 'Parking',
                ],
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner un type de marqueur',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MapMarker::class,
        ]);
    }
}
