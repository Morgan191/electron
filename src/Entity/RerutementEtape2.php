<?php

namespace App\Entity;

use App\Repository\RerutementEtape2Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RerutementEtape2Repository::class)]
class RerutementEtape2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_recrutement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_naissance = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $adresse = null;

    #[ORM\Column]
    private ?int $téléphone = null;

    #[ORM\Column(length: 50)]
    private ?string $nationalité = null;

    #[ORM\Column(length: 100)]
    private ?string $école_actuelle = null;

    #[ORM\Column(length: 100)]
    private ?string $nom_cursus = null;

    #[ORM\Column(length: 50)]
    private ?string $spécialité = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_entrée_cursus = null;

    #[ORM\Column]
    private ?int $année_cursus = null;

    #[ORM\Column(type: Types::BLOB)]
    private $carte_étudiant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRecrutement(): ?int
    {
        return $this->id_recrutement;
    }

    public function setIdRecrutement(int $id_recrutement): static
    {
        $this->id_recrutement = $id_recrutement;

        return $this;
    }

    public function getDateNaissance(): ?\DateTime
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTime $date_naissance): static
    {
        $this->date_naissance = $date_naissance;

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

    public function getTéléphone(): ?int
    {
        return $this->téléphone;
    }

    public function setTéléphone(int $téléphone): static
    {
        $this->téléphone = $téléphone;

        return $this;
    }

    public function getNationalité(): ?string
    {
        return $this->nationalité;
    }

    public function setNationalité(string $nationalité): static
    {
        $this->nationalité = $nationalité;

        return $this;
    }

    public function getécoleActuelle(): ?string
    {
        return $this->école_actuelle;
    }

    public function setécoleActuelle(string $école_actuelle): static
    {
        $this->école_actuelle = $école_actuelle;

        return $this;
    }

    public function getNomCursus(): ?string
    {
        return $this->nom_cursus;
    }

    public function setNomCursus(string $nom_cursus): static
    {
        $this->nom_cursus = $nom_cursus;

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

    public function getDateEntréeCursus(): ?\DateTime
    {
        return $this->date_entrée_cursus;
    }

    public function setDateEntréeCursus(\DateTime $date_entrée_cursus): static
    {
        $this->date_entrée_cursus = $date_entrée_cursus;

        return $this;
    }

    public function getAnnéeCursus(): ?int
    {
        return $this->année_cursus;
    }

    public function setAnnéeCursus(int $année_cursus): static
    {
        $this->année_cursus = $année_cursus;

        return $this;
    }

    public function getCarteétudiant()
    {
        return $this->carte_étudiant;
    }

    public function setCarteétudiant($carte_étudiant): static
    {
        $this->carte_étudiant = $carte_étudiant;

        return $this;
    }
}
