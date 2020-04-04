<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OrderLine", mappedBy="orderNumber")
     */
    private $ListOfOrderLines;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="ListOfOrders")
     */
    private $client;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CompanyAddress", mappedBy="orderNumber")
     */
    private $deliveryAddress;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PaymentType", inversedBy="ListOfOrders")
     * @ORM\JoinColumn(nullable=false)
     */
    private $payment;

    public function __construct()
    {
        $this->ListOfOrderLines = new ArrayCollection();
        $this->deliveryAddress = new ArrayCollection();
    }

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

    /**
     * @return Collection|OrderLine[]
     */
    public function getListOfOrderLines(): Collection
    {
        return $this->ListOfOrderLines;
    }

    public function addListOfOrderLine(OrderLine $listOfOrderLine): self
    {
        if (!$this->ListOfOrderLines->contains($listOfOrderLine)) {
            $this->ListOfOrderLines[] = $listOfOrderLine;
            $listOfOrderLine->setOrderNumber($this);
        }

        return $this;
    }

    public function removeListOfOrderLine(OrderLine $listOfOrderLine): self
    {
        if ($this->ListOfOrderLines->contains($listOfOrderLine)) {
            $this->ListOfOrderLines->removeElement($listOfOrderLine);
            // set the owning side to null (unless already changed)
            if ($listOfOrderLine->getOrderNumber() === $this) {
                $listOfOrderLine->setOrderNumber(null);
            }
        }

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return Collection|CompanyAddress[]
     */
    public function getDeliveryAddress(): Collection
    {
        return $this->deliveryAddress;
    }

    public function addDeliveryAddress(CompanyAddress $deliveryAddress): self
    {
        if (!$this->deliveryAddress->contains($deliveryAddress)) {
            $this->deliveryAddress[] = $deliveryAddress;
            $deliveryAddress->setOrderNumber($this);
        }

        return $this;
    }

    public function removeDeliveryAddress(CompanyAddress $deliveryAddress): self
    {
        if ($this->deliveryAddress->contains($deliveryAddress)) {
            $this->deliveryAddress->removeElement($deliveryAddress);
            // set the owning side to null (unless already changed)
            if ($deliveryAddress->getOrderNumber() === $this) {
                $deliveryAddress->setOrderNumber(null);
            }
        }

        return $this;
    }

    public function getPayment(): ?PaymentType
    {
        return $this->payment;
    }

    public function setPayment(?PaymentType $payment): self
    {
        $this->payment = $payment;

        return $this;
    }
}
