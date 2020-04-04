<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FlowerRepository")
 */
class Flower
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $priceExclVAT;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $priceVAT;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reorderQuantity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reorderLevel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPriceExclVAT(): ?string
    {
        return $this->priceExclVAT;
    }

    public function setPriceExclVAT(?string $priceExclVAT): self
    {
        $this->priceExclVAT = $priceExclVAT;

        return $this;
    }

    public function getPriceVAT(): ?string
    {
        return $this->priceVAT;
    }

    public function setPriceVAT(?string $priceVAT): self
    {
        $this->priceVAT = $priceVAT;

        return $this;
    }

    public function getReorderQuantity(): ?int
    {
        return $this->reorderQuantity;
    }

    public function setReorderQuantity(?int $reorderQuantity): self
    {
        $this->reorderQuantity = $reorderQuantity;

        return $this;
    }

    public function getReorderLevel(): ?int
    {
        return $this->reorderLevel;
    }

    public function setReorderLevel(?int $reorderLevel): self
    {
        $this->reorderLevel = $reorderLevel;

        return $this;
    }
}
