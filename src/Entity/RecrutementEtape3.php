<?php

namespace App\Entity;

use App\Repository\RecrutementEtape3Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecrutementEtape3Repository::class)]
class RecrutementEtape3
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_recrutement_etape_2 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $sujet_recherche = null;

    #[ORM\Column(type: Types::BLOB)]
    private $cv;

    #[ORM\Column(type: Types::BLOB)]
    private $vidéo_présentation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRecrutementEtape2(): ?int
    {
        return $this->id_recrutement_etape_2;
    }

    public function setIdRecrutementEtape2(int $id_recrutement_etape_2): static
    {
        $this->id_recrutement_etape_2 = $id_recrutement_etape_2;

        return $this;
    }

    public function getSujetRecherche(): ?string
    {
        return $this->sujet_recherche;
    }

    public function setSujetRecherche(string $sujet_recherche): static
    {
        $this->sujet_recherche = $sujet_recherche;

        return $this;
    }

    public function getCv()
    {
        return $this->cv;
    }

    public function setCv($cv): static
    {
        $this->cv = $cv;

        return $this;
    }

    public function getVidéoPrésentation()
    {
        return $this->vidéo_présentation;
    }

    public function setVidéoPrésentation($vidéo_présentation): static
    {
        $this->vidéo_présentation = $vidéo_présentation;

        return $this;
    }
}
