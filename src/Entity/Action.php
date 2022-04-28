<?php

namespace App\Entity;

use App\Repository\ActionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActionRepository::class)
 */
class Action
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="time")
     */
    private $duree;

    /**
     * @ORM\ManyToMany(targetEntity=user::class, inversedBy="actions")
     */
    private $amis_id;

    /**
     * @ORM\ManyToOne(targetEntity=commission::class, inversedBy="actions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commission_id;

    /**
     * @ORM\ManyToMany(targetEntity=Inscrit::class, mappedBy="action_id")
     */
    private $inscrits;

    public function __construct()
    {
        $this->amis_id = new ArrayCollection();
        $this->inscrits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

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

    public function getCommissionId(): ?commission
    {
        return $this->commission_id;
    }

    public function setCommissionId(?commission $commission_id): self
    {
        $this->commission_id = $commission_id;

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
            $inscrit->addActionId($this);
        }

        return $this;
    }

    public function removeInscrit(Inscrit $inscrit): self
    {
        if ($this->inscrits->removeElement($inscrit)) {
            $inscrit->removeActionId($this);
        }

        return $this;
    }
}
