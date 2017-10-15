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
     * @Column(type="string")
     * @var string
     **/
    protected $tipo_identificacion;

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
    protected $movil;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $id_movil = 57;

    /**
     * @Column(type="string", nullable=true)
     * @var string
     **/
    protected $avatar;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
