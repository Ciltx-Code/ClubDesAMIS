<?php

namespace App\Entity;

use App\Repository\InscritRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InscritRepository::class)
 */
class Inscrit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=user::class, inversedBy="inscrits")
     */
    private $amis_id;

    /**
     * @ORM\ManyToMany(targetEntity=action::class, inversedBy="inscrits")
     */
    private $action_id;

    public function __construct()
    {
        $this->amis_id = new ArrayCollection();
        $this->action_id = new ArrayCollection();
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

    /**
     * @return Collection<int, action>
     */
    public function getActionId(): Collection
    {
        return $this->action_id;
    }

    public function addActionId(action $actionId): self
    {
        if (!$this->action_id->contains($actionId)) {
            $this->action_id[] = $actionId;
        }

        return $this;
    }

    public function removeActionId(action $actionId): self
    {
        $this->action_id->removeElement($actionId);

        return $this;
    }
}
