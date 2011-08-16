<?php

namespace Acme\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('body')
            ->add('published_at')
        ;
    }

    public function getName()
    {
        return 'acme_blogbundle_posttype';
    }
}
