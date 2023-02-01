<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $sneakers = null;

    #[ORM\Column(length: 255)]
    private ?string $clothes = null;

    #[ORM\Column(length: 255)]
    private ?string $accessories = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSneakers(): ?string
    {
        return $this->sneakers;
    }

    public function setSneakers(string $sneakers): self
    {
        $this->sneakers = $sneakers;

        return $this;
    }

    public function getClothes(): ?string
    {
        return $this->clothes;
    }

    public function setClothes(string $clothes): self
    {
        $this->clothes = $clothes;

        return $this;
    }

    public function getAccessories(): ?string
    {
        return $this->accessories;
    }

    public function setAccessories(string $accessories): self
    {
        $this->accessories = $accessories;

        return $this;
    }
}
