<?php

namespace SaarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="persona_detalle")
 * @ORM\Entity
 */
class PersonaDetalle
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
    protected $role;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $idFosUSer;    

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