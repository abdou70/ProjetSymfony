<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseclient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailclient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephoneclient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cni;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $datenaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $salaireclient;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomemployeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $raisonsocial;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephoneemploy;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresseemploy;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ninea;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $emailemploy;

    /**
     * @ORM\OneToMany(targetEntity=Compte::class, mappedBy="client")
     */
    private $compte;

    public function __construct()
    {
        $this->compte = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresseclient(): ?string
    {
        return $this->adresseclient;
    }

    public function setAdresseclient(string $adresseclient): self
    {
        $this->adresseclient = $adresseclient;

        return $this;
    }

    public function getEmailclient(): ?string
    {
        return $this->emailclient;
    }

    public function setEmailclient(string $emailclient): self
    {
        $this->emailclient = $emailclient;

        return $this;
    }

    public function getTelephoneclient(): ?string
    {
        return $this->telephoneclient;
    }

    public function setTelephoneclient(string $telephoneclient): self
    {
        $this->telephoneclient = $telephoneclient;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getCni(): ?string
    {
        return $this->cni;
    }

    public function setCni(string $cni): self
    {
        $this->cni = $cni;

        return $this;
    }

    public function getDatenaissance(): ?string
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(string $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getSalaireclient(): ?string
    {
        return $this->salaireclient;
    }

    public function setSalaireclient(string $salaireclient): self
    {
        $this->salaireclient = $salaireclient;

        return $this;
    }

    public function getNomemployeur(): ?string
    {
        return $this->nomemployeur;
    }

    public function setNomemployeur(?string $nomemployeur): self
    {
        $this->nomemployeur = $nomemployeur;

        return $this;
    }

    public function getRaisonsocial(): ?string
    {
        return $this->raisonsocial;
    }

    public function setRaisonsocial(?string $raisonsocial): self
    {
        $this->raisonsocial = $raisonsocial;

        return $this;
    }

    public function getTelephoneemploy(): ?string
    {
        return $this->telephoneemploy;
    }

    public function setTelephoneemploy(?string $telephoneemploy): self
    {
        $this->telephoneemploy = $telephoneemploy;

        return $this;
    }

    public function getAdresseemploy(): ?string
    {
        return $this->adresseemploy;
    }

    public function setAdresseemploy(?string $adresseemploy): self
    {
        $this->adresseemploy = $adresseemploy;

        return $this;
    }

    public function getNinea(): ?string
    {
        return $this->ninea;
    }

    public function setNinea(?string $ninea): self
    {
        $this->ninea = $ninea;

        return $this;
    }

    public function getEmailemploy(): ?string
    {
        return $this->emailemploy;
    }

    public function setEmailemploy(?string $emailemploy): self
    {
        $this->emailemploy = $emailemploy;

        return $this;
    }

    /**
     * @return Collection|Compte[]
     */
    public function getCompte(): Collection
    {
        return $this->compte;
    }

    public function addCompte(Compte $compte): self
    {
        if (!$this->compte->contains($compte)) {
            $this->compte[] = $compte;
            $compte->setClient($this);
        }

        return $this;
    }

    public function removeCompte(Compte $compte): self
    {
        if ($this->compte->contains($compte)) {
            $this->compte->removeElement($compte);
            // set the owning side to null (unless already changed)
            if ($compte->getClient() === $this) {
                $compte->setClient(null);
            }
        }

        return $this;
    }
}
