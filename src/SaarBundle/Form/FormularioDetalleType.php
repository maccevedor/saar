<?php

namespace SaarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormularioDetalleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre')->add('tip')->add('itemTipo')->add('ordering')->add('required')->add('searchable')->add('param')->add('fieldCode')->add('fecha')->add('fechaTiempo')->add('hash')->add('estado')->add('idFormulario');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SaarBundle\Entity\FormularioDetalle'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'saarbundle_formulariodetalle';
    }


}
