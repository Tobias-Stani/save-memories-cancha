<?php
namespace App\Form;

use App\Entity\Partidos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartidosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('local', TextType::class, [
                'label' => 'Equipo Local',
                'attr' => ['class' => 'form-control']
            ])
            ->add('visitante', TextType::class, [
                'label' => 'Equipo Visitante',
                'attr' => ['class' => 'form-control']
            ])
            ->add('golLocal', IntegerType::class, [
                'label' => 'Goles del Local',
                'attr' => ['class' => 'form-control']
            ])
            ->add('golVisitante', IntegerType::class, [
                'label' => 'Goles del Visitante',
                'attr' => ['class' => 'form-control']
            ])
            ->add('estadio', TextType::class, [
                'label' => 'Estadio',
                'attr' => ['class' => 'form-control']
            ])
            ->add('competencia', TextType::class, [
                'label' => 'Competencia',
                'attr' => ['class' => 'form-control']
            ])
            ->add('fecha', DateType::class, [
                'label' => 'Fecha',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            ->add('link', TextType::class, [
                'label' => 'Link',
                'attr' => ['class' => 'form-control']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Partidos::class,
        ]);
    }
}