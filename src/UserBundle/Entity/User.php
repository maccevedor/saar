<?php
namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_identificacion", type="string", length=200, nullable=true)
     */
    protected $tipoIdentificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=true)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=200, nullable=true)
     */
    protected $apellido;


    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", length=200, nullable=true)
     */
    protected $genero;

    /**
     * @var string
     *
     * @ORM\Column(name="movil", type="string", length=100, nullable=true)
     */
    protected $movil;

    /**
     * @var string
     *
     * @ORM\Column(name="pais_movil", type="string", length=4, nullable=true)
     */
    protected $pais_movil = 57;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=500, nullable=true)
     */
    protected $avatar;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
