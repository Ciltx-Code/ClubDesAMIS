<?php

namespace App\Entity;

use App\Repository\DineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DineRepository::class)
 */
class Dine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=user::class, inversedBy="dines")
     */
    private $amis_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbInvites;

    public function __construct()
    {
        $this->amis_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNbInvites(): ?int
    {
        return $this->nbInvites;
    }

    public function setNbInvites(int $nbInvites): self
    {
        $this->nbInvites = $nbInvites;

        return $this;
    }
}
