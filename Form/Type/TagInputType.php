<?php

namespace Redking\Bundle\SonataExtendedBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

use Redking\Bundle\SonataExtendedBundle\Form\DataTransformer\TagsTransformer;

class TagInputType extends AbstractType
{
    /**
     * Attachement d'un transformer pour la conversion string <-> array
     * @param  FormBuilderInterface $builder [description]
     * @param  array                $options [description]
     * @return [type]                        [description]
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $transformer = new TagsTransformer();
        $builder->addModelTransformer($transformer);
    }

    /**
     * Ajout du data role tagsinput
     * @param OptionsResolverInterface $resolver [description]
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'attr' => [
                'data-role' => 'tagsinput',
                'style' => 'width: auto !important'
            ],
        ));
    }

    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'taginput';
    }
}
