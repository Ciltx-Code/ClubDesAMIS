<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    public $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    public $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telFixe", type="string", length=10, nullable=false)
     */
    public $telFixe;

    /**
     * @var string
     *
     * @ORM\Column(name="telPortable", type="string", length=10, nullable=false)
     */
    public $telPortable;

    /**
     * @ORM\Column(name="numeroAdresse", type="integer")
     */
    public $numAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="villeAdresse", type="string", length=255, nullable=false)
     */
    public $villeAdresse;

    /**
     * @ORM\ManyToMany(targetEntity=Action::class, mappedBy="amis_id")
     */
    private $actions;

    /**
     * @ORM\ManyToMany(targetEntity=Fonction::class, mappedBy="amis_id")
     */
    private $fonctions;

    /**
     * @ORM\ManyToMany(targetEntity=Dine::class, mappedBy="amis_id")
     */
    private $dines;

    /**
     * @ORM\ManyToMany(targetEntity=Inscrit::class, mappedBy="amis_id")
     */
    private $inscrits;

    /**
     * @ORM\ManyToMany(targetEntity=Parraine::class, mappedBy="amisParrainant")
     */
    private $parraines;

    public function __construct()
    {
        $this->actions = new ArrayCollection();
        $this->fonctions = new ArrayCollection();
        $this->dines = new ArrayCollection();
        $this->inscrits = new ArrayCollection();
        $this->parraines = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
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
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getTelFixe(): string
    {
        return $this->telFixe;
    }

    /**
     * @param string $telFixe
     */
    public function setTelFixe(string $telFixe): void
    {
        $this->telFixe = $telFixe;
    }

    /**
     * @return string
     */
    public function getTelPortable(): string
    {
        return $this->telPortable;
    }

    /**
     * @param string $telPortable
     */
    public function setTelPortable(string $telPortable): void
    {
        $this->telPortable = $telPortable;
    }

    /**
     * @return mixed
     */
    public function getNumAdresse()
    {
        return $this->numAdresse;
    }

    /**
     * @param mixed $numAdresse
     */
    public function setNumAdresse($numAdresse): void
    {
        $this->numAdresse = $numAdresse;
    }

    /**
     * @return string
     */
    public function getVilleAdresse(): string
    {
        return $this->villeAdresse;
    }

    /**
     * @param string $villeAdresse
     */
    public function setVilleAdresse(string $villeAdresse): void
    {
        $this->villeAdresse = $villeAdresse;
    }

    /**
     * @return Collection<int, Action>
     */
    public function getActions(): Collection
    {
        return $this->actions;
    }

    public function addAction(Action $action): self
    {
        if (!$this->actions->contains($action)) {
            $this->actions[] = $action;
            $action->addAmisId($this);
        }

        return $this;
    }

    public function removeAction(Action $action): self
    {
        if ($this->actions->removeElement($action)) {
            $action->removeAmisId($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Fonction>
     */
    public function getFonctions(): Collection
    {
        return $this->fonctions;
    }

    public function addFonction(Fonction $fonction): self
    {
        if (!$this->fonctions->contains($fonction)) {
            $this->fonctions[] = $fonction;
            $fonction->addAmisId($this);
        }

        return $this;
    }

    public function removeFonction(Fonction $fonction): self
    {
        if ($this->fonctions->removeElement($fonction)) {
            $fonction->removeAmisId($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Dine>
     */
    public function getDines(): Collection
    {
        return $this->dines;
    }

    public function addDine(Dine $dine): self
    {
        if (!$this->dines->contains($dine)) {
            $this->dines[] = $dine;
            $dine->addAmisId($this);
        }

        return $this;
    }

    public function removeDine(Dine $dine): self
    {
        if ($this->dines->removeElement($dine)) {
            $dine->removeAmisId($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Inscrit>
     */
    public function getInscrits(): Collection
    {
        return $this->inscrits;
    }

    public function addInscrit(Inscrit $inscrit): self
    {
        if (!$this->inscrits->contains($inscrit)) {
            $this->inscrits[] = $inscrit;
            $inscrit->addAmisId($this);
        }

        return $this;
    }

    public function removeInscrit(Inscrit $inscrit): self
    {
        if ($this->inscrits->removeElement($inscrit)) {
            $inscrit->removeAmisId($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Parraine>
     */
    public function getParraines(): Collection
    {
        return $this->parraines;
    }

    public function addParraine(Parraine $parraine): self
    {
        if (!$this->parraines->contains($parraine)) {
            $this->parraines[] = $parraine;
            $parraine->addAmisParrainant($this);
        }

        return $this;
    }

    public function removeParraine(Parraine $parraine): self
    {
        if ($this->parraines->removeElement($parraine)) {
            $parraine->removeAmisParrainant($this);
        }

        return $this;
    }

    public function getStringRoles(): string
    {
        $roles = $this->roles;
        $str="";
        // guarantee every user at least has ROLE_USER
        if(count($roles)==0){
            $str = "Utilisateur";
        }else if(count($roles)==1){
            if($roles[0]=="ROLE_ADMIN"){
                $str = "Administrateur";
            }else{
                $str = "Utilisateur";
            }
        }

        $roles[] = 'ROLE_USER';

        return $str;
    }
}
