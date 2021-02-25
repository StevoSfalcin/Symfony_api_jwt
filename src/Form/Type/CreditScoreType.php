<?php
declare(strict_types=1);

namespace App\Form\Type;

use App\Entity\CreditScore;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotNull;

class CreditScoreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('idade', NumberType::class, [
            'constraints' => [
                new NotNull(),
            ]
        ])
        ->add('cpf', NumberType::class, [
            'constraints' => [
                new NotNull(),
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CreditScore::class,
        ]);
    }


}