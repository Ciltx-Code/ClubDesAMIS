<?php

namespace App\Entity;

use App\Repository\FonctionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FonctionRepository::class)
 */
class Fonction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToMany(targetEntity=commission::class, inversedBy="fonctions")
     */
    private $commission_id;

    /**
     * @ORM\ManyToMany(targetEntity=user::class, inversedBy="fonctions")
     */
    private $amis_id;

    public function __construct()
    {
        $this->commission_id = new ArrayCollection();
        $this->amis_id = new ArrayCollection();
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

    /**
     * @return Collection<int, commission>
     */
    public function getCommissionId(): Collection
    {
        return $this->commission_id;
    }

    public function addCommissionId(commission $commissionId): self
    {
        if (!$this->commission_id->contains($commissionId)) {
            $this->commission_id[] = $commissionId;
        }

        return $this;
    }

    public function removeCommissionId(commission $commissionId): self
    {
        $this->commission_id->removeElement($commissionId);

        return $this;
    }

    /**
     * @return Collection<int, user>
     */
    public function getAmisId(): Collection
    {
        return $this->amis_id;
    }

    public function addAmisId(user $amisId): self
    {
        if (!$this->amis_id->contains($amisId)) {
            $this->amis_id[] = $amisId;
        }

        return $this;
    }

    public function removeAmisId(user $amisId): self
    {
        $this->amis_id->removeElement($amisId);

        return $this;
    }
}
