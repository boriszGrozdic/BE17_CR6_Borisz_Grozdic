<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ["attr"=>["placeholder"=>"Type the name", "class"=>" w-50 form-control mb-2 text-center"]])
            ->add('date_time', DateTimeType::class, ["attr"=>[ "class"=>"w-50 form-control mb-2 text-center" ]])
            ->add('description', TextareaType::class,["attr"=>["placeholder"=>"Type description", "class"=>"w-50 form-control mb-2 text-center", "id"=>"name"]])
            ->add('picture', TextType::class, ["attr"=>["placeholder"=>"Type URL of a picture", "class"=>"w-50 form-control mb-2 text-center"]])
            ->add('capacity', TextType::class, ["attr"=>["placeholder"=>"Type capacity", "class"=>"w-50 form-control mb-2 text-center"]])
            ->add('email', TextType::class, ["attr"=>["placeholder"=>"Type email", "class"=>"w-50 form-control mb-2 text-center" ]])
            ->add('phone', IntegerType::class, ["attr"=>["placeholder"=>"Type phone", "class"=>"w-50 form-control mb-2 text-center" ]])
            ->add('address', TextType::class, ["attr"=>["placeholder"=>"Type the address", "class"=>"w-50 form-control mb-2 text-center"]])
            ->add('url', TextType::class, ["attr"=>["placeholder"=>"Type the URL of an event", "class"=>"w-50 form-control mb-2 text-center"]])
            ->add('type', ChoiceType::class,[
                'choices'  => [
                    'music' => "music",
                    'sport' => "sport",
                    'social' => "social"
                ]
                , "attr"=> ["class"=>"form-control w-50 text-center"]]
                )
                ;
            }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
