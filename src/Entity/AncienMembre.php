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
    private ?string $prenom = null;

    #[ORM\Column(length: 50)]
    private ?string $ecole = null;

    #[ORM\Column(length: 100)]
    private ?string $cursus = null;

    #[ORM\Column(length: 50)]
    private ?string $specialite = null;

    #[ORM\Column(length: 10)]
    private ?string $dureeCursus = null;

    #[ORM\Column(length: 50)]
    private ?string $themeRecherche = null;

    #[ORM\Column(length: 50)]
    private ?string $prixAnnee = null;

    #[ORM\Column(length: 50)]
    private ?string $themeActuel = null;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEcole(): ?string
    {
        return $this->ecole;
    }

    public function setEcole(string $ecole): static
    {
        $this->ecole = $ecole;

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

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): static
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getDureeCursus(): ?string
    {
        return $this->dureeCursus;
    }

    public function setDureeCursus(string $dureeCursus): static
    {
        $this->dureeCursus = $dureeCursus;

        return $this;
    }

    public function getThemeRecherche(): ?string
    {
        return $this->themeRecherche;
    }

    public function setThemeRecherche(string $themeRecherche): static
    {
        $this->themeRecherche = $themeRecherche;

        return $this;
    }

    public function getPrixAnnee(): ?string
    {
        return $this->prixAnnee;
    }

    public function setPrixAnnee(string $prixAnnee): static
    {
        $this->prixAnnee = $prixAnnee;

        return $this;
    }

    public function getThemeActuel(): ?string
    {
        return $this->themeActuel;
    }

    public function setThemeActuel(string $themeActuel): static
    {
        $this->themeActuel = $themeActuel;

        return $this;
    }
}
