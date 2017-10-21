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
     * @ORM\Column(name="identificacion", type="string", length=200, nullable=true)
     */
    protected $identificacion;

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

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=50, nullable=true)
     */
    private $ip;

    /**
    *
    * @var \idEmpresa
    *
    * @ORM\ManyToOne(targetEntity="SaarBundle\Entity\Empresa")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
    * })use Doctrine\ORM\Mapping as ORM;
    */

    private $idEmpresa;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set tipoIdentificacion
     *
     * @param string $tipoIdentificacion
     *
     * @return User
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

    /**
     * Set identificacion
     *
     * @param string $identificacion
     *
     * @return User
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    /**
     * Get identificacion
     *
     * @return string
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return User
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return User
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set genero
     *
     * @param string $genero
     *
     * @return User
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set movil
     *
     * @param string $movil
     *
     * @return User
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil
     *
     * @return string
     */
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set paisMovil
     *
     * @param string $paisMovil
     *
     * @return User
     */
    public function setPaisMovil($paisMovil)
    {
        $this->pais_movil = $paisMovil;

        return $this;
    }

    /**
     * Get paisMovil
     *
     * @return string
     */
    public function getPaisMovil()
    {
        return $this->pais_movil;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return User
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
     * Set idEmpresa
     *
     * @param \SaarBundle\Entity\Empresa $idEmpresa
     *
     * @return User
     */
    public function setIdEmpresa(\SaarBundle\Entity\Empresa $idEmpresa = null)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return \SaarBundle\Entity\Empresa
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }
}
