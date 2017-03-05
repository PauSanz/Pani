<?php

namespace clinicaPaniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuari
 *
 * @ORM\Table(name="usuari", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_68CC94FF68CC94FF", columns={"usuari"})})
 * @ORM\Entity
 */
class Usuari implements UserInterface{

    /**
     * @var string
     *
     * @ORM\Column(name="usuari", type="string", length=255, nullable=false)
     */
    private $usuari;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=255, nullable=false)
     */
    private $pass;

    /**
     * @var integer
     *
     * @ORM\Column(name="rol", type="integer", nullable=false)
     */
    private $rol;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Set usuari
     *
     * @param string $usuari
     *
     * @return Usuari
     */
    public function setUsuari($usuari) {
        $this->usuari = $usuari;

        return $this;
    }

    /**
     * Get usuari
     *
     * @return string
     */
    public function getUsuari() {
        return $this->usuari;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return Usuari
     */
    public function setPass($pass) {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass() {
        return $this->pass;
    }

    /**
     * Set rol
     *
     * @param integer $rol
     *
     * @return Usuari
     */
    public function setRol($rol) {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return integer
     */
    public function getRol() {
        return $this->rol;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->usuari;
    }

    public function getSalt() {
        return null;
    }

    public function getRoles() {
        // En este caso definimos un rol fijo, en el caso de que tengamos un campo role en la tabla de la BBDD    tendríamos que hacer $this->getRole()
        return $this->getRol();
    }

    public function eraseCredentials() {
        
    }
    
    public function getPassword() {
        
    }
}
