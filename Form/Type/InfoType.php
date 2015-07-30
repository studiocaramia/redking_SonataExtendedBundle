<?php

namespace Redking\Bundle\SonataExtendedBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;


class InfoType extends AbstractType
{
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['wrapper_class'] = $options['wrapper_class'];
        $view->vars['content']       = $options['content'];
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'mapped'        => false,
            'label'         => false,
            'wrapper_class' => 'alert alert-warning',
            'content'       => ''
        ));
    }

    public function getParent()
    {
        return 'form';
    }

    public function getName()
    {
        return 'info';
    }
}
