<?php

namespace SaarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="formulario_detalle")
 * @ORM\Entity
 */
class FormularioDetalle
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
    * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
    */
   private $nombre;

   /**
    * @var string
    *
    * @ORM\Column(name="tip", type="string", length=100, nullable=false)
    */
   private $tip;
    #Placeholder para ayudar al usuario

    /**
     * @var string
     *
     * @ORM\Column(name="$item_tipo", type="string", length=1, nullable=false)
     */
    private $itemTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="$item_contenido", type="string", length=1, nullable=false)
     */
    private $itemContenido;
    #contenido cuando sea abierto el campo

    /**
     * @var string
     *
     * @ORM\Column(name="ordering", type="string", length=100, nullable=false)
     */
    private $ordering = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="required", type="string", length=1, nullable=false)
     */
    private $required = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="searchable", type="string", length=1, nullable=false)
     */
    private $searchable = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="string", length=1, nullable=false)
     */
    private $param;
    #parametros para configurar los estilos

    /**
     * @var string
     *
     * @ORM\Column(name="field_code", type="string", length=1, nullable=false)
     */
    private $fieldCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_tiempo", type="datetime", nullable=true)
     */
    private $fechaTiempo;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=250, nullable=true)
     */

    private $hash;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado = 1;

     /** @var \idUser
     *
     * @ORM\ManyToOne(targetEntity="SaarBundle\Entity\Formulario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormulario", referencedColumnName="id")
     * })
     */

    private $idFormulario;

    function __construct(){
        //$this->hash=md5(time());
        $this->hash = sha1(substr(md5(unihashqid(rand())),0,15)."_".$this->id);
        $this->fecha =  new \DateTime('now');
        $this->fecha_tiempo =  strtotime("now");
    }
}
