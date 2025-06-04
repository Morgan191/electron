<?php

namespace App\Form;

use App\Entity\Recrutement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints as Assert;
use Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordRequirements;

class CandidatForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email', EmailType::class)
            ->add('password', RepeatedType::class, [
    'type' => PasswordType::class,
    'invalid_message' => 'Les mots de passe doivent être identiques.',
    'required' => true,
    'first_options'  => [
        'label' => 'Mot de passe',
        'constraints' => [
            new PasswordRequirements([
                'requireLetters' => true,
                'minLength' => 8,
                'missingLettersMessage' => 'Votre mot de passe doit contenir au minimum une lettre',
                'tooShortMessage' => 'Votre mot de passe doit contenir au moins 8 caractères'
            ])
        ],
        'attr' => ['class' => 'password-field'],
    ],
    'second_options' => [
        'label' => 'Confirmation du mot de passe',
        'attr' => ['class' => 'password-field'],
    ],
]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recrutement::class,
        ]);
    }
}
