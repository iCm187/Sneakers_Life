<?php

namespace App\Entity;

use App\Repository\StyleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StyleRepository::class)]
class Style
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $gender = null;

    #[ORM\Column(length: 255)]
    private ?string $urban = null;

    #[ORM\Column(length: 255)]
    private ?string $street = null;

    #[ORM\Column(length: 255)]
    private ?string $classic = null;

    #[ORM\Column(length: 255)]
    private ?string $evening = null;

    #[ORM\Column(length: 255)]
    private ?string $images = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getUrban(): ?string
    {
        return $this->urban;
    }

    public function setUrban(string $urban): self
    {
        $this->urban = $urban;

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

    public function getClassic(): ?string
    {
        return $this->classic;
    }

    public function setClassic(string $classic): self
    {
        $this->classic = $classic;

        return $this;
    }

    public function getEvening(): ?string
    {
        return $this->evening;
    }

    public function setEvening(string $evening): self
    {
        $this->evening = $evening;

        return $this;
    }

    public function getImages(): ?string
    {
        return $this->images;
    }

    public function setImages(string $images): self
    {
        $this->images = $images;

        return $this;
    }
}
