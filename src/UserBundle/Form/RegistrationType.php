<?php
// src/AppBundle/Form/RegistrationType.php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use SaarBundle\Entity\Empresa;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->add('identificacion');
      $builder->add('tipoIdentificacion',ChoiceType::class, array(
      'choices'  => array(
          'Cedula ciudadania' => "CC",
          'Cedula Estranjeria' => "CE",
          'Pasaporte' => "Pasaporte",
          'Tarjeta identidad' => 'TI'
      )));
      $builder->add('nombre');
      $builder->add('apellido');
      $builder->add('genero', ChoiceType::class, array(
      'choices'  => array(
          'Masculino' => "Masculino",
          'Femenino' => "Femenino"
      )));
      $builder->add('movil');
      //$builder->add('country');
      $builder->add('idEmpresa');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }


}
