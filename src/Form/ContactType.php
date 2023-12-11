<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('first_name', TextType::class, ['required' => true])
            ->add('last_name', TextType::class, ['required' => true])
            ->add('email', EmailType::class, ['required' => true])
            ->add('phone_number', IntegerType::class, ['required' => false])
            ->add('message', TextareaType::class, ['required' => false])
            ->add('formula', HiddenType::class, [
                'data' => 'abcdef',
                'attr' => ['id' => 'formula']
            ])
            ->add('save', SubmitType::class)
        ;
    }
}