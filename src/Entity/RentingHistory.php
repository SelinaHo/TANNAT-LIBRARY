<?php

namespace App\Entity;

use App\Repository\RentingHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RentingHistoryRepository::class)
 */
class RentingHistory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $day_rent;

    /**
     * @ORM\Column(type="date")
     */
    private $day_return;

    /**
     * @ORM\ManyToOne(targetEntity=Books::class, inversedBy="relation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $book_id;

    /**
     * @ORM\ManyToOne(targetEntity=Customers::class, inversedBy="relation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $customer_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayRent(): ?\DateTimeInterface
    {
        return $this->day_rent;
    }

    public function setDayRent(\DateTimeInterface $day_rent): self
    {
        $this->day_rent = $day_rent;

        return $this;
    }

    public function getDayReturn(): ?\DateTimeInterface
    {
        return $this->day_return;
    }

    public function setDayReturn(\DateTimeInterface $day_return): self
    {
        $this->day_return = $day_return;

        return $this;
    }

    public function getBookId(): ?Books
    {
        return $this->book_id;
    }

    public function setBookId(?Books $book_id): self
    {
        $this->book_id = $book_id;

        return $this;
    }

    public function getCustomerId(): ?Customers
    {
        return $this->customer_id;
    }

    public function setCustomerId(?Customers $customer_id): self
    {
        $this->customer_id = $customer_id;

        return $this;
    }
}
