<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Post;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => "Title",
                'attr' => [
                    'style' => 'width: 280px; margin-bottom: 10px'
                ]
            ])
            ->add('note', TextareaType::class, [
                'label' => 'Write note',
                'attr' => [
                    'style' => 'width: 100%; height: 120px; margin-bottom: 10px'
                ]
            ])
            ->add('attachment', FileType::class,[
                    'mapped' => false,
                    'attr' => [
                        'empty_data' => ''
                    ]
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'attr' => [
                    'style' => 'width: 280px; margin-bottom: 10px'
                    
                ]
            ])
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary float-right',
                    'style' => 'margin-left: 80%'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
