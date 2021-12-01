<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Matricule;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $DateNais;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $Adress;

    /**
     * @ORM\ManyToOne(targetEntity=Groupe::class, inversedBy="etudiants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etudiants;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->Matricule;
    }

    public function setMatricule(string $Matricule): self
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getDateNais(): ?\DateTimeInterface
    {
        return $this->DateNais;
    }

    public function setDateNais(\DateTimeInterface $DateNais): self
    {
        $this->DateNais = $DateNais;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adress): self
    {
        $this->Adress = $Adress;

        return $this;
    }

    public function getEtudiants(): ?Groupe
    {
        return $this->etudiants;
    }

    public function setEtudiants(?Groupe $etudiants): self
    {
        $this->etudiants = $etudiants;

        return $this;
    }
}
