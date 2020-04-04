<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompanyAddressRepository")
 */
class CompanyAddress
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $companyName;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $street;

    /**
     * @ORM\Column(type="integer")
     */
    private $streetNumber;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $appartNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $zipcode;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $phone;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isDelivery;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="addresses")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Order", inversedBy="deliveryAddress")
     */
    private $orderNumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getStreetNumber(): ?int
    {
        return $this->streetNumber;
    }

    public function setStreetNumber(int $streetNumber): self
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    public function getAppartNumber(): ?string
    {
        return $this->appartNumber;
    }

    public function setAppartNumber(?string $appartNumber): self
    {
        $this->appartNumber = $appartNumber;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getIsDelivery(): ?bool
    {
        return $this->isDelivery;
    }

    public function setIsDelivery(?bool $isDelivery): self
    {
        $this->isDelivery = $isDelivery;

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

    public function getOrderNumber(): ?Order
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?Order $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }
}
