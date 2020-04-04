<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PaymentTypeRepository")
 */
class PaymentType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $paymentType;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $paymentLimit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    public function setPaymentType(?string $paymentType): self
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    public function getPaymentLimit(): ?string
    {
        return $this->paymentLimit;
    }

    public function setPaymentLimit(?string $paymentLimit): self
    {
        $this->paymentLimit = $paymentLimit;

        return $this;
    }
}
