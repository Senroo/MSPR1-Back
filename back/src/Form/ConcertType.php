<?php

namespace App\Form;

use App\Entity\Artist;
use App\Entity\Stage;
use App\Entity\Concert;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ConcertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('stage', EntityType::class, [
                'label' => "Scène",
                'class' => Stage::class,
                'choice_label' => 'name',
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez indiquer une scène',
                    ]),
                ],
            ])
            ->add('name', TextType::class, [
                'label' => "Nom du Concert",
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un nom',
                    ]),
                ],
            ])
            ->add('description', TextType::class, [
                'label' => "Description",
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer une description',
                    ]),
                ],
            ])
            ->add('genre', ChoiceType::class, [
                'label' => 'Genre musical',
                'choices'  => [
                    'Pop' => 'Pop',
                    'Rap' => 'Rap',
                    'Electro' => 'Electro',
                    'Variété Française' => 'Variété FR',
                    'Rock' => 'Rock',
                ],
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner un genre musical',
                    ]),
                ],
            ])
            ->add('artist', EntityType::class, [
                'label' => "Artiste",
                'class' => Artist::class,
                'choice_label' => 'name',
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez indiquer un artiste',
                    ]),
                ],
            ])
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => "Date du concert",
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez renseigner une date',
                    ]),
                ],
            ])
            ->add('duration', TimeType::class, [
                'widget' => 'single_text',
                'label' => "Durée du concert",
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez renseigner une durée',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Concert::class,
        ]);
    }
}
