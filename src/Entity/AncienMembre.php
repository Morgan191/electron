<?php

namespace App\Entity;

use App\Repository\AncienMembreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AncienMembreRepository::class)]
class AncienMembre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $prénom = null;

    #[ORM\Column(length: 50)]
    private ?string $école = null;

    #[ORM\Column(length: 100)]
    private ?string $cursus = null;

    #[ORM\Column(length: 50)]
    private ?string $spécialité = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrénom(): ?string
    {
        return $this->prénom;
    }

    public function setPrénom(string $prénom): static
    {
        $this->prénom = $prénom;

        return $this;
    }

    public function getécole(): ?string
    {
        return $this->école;
    }

    public function setécole(string $école): static
    {
        $this->école = $école;

        return $this;
    }

    public function getCursus(): ?string
    {
        return $this->cursus;
    }

    public function setCursus(string $cursus): static
    {
        $this->cursus = $cursus;

        return $this;
    }

    public function getSpécialité(): ?string
    {
        return $this->spécialité;
    }

    public function setSpécialité(string $spécialité): static
    {
        $this->spécialité = $spécialité;

        return $this;
    }
}
