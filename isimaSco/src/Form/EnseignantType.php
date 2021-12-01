<?php

namespace App\Form;

use App\Entity\Enseignant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnseignantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('DateNais')
            ->add('Email')
            ->add('adress')
            ->add('matieres', EntityType::class, array(
                'class' => Matiere::class,
                'expanded' => true,
                'multiple' => true,
                'choice_label' => function(Matiere $matiere) {
                return $matiere->getTitre() ; }
               ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Enseignant::class,
        ]);
    }
}


