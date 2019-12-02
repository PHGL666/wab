<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UnitLimitRepository")
 */
class UnitLimit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $min;

    /**
     * @ORM\Column(type="integer")
     */
    private $max;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UnitCategoryHasUnitLimit", mappedBy="unit_limit")
     */
    private $unitCategoryHasUnitLimits;

    public function __construct()
    {
        $this->unitCategoryHasUnitLimits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMin(): ?int
    {
        return $this->min;
    }

    public function setMin(int $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(int $max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @return Collection|UnitCategoryHasUnitLimit[]
     */
    public function getUnitCategoryHasUnitLimits(): Collection
    {
        return $this->unitCategoryHasUnitLimits;
    }

    public function addUnitCategoryHasUnitLimit(UnitCategoryHasUnitLimit $unitCategoryHasUnitLimit): self
    {
        if (!$this->unitCategoryHasUnitLimits->contains($unitCategoryHasUnitLimit)) {
            $this->unitCategoryHasUnitLimits[] = $unitCategoryHasUnitLimit;
            $unitCategoryHasUnitLimit->setUnitLimit($this);
        }

        return $this;
    }

    public function removeUnitCategoryHasUnitLimit(UnitCategoryHasUnitLimit $unitCategoryHasUnitLimit): self
    {
        if ($this->unitCategoryHasUnitLimits->contains($unitCategoryHasUnitLimit)) {
            $this->unitCategoryHasUnitLimits->removeElement($unitCategoryHasUnitLimit);
            // set the owning side to null (unless already changed)
            if ($unitCategoryHasUnitLimit->getUnitLimit() === $this) {
                $unitCategoryHasUnitLimit->setUnitLimit(null);
            }
        }

        return $this;
    }
}
