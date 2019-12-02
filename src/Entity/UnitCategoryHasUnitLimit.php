<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UnitCategoryHasUnitLimitRepository")
 */
class UnitCategoryHasUnitLimit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $min;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $max;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UnitCategory", inversedBy="unitCategoryHasUnitLimits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $unit_category;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UnitLimit", inversedBy="unitCategoryHasUnitLimits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $unit_limit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMin(): ?int
    {
        return $this->min;
    }

    public function setMin(?int $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(?int $max): self
    {
        $this->max = $max;

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

    public function getUnitLimit(): ?UnitLimit
    {
        return $this->unit_limit;
    }

    public function setUnitLimit(?UnitLimit $unit_limit): self
    {
        $this->unit_limit = $unit_limit;

        return $this;
    }
}
