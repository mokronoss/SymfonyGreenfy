<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderLineRepository")
 */
class OrderLine
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $actualPriceExclVAT;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $actualPriceVAT;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getActualPriceExclVAT(): ?string
    {
        return $this->actualPriceExclVAT;
    }

    public function setActualPriceExclVAT(?string $actualPriceExclVAT): self
    {
        $this->actualPriceExclVAT = $actualPriceExclVAT;

        return $this;
    }

    public function getActualPriceVAT(): ?string
    {
        return $this->actualPriceVAT;
    }

    public function setActualPriceVAT(?string $actualPriceVAT): self
    {
        $this->actualPriceVAT = $actualPriceVAT;

        return $this;
    }
}
