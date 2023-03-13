<?php

namespace App\Form;

use App\Entity\Sondage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SondageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('introduction')
            ->add('visibilite')
            ->add('datecreation')
//            ->add('theme.theme')
//            ->add('utilisateurs.nom')
//            ->add('createur.nom')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sondage::class,
        ]);
    }
}
