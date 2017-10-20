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
     * @ORM\Column(name="item_tipo", type="string", length=1, nullable=false)
     */
    private $itemTipo;
    #email,numbre,web,etc

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

     /** @var \idFormulario
     *
     * @ORM\ManyToOne(targetEntity="SaarBundle\Entity\Formulario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formulario", referencedColumnName="id")
     * })
     */

    private $idFormulario;

    function __construct(){
        //$this->hash=md5(time());
        $this->hash = sha1(substr(md5(unihashqid(rand())),0,15)."_".$this->id);
        $this->fecha =  new \DateTime('now');
        $this->fecha_tiempo =  strtotime("now");
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return FormularioDetalle
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tip
     *
     * @param string $tip
     *
     * @return FormularioDetalle
     */
    public function setTip($tip)
    {
        $this->tip = $tip;

        return $this;
    }

    /**
     * Get tip
     *
     * @return string
     */
    public function getTip()
    {
        return $this->tip;
    }

    /**
     * Set itemTipo
     *
     * @param string $itemTipo
     *
     * @return FormularioDetalle
     */
    public function setItemTipo($itemTipo)
    {
        $this->itemTipo = $itemTipo;

        return $this;
    }

    /**
     * Get itemTipo
     *
     * @return string
     */
    public function getItemTipo()
    {
        return $this->itemTipo;
    }

    /**
     * Set ordering
     *
     * @param string $ordering
     *
     * @return FormularioDetalle
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * Get ordering
     *
     * @return string
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * Set required
     *
     * @param string $required
     *
     * @return FormularioDetalle
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return string
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set searchable
     *
     * @param string $searchable
     *
     * @return FormularioDetalle
     */
    public function setSearchable($searchable)
    {
        $this->searchable = $searchable;

        return $this;
    }

    /**
     * Get searchable
     *
     * @return string
     */
    public function getSearchable()
    {
        return $this->searchable;
    }

    /**
     * Set param
     *
     * @param string $param
     *
     * @return FormularioDetalle
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param
     *
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Set fieldCode
     *
     * @param string $fieldCode
     *
     * @return FormularioDetalle
     */
    public function setFieldCode($fieldCode)
    {
        $this->fieldCode = $fieldCode;

        return $this;
    }

    /**
     * Get fieldCode
     *
     * @return string
     */
    public function getFieldCode()
    {
        return $this->fieldCode;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return FormularioDetalle
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fechaTiempo
     *
     * @param \DateTime $fechaTiempo
     *
     * @return FormularioDetalle
     */
    public function setFechaTiempo($fechaTiempo)
    {
        $this->fechaTiempo = $fechaTiempo;

        return $this;
    }

    /**
     * Get fechaTiempo
     *
     * @return \DateTime
     */
    public function getFechaTiempo()
    {
        return $this->fechaTiempo;
    }

    /**
     * Set hash
     *
     * @param string $hash
     *
     * @return FormularioDetalle
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return FormularioDetalle
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idFormulario
     *
     * @param \SaarBundle\Entity\Formulario $idFormulario
     *
     * @return FormularioDetalle
     */
    public function setIdFormulario(\SaarBundle\Entity\Formulario $idFormulario = null)
    {
        $this->idFormulario = $idFormulario;

        return $this;
    }

    /**
     * Get idFormulario
     *
     * @return \SaarBundle\Entity\Formulario
     */
    public function getIdFormulario()
    {
        return $this->idFormulario;
    }
}
