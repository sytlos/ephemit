<?php
namespace Ephemit\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PageSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('search', 'text', array(
                    'required'=> true,
                    'attr'=> array('placeholder'=>'Rechercher une page')
                ));
    }
    
    public function getName()
    {
        return 'ephemit_page_search';
    }
}
?>
