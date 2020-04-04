<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $numOrder;

    /**
     * @ORM\Column(type="date")
     */
    private $dateOrder;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumOrder(): ?string
    {
        return $this->numOrder;
    }

    public function setNumOrder(string $numOrder): self
    {
        $this->numOrder = $numOrder;

        return $this;
    }

    public function getDateOrder(): ?\DateTimeInterface
    {
        return $this->dateOrder;
    }

    public function setDateOrder(\DateTimeInterface $dateOrder): self
    {
        $this->dateOrder = $dateOrder;

        return $this;
    }
}
