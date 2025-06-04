<?php

namespace App\Entity;

use App\Repository\Recrutement3Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Recrutement3Repository::class)]
class Recrutement3
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $sujetRecherche = null;

    #[ORM\Column(length: 255)]
    private ?string $cv = null;

    #[ORM\Column(length: 255)]
    private ?string $video = null;

    #[ORM\OneToOne(inversedBy: 'recrutement3', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Recrutement2 $Recrutement2 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSujetRecherche(): ?string
    {
        return $this->sujetRecherche;
    }

    public function setSujetRecherche(string $sujetRecherche): static
    {
        $this->sujetRecherche = $sujetRecherche;

        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(string $cv): static
    {
        $this->cv = $cv;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): static
    {
        $this->video = $video;

        return $this;
    }

    public function getRecrutement2(): ?Recrutement2
    {
        return $this->Recrutement2;
    }

    public function setRecrutement2(Recrutement2 $Recrutement2): static
    {
        $this->Recrutement2 = $Recrutement2;

        return $this;
    }
}
