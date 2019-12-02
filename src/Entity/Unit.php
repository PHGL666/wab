<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UnitRepository")
 */
class Unit
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
     * @ORM\Column(type="integer")
     */
    private $size_min;

    /**
     * @ORM\Column(type="integer")
     */
    private $size_max;

    /**
     * @ORM\Column(type="integer")
     */
    private $cost_per_figure;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Army", inversedBy="units")
     * @ORM\JoinColumn(nullable=false)
     */
    private $army;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserArmyUnit", mappedBy="unit")
     */
    private $userArmyUnits;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UnitCategory", inversedBy="units")
     * @ORM\JoinColumn(nullable=false)
     */
    private $unit_category;

    public function __construct()
    {
        $this->userArmyUnits = new ArrayCollection();
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

    public function getSizeMin(): ?int
    {
        return $this->size_min;
    }

    public function setSizeMin(int $size_min): self
    {
        $this->size_min = $size_min;

        return $this;
    }

    public function getSizeMax(): ?int
    {
        return $this->size_max;
    }

    public function setSizeMax(int $size_max): self
    {
        $this->size_max = $size_max;

        return $this;
    }

    public function getCostPerFigure(): ?int
    {
        return $this->cost_per_figure;
    }

    public function setCostPerFigure(int $cost_per_figure): self
    {
        $this->cost_per_figure = $cost_per_figure;

        return $this;
    }

    public function getArmy(): ?Army
    {
        return $this->army;
    }

    public function setArmy(?Army $army): self
    {
        $this->army = $army;

        return $this;
    }

    /**
     * @return Collection|UserArmyUnit[]
     */
    public function getUserArmyUnits(): Collection
    {
        return $this->userArmyUnits;
    }

    public function addUserArmyUnit(UserArmyUnit $userArmyUnit): self
    {
        if (!$this->userArmyUnits->contains($userArmyUnit)) {
            $this->userArmyUnits[] = $userArmyUnit;
            $userArmyUnit->setUnit($this);
        }

        return $this;
    }

    public function removeUserArmyUnit(UserArmyUnit $userArmyUnit): self
    {
        if ($this->userArmyUnits->contains($userArmyUnit)) {
            $this->userArmyUnits->removeElement($userArmyUnit);
            // set the owning side to null (unless already changed)
            if ($userArmyUnit->getUnit() === $this) {
                $userArmyUnit->setUnit(null);
            }
        }

        return $this;
    }

    public function getUnitCategory(): ?UnitCategory
    {
        return $this->unit_category;
    }

    public function setUnitCategory(?UnitCategory $unit_category): self
    {
        $this->unit_category = $unit_category;

        return $this;
    }
}
