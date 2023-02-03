<?php

namespace App\Entity;

use App\Repository\BrandRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrandRepository::class)]
class Brand
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'brand', targetEntity: Sneakers::class)]
    private Collection $sneakers;

    public function __construct()
    {
        $this->sneakers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Sneakers>
     */
    public function getSneakers(): Collection
    {
        return $this->sneakers;
    }

    public function addSneaker(Sneakers $sneaker): self
    {
        if (!$this->sneakers->contains($sneaker)) {
            $this->sneakers->add($sneaker);
            $sneaker->setBrand($this);
        }

        return $this;
    }

    public function removeSneaker(Sneakers $sneaker): self
    {
        if ($this->sneakers->removeElement($sneaker)) {
            // set the owning side to null (unless already changed)
            if ($sneaker->getBrand() === $this) {
                $sneaker->setBrand(null);
            }
        }

        return $this;
    }
}
