<?php
namespace Ephemit\EvenementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'hidden', array('required'=>false,'label'=>''))
            ->add('nomOriginal', 'hidden', array('required'=>false,'label'=>''))
            ->add('document', 'file', array(
                'required'=> false,
                'label'=>'',
                'mapped'=>false,
                'attr'=>array('class'=>'fileupload')
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ephemit\EvenementBundle\Entity\Document',
        ));
    }

    public function getName()
    {
        return 'ephemit_document_page';
    }
}
?>
