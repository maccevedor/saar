<?php

namespace SaarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="formulario_opcion")
 * @ORM\Entity
 */
class FormularioOpcion
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
    * @ORM\Column(name="opcion", type="string", length=200, nullable=false)
    */
   private $opcion;
   #Este campo se crea para cuando se desea mostrar una lista de iopcion o tag

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
     * Set opcion
     *
     * @param string $opcion
     *
     * @return FormularioOpcion
     */
    public function setOpcion($opcion)
    {
        $this->opcion = $opcion;

        return $this;
    }

    /**
     * Get opcion
     *
     * @return string
     */
    public function getOpcion()
    {
        return $this->opcion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return FormularioOpcion
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
     * @return FormularioOpcion
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
     * @return FormularioOpcion
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
     * @return FormularioOpcion
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
     * @return FormularioOpcion
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
     * Set idUser
     *
     * @param \UserBundle\Entity\User $idUser
     *
     * @return FormularioOpcion
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
}
