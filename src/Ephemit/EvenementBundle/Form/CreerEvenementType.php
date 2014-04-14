<?php
namespace Ephemit\EvenementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CreerEvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array(
                'required'=> true,
                'label'=> 'Nommez votre evenement'
            ))
            ->add('date', 'text', array(
                'required'=>true,
                'label'=>'Quand cela a-t-il lieu ?',
                'attr'=>array('class'=>'datepicker')
            ))
            ->add('description', 'textarea', array(
                'required'=>false,
                'label'=>'Decrivez votre evenement'
            ))
            ->add('lieu', 'text', array(
                'required'=>false,
                'label'=>'Ou cela se produira-t-il ?',
                'attr'=>array('class'=>'citypicker')
            ))
            ->add('publicpass', 'password', array(
                'required'=>false,
                'label'=>'Mot de passe (optionnel)'
            ))
            ->add('adminpass1', 'password', array(
                'required'=>true,
                'label'=>'Choisissez un premier mot de passe admin'
            ))
            ->add('adminpass2', 'password', array(
                'required'=>true,
                'label'=>'Choisissez un second mot de passe admin'
            ))
            ->add('public', 'choice', array(
                'required'=>true,
                'label'=>'Cette page est elle ouverte au public ?',
                'choices'=>array('0'=>'Non', '1'=>'Oui'),
                'attr'=>array('class'=>'public-choice'),
                'data'=>'Oui'
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ephemit\EvenementBundle\Entity\Evenement',
        ));
    }

    public function getName()
    {
        return 'ephemit_evenement_creer';
    }
}
?>
