<?php

namespace App\Entity;

use App\Repository\CircleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CircleRepository::class)]
class Circle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $type = null;

    #[ORM\Column]
    private ?int $radius = null;

    #[ORM\Column]
    private ?int $surface = null;

    #[ORM\Column]
    private ?int $circumference = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getRadius(): ?int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getCircumference(): ?int
    {
        return $this->circumference;
    }

    public function setCircumference(int $circumference): self
    {
        $this->circumference = $circumference;

        return $this;
    }
}
