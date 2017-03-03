<?php

namespace clinicaPaniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metge
 *
 * @ORM\Table(name="metge")
 * @ORM\Entity
 */
class Metge
{
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
     * @ORM\Column(name="especialitat", type="string", length=255, nullable=false)
     */
    private $especialitat;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=9)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dni;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Metge
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set cognom
     *
     * @param string $cognom
     *
     * @return Metge
     */
    public function setCognom($cognom)
    {
        $this->cognom = $cognom;

        return $this;
    }

    /**
     * Get cognom
     *
     * @return string
     */
    public function getCognom()
    {
        return $this->cognom;
    }

    /**
     * Set especialitat
     *
     * @param string $especialitat
     *
     * @return Metge
     */
    public function setEspecialitat($especialitat)
    {
        $this->especialitat = $especialitat;

        return $this;
    }

    /**
     * Get especialitat
     *
     * @return string
     */
    public function getEspecialitat()
    {
        return $this->especialitat;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }
}
