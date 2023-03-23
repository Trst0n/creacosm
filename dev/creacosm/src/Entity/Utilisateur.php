<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[UniqueEntity(fields: ['login'], message: 'There is already an account with this login')]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $login = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\ManyToMany(targetEntity: Sondage::class, mappedBy: 'utilisateurs')]
    private Collection $sondages;



    #[ORM\Column(length: 255, nullable: true)]
    private ?string $genre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE , nullable: true)]
    private ?\DateTimeInterface $datedenaissance = null;

    #[ORM\ManyToMany(targetEntity: Reponse::class, inversedBy: 'utilisateurs')]
    private Collection $reponses;

    #[ORM\OneToMany(mappedBy: 'administrateur', targetEntity: Sondage::class, orphanRemoval: true)]
    private Collection $sondagescree;

    public function __construct()
    {
        $this->sondages = new ArrayCollection();
        $this->reponses = new ArrayCollection();
        $this->sondagescree = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->login;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * @return Collection<int, Sondage>
     */
    public function getSondages(): Collection
    {
        return $this->sondages;
    }

    public function addSondage(Sondage $sondage): self
    {
        if (!$this->sondages->contains($sondage)) {
            $this->sondages->add($sondage);
            $sondage->addUtilisateur($this);
        }

        return $this;
    }

    public function removeSondage(Sondage $sondage): self
    {
        if ($this->sondages->removeElement($sondage)) {
            $sondage->removeUtilisateur($this);
        }

        return $this;
    }




    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getDatedenaissance(): ?\DateTimeInterface
    {
        return $this->datedenaissance;
    }

    public function setDatedenaissance(\DateTimeInterface $datedenaissance): self
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    /**
     * @return Collection<int, Reponse>
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses->add($reponse);
        }

        return $this;
    }

    public function removeReponse(Reponse $reponse): self
    {
        $this->reponses->removeElement($reponse);

        return $this;
    }

    /**
     * @return Collection<int, Sondage>
     */
    public function getSondagescree(): Collection
    {
        return $this->sondagescree;
    }

    public function addSondagescree(Sondage $sondagescree): self
    {
        if (!$this->sondagescree->contains($sondagescree)) {
            $this->sondagescree->add($sondagescree);
            $sondagescree->setAdministrateur($this);
        }

        return $this;
    }

    public function removeSondagescree(Sondage $sondagescree): self
    {
        if ($this->sondagescree->removeElement($sondagescree)) {
            // set the owning side to null (unless already changed)
            if ($sondagescree->getAdministrateur() === $this) {
                $sondagescree->setAdministrateur(null);
            }
        }

        return $this;
    }
}
