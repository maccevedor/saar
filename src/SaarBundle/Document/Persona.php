<?php

namespace SaarBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity
 */
class Persona
{


    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     **/
    protected $id;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $tipo_identificacion;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $identificacion;


    /**
     * @Column(type="string")
     * @var string
     **/
    protected $nombre;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $apellido;


    /**
     * @Column(type="string")
     * @var string
     **/
    protected $genero;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $email;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $telefono;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $movil;

    /**
     * @Column(type="string", nullable=true)
     * @var string
     **/
    protected $avatar;

    /**
     * @Column(type="string", nullable=true)
     * @var string
     **/
    protected $thumb;

    /**
     * @var \DateTime
     * @Column(type="datetime", nullable=true)
     */
    private $fecha_nacimiento;

    /**
     * @var \DateTime
     * @Column(type="datetime", nullable=true)
     */
    private $fecha;

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
