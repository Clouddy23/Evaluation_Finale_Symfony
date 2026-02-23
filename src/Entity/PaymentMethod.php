<?php

namespace App\Entity;

use App\Repository\PaymentMethodRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentMethodRepository::class)]
class PaymentMethod
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $PaymentMethod = null;

    #[ORM\Column(length: 255)]
    private ?string $Category = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $TransactionUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->PaymentMethod;
    }

    public function setPaymentMethod(string $PaymentMethod): static
    {
        $this->PaymentMethod = $PaymentMethod;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->Category;
    }

    public function setCategory(string $Category): static
    {
        $this->Category = $Category;

        return $this;
    }

    public function getTransactionUser(): ?\DateTimeImmutable
    {
        return $this->TransactionUser;
    }

    public function setTransactionUser(\DateTimeImmutable $TransactionUser): static
    {
        $this->TransactionUser = $TransactionUser;

        return $this;
    }
}
