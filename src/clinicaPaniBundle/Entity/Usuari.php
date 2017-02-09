<?php

namespace clinicaPaniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuari
 *
 * @ORM\Table(name="usuari")
 * @ORM\Entity(repositoryClass="clinicaPaniBundle\Repository\UsuariRepository")
 */
class Usuari
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuari", type="string", length=255, unique=true)
     */
    private $usuari;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=255)
     */
    private $pass;

    /**
     * @var int
     *
     * @ORM\Column(name="rol", type="integer")
     */
    private $rol;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set usuari
     *
     * @param string $usuari
     *
     * @return Usuari
     */
    public function setUsuari($usuari)
    {
        $this->usuari = $usuari;

        return $this;
    }

    /**
     * Get usuari
     *
     * @return string
     */
    public function getUsuari()
    {
        return $this->usuari;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return Usuari
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set rol
     *
     * @param integer $rol
     *
     * @return Usuari
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return int
     */
    public function getRol()
    {
        return $this->rol;
    }
}

