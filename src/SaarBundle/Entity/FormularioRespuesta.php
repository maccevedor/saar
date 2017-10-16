<?php

namespace SaarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="formulario_respuesta")
 * @ORM\Entity
 */
class FormularioRespuesta
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
    * @ORM\Column(name="value", type="string", length=200, nullable=false)
    */
   private $value;
   #Respuesta del item del formulario , en texto

   /**
    * @var string
    *
    * @ORM\Column(name="ip", type="string", length=50, nullable=false)
    */
   private $ip;

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

     /** @var \idFormularioDetalle
     *
     * @ORM\ManyToOne(targetEntity="SaarBundle\Entity\FormularioDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formulario_detalle", referencedColumnName="id")
     * })
     */

     private $idFormularioDetalle;


     /** @var \idFormularioOpcion
     *
     * @ORM\ManyToOne(targetEntity="SaarBundle\Entity\FormularioOpcion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formulario_opcion", referencedColumnName="id", nullable=true)
     * })
     */

     private $idFormularioOpcion;


     /**
     * @var integer
     *    /**
     * @var \idUser
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })use Doctrine\ORM\Mapping as ORM;
     */

     private $idUser;


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
     * Set value
     *
     * @param string $value
     *
     * @return FormularioRespuesta
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return FormularioRespuesta
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
     * @return FormularioRespuesta
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
     * @return FormularioRespuesta
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
     * @return FormularioRespuesta
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
     * Set idFormularioDetalle
     *
     * @param \SaarBundle\Entity\FormularioDetalle $idFormularioDetalle
     *
     * @return FormularioRespuesta
     */
    public function setIdFormularioDetalle(\SaarBundle\Entity\FormularioDetalle $idFormularioDetalle = null)
    {
        $this->idFormularioDetalle = $idFormularioDetalle;

        return $this;
    }

    /**
     * Get idFormularioDetalle
     *
     * @return \SaarBundle\Entity\FormularioDetalle
     */
    public function getIdFormularioDetalle()
    {
        return $this->idFormularioDetalle;
    }

    /**
     * Set idFormularioOpcion
     *
     * @param \SaarBundle\Entity\FormularioOpcion $idFormularioOpcion
     *
     * @return FormularioRespuesta
     */
    public function setIdFormularioOpcion(\SaarBundle\Entity\FormularioOpcion $idFormularioOpcion = null)
    {
        $this->idFormularioOpcion = $idFormularioOpcion;

        return $this;
    }

    /**
     * Get idFormularioOpcion
     *
     * @return \SaarBundle\Entity\FormularioOpcion
     */
    public function getIdFormularioOpcion()
    {
        return $this->idFormularioOpcion;
    }

    /**
     * Set idUser
     *
     * @param \UserBundle\Entity\User $idUser
     *
     * @return FormularioRespuesta
     */
    public function setIdUser(\UserBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \UserBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return FormularioRespuesta
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
}
