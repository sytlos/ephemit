<?php
namespace Ephemit\EvenementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProtectionPageAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adminpass1', 'password', array(
                'required'=> true,
                'attr'=>array('placeholder'=>'Mot de passe 1')
            ))
            ->add('adminpass2', 'password', array(
                'required'=> true,
                'attr'=>array('placeholder'=>'Mot de passe 2')
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        /*$resolver->setDefaults(array(
            'data_class' => 'Ephemit\EvenementBundle\Entity\Evenement',
        ));*/
    }

    public function getName()
    {
        return 'ephemit_protection_page_admin';
    }
}
?>
