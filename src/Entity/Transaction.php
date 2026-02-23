<?php

namespace App\Entity;

use App\Repository\TransactionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
#[ORM\Table(name: '`transaction`')]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $TransactionUser = null;

    public function getId(): ?int
    {
        return $this->id;
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
