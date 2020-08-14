<?php

namespace App\Entity;

use App\Repository\CompteRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $numagence;

    /**
     * @ORM\Column(type="string")
     */
    private $numcompte;

    /**
     * @ORM\Column(type="integer")
     */
    private $clerib;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateOuverture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MontantInitial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fraisOuverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agios;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $dateBloquage;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $dateDebloquage;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="compte")
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumagence(): ?int
    {
        return $this->numagence;
    }

    public function setNumagence(string $numagence): self
    {
        $this->numagence = $numagence;

        return $this;
    }

    public function getNumcompte(): ?int
    {
        return $this->numcompte;
    }

    public function setNumcompte(string $numcompte): self
    {
        $this->numcompte = $numcompte;

        return $this;
    }

    public function getClerib(): ?int
    {
        return $this->clerib;
    }

    public function setClerib(int $clerib): self
    {
        $this->clerib = $clerib;

        return $this;
    }

    public function getDateOuverture(): ?string
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(string $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getMontantInitial(): ?string
    {
        return $this->MontantInitial;
    }

    public function setMontantInitial(string $MontantInitial): self
    {
        $this->MontantInitial = $MontantInitial;

        return $this;
    }

    public function getFraisOuverture(): ?string
    {
        return $this->fraisOuverture;
    }

    public function setFraisOuverture(string $fraisOuverture): self
    {
        $this->fraisOuverture = $fraisOuverture;

        return $this;
    }

    public function getAgios(): ?string
    {
        return $this->agios;
    }

    public function setAgios(?string $agios): self
    {
        $this->agios = $agios;

        return $this;
    }

    public function getDateBloquage(): ?string
    {
        return $this->dateBloquage;
    }

    public function setDateBloquage(?string $dateBloquage): self
    {
        $this->dateBloquage = $dateBloquage;

        return $this;
    }

    public function getDateDebloquage(): ?string
    {
        return $this->dateDebloquage;
    }

    public function setDateDebloquage(?string $dateDebloquage): self
    {
        $this->dateDebloquage = $dateDebloquage;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}
