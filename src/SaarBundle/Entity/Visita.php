<?php

namespace SaarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="visita")
 * @ORM\Entity
 */
class Visita
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
   * @ORM\Column(name="hash", type="string", length=50, nullable=true)
   */
   #se genara un codigo qr para virificar a la persona que va hcer la visita
   private $hash;

    #Barrio
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=true)
     */

    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="latitud", type="string", length=250, nullable=true)
     */

    protected $latitud;

    /**
     * @var string
     *
     * @ORM\Column(name="longitud", type="string", length=250, nullable=true)
     */

    protected $longitud;


    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=true)
     */

    protected $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=250, nullable=true)
     */

    protected $direccion;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_asignacion", type="datetime", nullable=true)
     */
    private $fechaAsignacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_realizacion", type="datetime", nullable=true)
     */
    private $fechaRealizacion;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_limite", type="datetime", nullable=true)
     */
    private $fechaLimite;


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
     * @var \string
     *
     * @ORM\Column(name="hora", type="string", nullable=true, options={"comment":" Tiempo de la visita en minutos"})
     */
    private $tiempo;



    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true, options={"0=inactiva,1=Active,2=Reprogramada ,3=Cancelada ,4=No realizada,5=Direccion erronea,recahzo"})
     */
    private $estado = 1;

    /**
     * @var \idUser
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */

    private $idUser;

    /**
     * @var \idCliente
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     * })
     */

    private $idCliente;

    /**
     * @var \idAsesor
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_asesor", referencedColumnName="id")
     * })
     */

    private $idAsesor;


    /**
     * @var \idSupervisor
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_supervisor", referencedColumnName="id")
     * })
     */

    private $idSupervisor;

    /** @var \idFormulario
    *
    * @ORM\ManyToOne(targetEntity="SaarBundle\Entity\Formulario")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="id_formulario", referencedColumnName="id")
    * })
    */

   private $idFormulario;


    function __construct(){
        $this->hash=md5(time());
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
     * Set hash
     *
     * @param string $hash
     *
     * @return Visita
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
     * Set name
     *
     * @param string $name
     *
     * @return Visita
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set latitud
     *
     * @param string $latitud
     *
     * @return Visita
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return string
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param string $longitud
     *
     * @return Visita
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Visita
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Visita
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set fechaAsignacion
     *
     * @param \DateTime $fechaAsignacion
     *
     * @return Visita
     */
    public function setFechaAsignacion($fechaAsignacion)
    {
        $this->fechaAsignacion = $fechaAsignacion;

        return $this;
    }

    /**
     * Get fechaAsignacion
     *
     * @return \DateTime
     */
    public function getFechaAsignacion()
    {
        return $this->fechaAsignacion;
    }

    /**
     * Set fechaRealizacion
     *
     * @param \DateTime $fechaRealizacion
     *
     * @return Visita
     */
    public function setFechaRealizacion($fechaRealizacion)
    {
        $this->fechaRealizacion = $fechaRealizacion;

        return $this;
    }

    /**
     * Get fechaRealizacion
     *
     * @return \DateTime
     */
    public function getFechaRealizacion()
    {
        return $this->fechaRealizacion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Visita
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
     * Set ip
     *
     * @param string $ip
     *
     * @return Visita
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

    /**
     * Set fechaTiempo
     *
     * @param \DateTime $fechaTiempo
     *
     * @return Visita
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
     * Set estado
     *
     * @param string $estado
     *
     * @return Visita
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
     * Set idUser
     *
     * @param \USerBundle\Entity\User $idUser
     *
     * @return Visita
     */
    public function setIdUser(\USerBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \USerBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idCliente
     *
     * @param \UserBundle\Entity\User $idCliente
     *
     * @return Visita
     */
    public function setIdCliente(\UserBundle\Entity\User $idCliente = null)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \UserBundle\Entity\User
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idAsesor
     *
     * @param \UserBundle\Entity\User $idAsesor
     *
     * @return Visita
     */
    public function setIdAsesor(\UserBundle\Entity\User $idAsesor = null)
    {
        $this->idAsesor = $idAsesor;

        return $this;
    }

    /**
     * Get idAsesor
     *
     * @return \UserBundle\Entity\User
     */
    public function getIdAsesor()
    {
        return $this->idAsesor;
    }

    /**
     * Set idSupervisor
     *
     * @param \UserBundle\Entity\User $idSupervisor
     *
     * @return Visita
     */
    public function setIdSupervisor(\UserBundle\Entity\User $idSupervisor = null)
    {
        $this->idSupervisor = $idSupervisor;

        return $this;
    }

    /**
     * Get idSupervisor
     *
     * @return \UserBundle\Entity\User
     */
    public function getIdSupervisor()
    {
        return $this->idSupervisor;
    }

    /**
     * Set idFormulario
     *
     * @param \SaarBundle\Entity\Formulario $idFormulario
     *
     * @return Visita
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

    /**
     * Set fechaLimite
     *
     * @param \DateTime $fechaLimite
     *
     * @return Visita
     */
    public function setFechaLimite($fechaLimite)
    {
        $this->fechaLimite = $fechaLimite;

        return $this;
    }

    /**
     * Get fechaLimite
     *
     * @return \DateTime
     */
    public function getFechaLimite()
    {
        return $this->fechaLimite;
    }

    /**
     * Set tiempo
     *
     * @param string $tiempo
     *
     * @return Visita
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    /**
     * Get tiempo
     *
     * @return string
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * Set tipoIdentificacion
     *
     * @param string $tipoIdentificacion
     *
     * @return Visita
     */
    public function setTipoIdentificacion($tipoIdentificacion)
    {
        $this->tipoIdentificacion = $tipoIdentificacion;

        return $this;
    }

    /**
     * Get tipoIdentificacion
     *
     * @return string
     */
    public function getTipoIdentificacion()
    {
        return $this->tipoIdentificacion;
    }
}
