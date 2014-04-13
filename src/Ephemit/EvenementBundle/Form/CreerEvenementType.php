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
                'required'=>true,
                'label'=>'Decrivez votre evenement'
            ))
            ->add('lieu', 'text', array(
                'required'=>true,
                'label'=>'Ou cela se produira-t-il ?',
                'attr'=>array('class'=>'citypicker')
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
