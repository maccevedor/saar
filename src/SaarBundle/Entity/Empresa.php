<?php

namespace SaarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AxaEmpresa
 *
 * @ORM\Table(name="empresa", uniqueConstraints={@ORM\UniqueConstraint(name="nit", columns={"nit"})})
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=255, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=255, nullable=true)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="afiliacion", type="string", length=255, nullable=true)
     */
    private $afiliacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_empresa", type="string", length=255, nullable=true)
     */
    private $tipoEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado;
}
