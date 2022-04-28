<?php

namespace App\Entity;

use App\Repository\ParraineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParraineRepository::class)
 */
class Parraine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=user::class, inversedBy="parraines")
     */
    private $amisParrainant;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="parraines")
     */
    private $amisParraine;

    public function __construct()
    {
        $this->amisParrainant = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, user>
     */
    public function getAmisParrainant(): Collection
    {
        return $this->amisParrainant;
    }

    public function addAmisParrainant(user $amisParrainant): self
    {
        if (!$this->amisParrainant->contains($amisParrainant)) {
            $this->amisParrainant[] = $amisParrainant;
        }

        return $this;
    }

    public function removeAmisParrainant(user $amisParrainant): self
    {
        $this->amisParrainant->removeElement($amisParrainant);

        return $this;
    }

    public function getAmisParraine(): ?user
    {
        return $this->amisParraine;
    }

    public function setAmisParraine(?user $amisParraine): self
    {
        $this->amisParraine = $amisParraine;

        return $this;
    }
}
