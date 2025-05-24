<?php

namespace App\Entity;

use App\Repository\Recrutement2Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Recrutement2Repository::class)]
class Recrutement2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateNaissance = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $adresse = null;

    #[ORM\Column]
    private ?int $telephone = null;

    #[ORM\Column(length: 50)]
    private ?string $nationalite = null;

    #[ORM\Column(length: 100)]
    private ?string $ecoleActuelle = null;

    #[ORM\Column(length: 100)]
    private ?string $nomCursus = null;

    #[ORM\Column(length: 50)]
    private ?string $specialite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateEntreeCursus = null;

    #[ORM\Column]
    private ?int $anneeCursus = null;

    #[ORM\Column(length: 255)]
    private ?string $carteEtudiant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateNaissance(): ?\DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTime $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): static
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getEcoleActuelle(): ?string
    {
        return $this->ecoleActuelle;
    }

    public function setEcoleActuelle(string $ecoleActuelle): static
    {
        $this->ecoleActuelle = $ecoleActuelle;

        return $this;
    }

    public function getNomCursus(): ?string
    {
        return $this->nomCursus;
    }

    public function setNomCursus(string $nomCursus): static
    {
        $this->nomCursus = $nomCursus;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): static
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getDateEntreeCursus(): ?\DateTime
    {
        return $this->dateEntreeCursus;
    }

    public function setDateEntreeCursus(\DateTime $dateEntreeCursus): static
    {
        $this->dateEntreeCursus = $dateEntreeCursus;

        return $this;
    }

    public function getAnneeCursus(): ?int
    {
        return $this->anneeCursus;
    }

    public function setAnneeCursus(int $anneeCursus): static
    {
        $this->anneeCursus = $anneeCursus;

        return $this;
    }

    public function getCarteEtudiant(): ?string
    {
        return $this->carteEtudiant;
    }

    public function setCarteEtudiant(string $carteEtudiant): static
    {
        $this->carteEtudiant = $carteEtudiant;

        return $this;
    }
}
