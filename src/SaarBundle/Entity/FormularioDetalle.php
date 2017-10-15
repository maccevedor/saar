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
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     **/
    protected $id;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $nombre;  

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $tip;
    #Placeholder para ayudar al usuario

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $item_tipo;


    /**
     * @Column(type="string",nullable=true)
     * @var string
     **/
    protected $item_contenido;
    #contenido cuando sea abierto el campo

    /**
     * @Column(type="integer", nullable=false)
     * @var \int
     */
    private $ordering = 0;

    /**
     * @Column(type="integer", nullable=false)
     * @var \int
     */
    private $required = 0;

    /**
     * @Column(type="integer", nullable=false)
     * @var \int
     */
    private $searchable = 0;

    /**
     * @Column(type="string", nullable=true)
     * @var string
     **/
    protected $param;
    #parametros para configurar los estilos
    
    /**
     * @Column(type="string")
     * @var string
     **/
    protected $field_code;

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
        //$this->hash=md5(time());
        $this->hash = sha1(substr(md5(uniqid(rand())),0,15)."_".$this->id);
        $this->fecha =  new \DateTime('now');
        $this->fecha_tiempo =  strtotime("now");
    }
}