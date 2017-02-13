<?php

namespace clinicaPaniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visita
 *
 * @ORM\Table(name="visita", indexes={@ORM\Index(name="tipusVisita", columns={"tipusVisita"}), @ORM\Index(name="metgeVisitat", columns={"metgeVisitat"}), @ORM\Index(name="pacientVisitat", columns={"pacientVisitat"})})
 * @ORM\Entity
 */
class Visita
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time", nullable=false)
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcio", type="string", length=255, nullable=false)
     */
    private $descripcio;

    /**
     * @var integer
     *
     * @ORM\Column(name="ref", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ref;

    /**
     * @var \clinicaPaniBundle\Entity\Tipusvisita
     *
     * @ORM\ManyToOne(targetEntity="clinicaPaniBundle\Entity\Tipusvisita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipusVisita", referencedColumnName="tipus")
     * })
     */
    private $tipusvisita;

    /**
     * @var \clinicaPaniBundle\Entity\Metge
     *
     * @ORM\ManyToOne(targetEntity="clinicaPaniBundle\Entity\Metge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="metgeVisitat", referencedColumnName="dni")
     * })
     */
    private $metgevisitat;

    /**
     * @var \clinicaPaniBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="clinicaPaniBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pacientVisitat", referencedColumnName="dni")
     * })
     */
    private $pacientvisitat;



    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Visita
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return Visita
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set descripcio
     *
     * @param string $descripcio
     *
     * @return Visita
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    /**
     * Get descripcio
     *
     * @return string
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }

    /**
     * Get ref
     *
     * @return integer
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set tipusvisita
     *
     * @param \clinicaPaniBundle\Entity\Tipusvisita $tipusvisita
     *
     * @return Visita
     */
    public function setTipusvisita(\clinicaPaniBundle\Entity\Tipusvisita $tipusvisita = null)
    {
        $this->tipusvisita = $tipusvisita;

        return $this;
    }

    /**
     * Get tipusvisita
     *
     * @return \clinicaPaniBundle\Entity\Tipusvisita
     */
    public function getTipusvisita()
    {
        return $this->tipusvisita;
    }

    /**
     * Set metgevisitat
     *
     * @param \clinicaPaniBundle\Entity\Metge $metgevisitat
     *
     * @return Visita
     */
    public function setMetgevisitat(\clinicaPaniBundle\Entity\Metge $metgevisitat = null)
    {
        $this->metgevisitat = $metgevisitat;

        return $this;
    }

    /**
     * Get metgevisitat
     *
     * @return \clinicaPaniBundle\Entity\Metge
     */
    public function getMetgevisitat()
    {
        return $this->metgevisitat;
    }

    /**
     * Set pacientvisitat
     *
     * @param \clinicaPaniBundle\Entity\Client $pacientvisitat
     *
     * @return Visita
     */
    public function setPacientvisitat(\clinicaPaniBundle\Entity\Client $pacientvisitat = null)
    {
        $this->pacientvisitat = $pacientvisitat;

        return $this;
    }

    /**
     * Get pacientvisitat
     *
     * @return \clinicaPaniBundle\Entity\Client
     */
    public function getPacientvisitat()
    {
        return $this->pacientvisitat;
    }
}
