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
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;


    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=50, nullable=false)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_tiempo", type="datetime", nullable=true)
     */
    private $fechaTiempo;


    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado = 1;

    /**
     * @var \idUser
     *
     * @ORM\ManyToOne(targetEntity="USerBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */

    private $idUser;

    function __construct(){
        $this->hash=md5(time());
        $this->fecha =  new \DateTime('now');
        $this->fecha_tiempo =  strtotime("now");
    }
}
