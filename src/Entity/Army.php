<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArmyRepository")
 */
class Army
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserArmy", mappedBy="army")
     */
    private $userArmies;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Unit", mappedBy="army")
     */
    private $units;

    public function __construct()
    {
        $this->userArmies = new ArrayCollection();
        $this->units = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @return Collection|UserArmy[]
     */
    public function getUserArmies(): Collection
    {
        return $this->userArmies;
    }

    public function addUserArmy(UserArmy $userArmy): self
    {
        if (!$this->userArmies->contains($userArmy)) {
            $this->userArmies[] = $userArmy;
            $userArmy->setArmy($this);
        }

        return $this;
    }

    public function removeUserArmy(UserArmy $userArmy): self
    {
        if ($this->userArmies->contains($userArmy)) {
            $this->userArmies->removeElement($userArmy);
            // set the owning side to null (unless already changed)
            if ($userArmy->getArmy() === $this) {
                $userArmy->setArmy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Unit[]
     */
    public function getUnits(): Collection
    {
        return $this->units;
    }

    public function addUnit(Unit $unit): self
    {
        if (!$this->units->contains($unit)) {
            $this->units[] = $unit;
            $unit->setArmy($this);
        }

        return $this;
    }

    public function removeUnit(Unit $unit): self
    {
        if ($this->units->contains($unit)) {
            $this->units->removeElement($unit);
            // set the owning side to null (unless already changed)
            if ($unit->getArmy() === $this) {
                $unit->setArmy(null);
            }
        }

        return $this;
    }

    /*
    public function __toString()
    {
        return $this->getName();
    }
    */
}
