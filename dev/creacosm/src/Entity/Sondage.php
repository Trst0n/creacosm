<?php

namespace App\Entity;

use App\Repository\SondageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SondageRepository::class)]
class Sondage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\ManyToOne(inversedBy: 'sondages')]
    private ?Theme $theme = null;

    #[ORM\ManyToMany(targetEntity: Utilisateur::class, inversedBy: 'sondages')]
    private Collection $utilisateurs;

    #[ORM\ManyToOne(inversedBy: 'sondages')]
    private ?Utilisateur $createur = null;

    #[ORM\OneToMany(mappedBy: 'sondage', targetEntity: Statistique::class, orphanRemoval: true)]
    private Collection $statistique;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $introduction = null;

    #[ORM\Column]
    private ?bool $visibilite = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datecreation = null;

    #[ORM\OneToMany(mappedBy: 'sondage', targetEntity: Question::class)]
    private Collection $questions;

    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
        $this->statistique = new ArrayCollection();
        $this->questions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTheme(): ?Theme
    {
        return $this->theme;
    }

    public function setTheme(?Theme $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * @return Collection<int, Utilisateur>
     */
    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur(Utilisateur $utilisateur): self
    {
        if (!$this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs->add($utilisateur);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): self
    {
        $this->utilisateurs->removeElement($utilisateur);

        return $this;
    }

    public function getCreateur(): ?Utilisateur
    {
        return $this->createur;
    }

    public function setCreateur(?Utilisateur $createur): self
    {
        $this->createur = $createur;

        return $this;
    }

    /**
     * @return Collection<int, Statistique>
     */
    public function getStatistique(): Collection
    {
        return $this->statistique;
    }

    public function addStatistique(Statistique $statistique): self
    {
        if (!$this->statistique->contains($statistique)) {
            $this->statistique->add($statistique);
            $statistique->setSondage($this);
        }

        return $this;
    }

    public function removeStatistique(Statistique $statistique): self
    {
        if ($this->statistique->removeElement($statistique)) {
            // set the owning side to null (unless already changed)
            if ($statistique->getSondage() === $this) {
                $statistique->setSondage(null);
            }
        }

        return $this;
    }

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(?string $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }

    public function isVisibilite(): ?bool
    {
        return $this->visibilite;
    }

    public function setVisibilite(bool $visibilite): self
    {
        $this->visibilite = $visibilite;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(\DateTimeInterface $datecreation): self
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * @return Collection<int, Question>
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions->add($question);
            $question->setSondage($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        if ($this->questions->removeElement($question)) {
            // set the owning side to null (unless already changed)
            if ($question->getSondage() === $this) {
                $question->setSondage(null);
            }
        }

        return $this;
    }
}
