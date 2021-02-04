<?php

namespace App\Form;

use App\Entity\Notification;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class NotificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => "Titre de la notification",
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez indiquer un titre',
                    ]),
                ],
            ])
            ->add('message', TextType::class, [
                'label' => "Contenu de la notification",
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un contenu',
                    ]),
                ],
            ])
            ->add('urgency', ChoiceType::class, [
                'label' => "Niveau d'urgence de la notification",
                'choices'  => [
                    'Normale' => 'Normale',
                    'Importante' => 'Importante',
                    'Urgente' => 'Urgente',
                ],
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => "Veuillez sélectionner une catégorie d'urgence",
                    ]),
                ],
            ])
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => "Date de début de diffusion",
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez renseigner une date de début de diffusion',
                    ]),
                ],
            ])
            ->add('duration', TimeType::class, [
                'widget' => 'single_text',
                'label' => "Durée de diffusion",
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez renseigner une durée de diffusion',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Notification::class,
        ]);
    }
}
