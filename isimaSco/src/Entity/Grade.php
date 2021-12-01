<?php

namespace App\Entity;

use App\Repository\GradeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GradeRepository::class)
 */
class Grade
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $description;

   
    private $enseignant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEnseignant(): ?Enseignant
    {
        return $this->enseingnant;
    }

    public function setEnseingnant(Enseingnant $enseingnant): self
    {
        // set the owning side of the relation if necessary
        if ($enseingnant->getEnseignants() !== $this) {
            $enseingnant->setEnseignants($this);
        }

        $this->enseingnant = $enseingnant;

        return $this;
    }
}
