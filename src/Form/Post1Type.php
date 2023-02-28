<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Post1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('hourlyRate')
            ->add('workType',ChoiceType::class,[
                "choices" => [
                    "Ponctuel" => true,
                    "Régulier" => false,
                ],
                "label" => "Ponctuel ou regulier" 
                ])
            ->add('postalCode')
            ->add('radius')
            ->add('slug')
            ->add('user')
            ->add('tag')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
