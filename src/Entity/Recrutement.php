<?php

namespace App\Entity;

use App\Repository\RecrutementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Rollerworks\Component\PasswordStrength\Validator\Constraints as RollerworksPassword;


#[ORM\Entity(repositoryClass: RecrutementRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class Recrutement 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    #[Assert\Length(
        min: 3,
        max: 15,
        minMessage: 'Votre prénom doit comporter au minimum {{ limit }} caractères',
        maxMessage: 'Votre prénom doit comporter au maximum {{ limit }} caractères',
    )]
    private ?string $prenom = null;

    #[ORM\Column(length: 150)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[RollerworksPassword\PasswordRequirements(
        requireLetters:true,
        missingLettersMessage: "Votre mot de passe doit contenir au minimum une lettre",
        minLength: 8,
        tooShortMessage: "Votre mot de passe doit contenir au moins 8 caractères"
        )
    ]
    private ?string $password = null;

    #[ORM\OneToOne(mappedBy: 'Recrutement', cascade: ['persist', 'remove'])]
    private ?Recrutement2 $recrutement2 = null;

    #[ORM\OneToOne(mappedBy: 'Recrutement', cascade: ['persist', 'remove'])]
    private ?User $user = null;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getRecrutement2(): ?Recrutement2
    {
        return $this->recrutement2;
    }

    public function setRecrutement2(Recrutement2 $recrutement2): static
    {
        // set the owning side of the relation if necessary
        if ($recrutement2->getRecrutement() !== $this) {
            $recrutement2->setRecrutement($this);
        }

        $this->recrutement2 = $recrutement2;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        // set the owning side of the relation if necessary
        if ($user->getRecrutement() !== $this) {
            $user->setRecrutement($this);
        }

        $this->user = $user;

        return $this;
    }
}
