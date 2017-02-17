<?php

namespace clinicaPaniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client {

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="cognom", type="string", length=255, nullable=false)
     */
    private $cognom;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=9)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dni;

    public function __construct() {
        $this->dni = null;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set cognom
     *
     * @param string $cognom
     *
     * @return Client
     */
    public function setCognom($cognom) {
        $this->cognom = $cognom;

        return $this;
    }

    /**
     * Get cognom
     *
     * @return string
     */
    public function getCognom() {
        return $this->cognom;
    }
    
    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Client
     */
    public function setDni($dni) {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni() {
        return $this->dni;
    }
    
    

}
