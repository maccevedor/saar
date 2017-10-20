<?php

namespace SaarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notificacion
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Notificacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=50, nullable=true)
     */

    private $hash;

    /**
     * @var string
     *
     * @ORM\Column(name="destino", type="string", length=255, nullable=true,options={"caundo aplique ,email, msm ,call,notificacion , push notificacion"})
     */

    private $destino;


    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=true,options={"titulo para los que aplique"})
     */

    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=1000, nullable=true,options={"comment":"contenido"})
     */

    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1000, nullable=true,options={"comment":"email, msm ,call,notificacion , push notificacion"})
     */

    private $tipo;


    /**
     * @var integer
     *
     * @ORM\Column(name="envio", type="integer", length=11 ,  nullable=true,options={"comment":"1 = si se confimo el envio , 0= si no se realizo"})
     */
    private $envio = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="error", type="integer", length=11 , nullable=true,options={"comment":"1 = genero error"})
     */
    private $error=0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="fecha_envio", type="datetime", nullable=true)
    */
   private $fechaEnvio;

   /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_limite", type="datetime", nullable=true,options={"comment":"Fecha limite para el envio"})
     */
    private $fechaLimite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_visualizacion", type="datetime", nullable=true,options={"comment":"Se deja la ultima visualizacion de soporte"})
     */
    private $fechaVisualizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="contador", type="integer", length=1, nullable=true,options={"comment":"visualizaciones realizadas"})
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", length=1, nullable=true)
     */
    private $estado = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=50, nullable=false)
     */
    private $ip;



    /**
     * @var \idUser
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */

    private $idUser;



    function __construct(){
        $this->hash=md5(time());
        $this->fecha =  new \DateTime('now');
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
     * @return Notificacion
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
     * Set destino
     *
     * @param string $destino
     *
     * @return Notificacion
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get destino
     *
     * @return string
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Notificacion
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set content
     *
     * @param \content $content
     *
     * @return Notificacion
     */
    public function setContent(\content $content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return \content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set tipo
     *
     * @param \content $tipo
     *
     * @return Notificacion
     */
    public function setTipo(\content $tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \content
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set envio
     *
     * @param integer $envio
     *
     * @return Notificacion
     */
    public function setEnvio($envio)
    {
        $this->envio = $envio;

        return $this;
    }

    /**
     * Get envio
     *
     * @return integer
     */
    public function getEnvio()
    {
        return $this->envio;
    }

    /**
     * Set error
     *
     * @param integer $error
     *
     * @return Notificacion
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get error
     *
     * @return integer
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Notificacion
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
     * Set fechaEnvio
     *
     * @param \DateTime $fechaEnvio
     *
     * @return Notificacion
     */
    public function setFechaEnvio($fechaEnvio)
    {
        $this->fechaEnvio = $fechaEnvio;

        return $this;
    }

    /**
     * Get fechaEnvio
     *
     * @return \DateTime
     */
    public function getFechaEnvio()
    {
        return $this->fechaEnvio;
    }

    /**
     * Set fechaLimite
     *
     * @param \DateTime $fechaLimite
     *
     * @return Notificacion
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
     * Set fechaVisualizacion
     *
     * @param \DateTime $fechaVisualizacion
     *
     * @return Notificacion
     */
    public function setFechaVisualizacion($fechaVisualizacion)
    {
        $this->fechaVisualizacion = $fechaVisualizacion;

        return $this;
    }

    /**
     * Get fechaVisualizacion
     *
     * @return \DateTime
     */
    public function getFechaVisualizacion()
    {
        return $this->fechaVisualizacion;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     *
     * @return Notificacion
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

    /**
     * Get contador
     *
     * @return integer
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Notificacion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Notificacion
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
     * Set idUser
     *
     * @param \UserBundle\Entity\User $idUser
     *
     * @return Notificacion
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
