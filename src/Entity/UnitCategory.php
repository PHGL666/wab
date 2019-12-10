<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UnitCategoryRepository")
 */
class UnitCategory
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
     * @ORM\OneToMany(targetEntity="App\Entity\UnitCategoryHasUnitLimit", mappedBy="unit_category")
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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
            $unitCategoryHasUnitLimit->setUnitCategory($this);
        }

        return $this;
    }

    public function removeUnitCategoryHasUnitLimit(UnitCategoryHasUnitLimit $unitCategoryHasUnitLimit): self
    {
        if ($this->unitCategoryHasUnitLimits->contains($unitCategoryHasUnitLimit)) {
            $this->unitCategoryHasUnitLimits->removeElement($unitCategoryHasUnitLimit);
            // set the owning side to null (unless already changed)
            if ($unitCategoryHasUnitLimit->getUnitCategory() === $this) {
                $unitCategoryHasUnitLimit->setUnitCategory(null);
            }
        }

        return $this;
    }
    
    public function __toString()
    {
        return $this->getName();
    }
}
