<?php

namespace App\Form;

use App\Entity\Recrutement2;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Candidat2Form extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateNaissance')
            ->add('adresse')
            ->add('telephone')
            ->add('nationalite')
            ->add('ecoleActuelle')
            ->add('nomCursus')
            ->add('specialite')
            ->add('dateEntreeCursus')
            ->add('anneeCursus')
            ->add('carteEtudiant')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recrutement2::class,
        ]);
    }
}
