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
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     **/
    protected $id;

    /**
   * @var string
   *
   * @ORM\Column(name="hash", type="string", length=50, nullable=true)
   */

   private $hash;

    #Barrio
    /**
     * @Column(type="name")
     * @var string
     **/
    protected $name;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $latitud;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $longitud;


    /**
     * @Column(type="string")
     * @var string
     **/
    protected $descripcion;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $direccion;


    /**
     * @var \DateTime
     * @Column(type="datetime", nullable=true)
     */
    private $fecha_asignacion;

    /**
     * @var \DateTime
     * @Column(type="datetime", nullable=true)
     */
    private $fecha_realizacion;

    /**
     * @var \DateTime
     * @Column(type="datetime", nullable=true)
     */
    private $fecha;


    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=50, nullable=false)
     */
    private $ip;

    /**
     * @var \integer
     * @Column(type="integer", nullable=true)
     */
    private $fecha_tiempo;

    /**
     * @var int
     * @Column(type="integer", length=1, nullable=true)
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
