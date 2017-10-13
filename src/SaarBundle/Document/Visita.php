<?php

namespace SaarBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

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
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */

    private $hash;

    /**
     * @var int
     * @Column(type="integer", length=1, nullable=true)
     */

    private $estado = 1;

    function __construct(){
        $this->hash=md5(time());
        $this->fecha =  new \DateTime('now');
        $this->fecha_tiempo =  strtotime("now");
    }
}
