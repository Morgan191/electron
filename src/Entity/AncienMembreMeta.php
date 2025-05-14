<?php

namespace App\Entity;

use App\Repository\AncienMembreMetaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AncienMembreMetaRepository::class)]
class AncienMembreMeta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_anciens_membres = null;

    #[ORM\Column(length: 10)]
    private ?string $durée_cursus = null;

    #[ORM\Column(length: 50)]
    private ?string $thème_recherche = null;

    #[ORM\Column(length: 50)]
    private ?string $prix_année = null;

    #[ORM\Column(length: 50)]
    private ?string $thème_actuel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAnciensMembres(): ?int
    {
        return $this->id_anciens_membres;
    }

    public function setIdAnciensMembres(int $id_anciens_membres): static
    {
        $this->id_anciens_membres = $id_anciens_membres;

        return $this;
    }

    public function getDuréeCursus(): ?string
    {
        return $this->durée_cursus;
    }

    public function setDuréeCursus(string $durée_cursus): static
    {
        $this->durée_cursus = $durée_cursus;

        return $this;
    }

    public function getThèmeRecherche(): ?string
    {
        return $this->thème_recherche;
    }

    public function setThèmeRecherche(string $thème_recherche): static
    {
        $this->thème_recherche = $thème_recherche;

        return $this;
    }

    public function getPrixAnnée(): ?string
    {
        return $this->prix_année;
    }

    public function setPrixAnnée(string $prix_année): static
    {
        $this->prix_année = $prix_année;

        return $this;
    }

    public function getThèmeActuel(): ?string
    {
        return $this->thème_actuel;
    }

    public function setThèmeActuel(string $thème_actuel): static
    {
        $this->thème_actuel = $thème_actuel;

        return $this;
    }
}
