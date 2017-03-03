<?php

namespace clinicaPaniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipusvisita
 *
 * @ORM\Table(name="tipusvisita", indexes={@ORM\Index(name="tipus", columns={"tipus"}), @ORM\Index(name="tipus_2", columns={"tipus"})})
 * @ORM\Entity
 */
class Tipusvisita
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipus", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tipus;



    /**
     * Get tipus
     *
     * @return string
     */
    public function getTipus()
    {
        return $this->tipus;
    }
}
