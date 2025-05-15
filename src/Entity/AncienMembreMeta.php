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

    #[ORM\ManyToOne(targetEntity: AncienMembre::class)]
    #[ORM\JoinColumn(nullable: false)]
    //#[ORM\Column]
    //private ?int $ancienMembreId = null;
    private ?AncienMembre $ancienMembre = null;

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

    public function getAncienMembre(): ?AncienMembre
    {
        return $this->ancienMembre;
    }

    public function setAncienMembre(AncienMembre $ancienMembre): static
    {
        $this->ancienMembre = $ancienMembre;

        return $this;
    }

    public function getDureeCursus(): ?string
    {
        return $this->dureeCursus;
    }

    public function setDureeCursus(string $duree_cursus): static
    {
        $this->dureeCursus = $duree_cursus;

        return $this;
    }

    public function getThemeRecherche(): ?string
    {
        return $this->themeRecherche;
    }

    public function setThemeRecherche(string $thème_recherche): static
    {
        $this->themeRecherche = $thème_recherche;

        return $this;
    }

    public function getPrixAnnee(): ?string
    {
        return $this->prixAnnee;
    }

    public function setPrixAnnee(string $prix_annee): static
    {
        $this->prixAnnee = $prix_annee;

        return $this;
    }

    public function getThemeActuel(): ?string
    {
        return $this->themeActuel;
    }

    public function setThemeActuel(string $theme_actuel): static
    {
        $this->themeActuel = $theme_actuel;

        return $this;
    }
}
