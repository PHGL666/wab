<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserArmyUnitRepository")
 */
class UserArmyUnit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Unit", inversedBy="userArmyUnits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $unit;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UserArmy", inversedBy="userArmyUnits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_army;

    /**
     * @ORM\Column(type="integer")
     */
    private $number_of_unit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUnit(): ?Unit
    {
        return $this->unit;
    }

    public function setUnit(?Unit $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getUserArmy(): ?UserArmy
    {
        return $this->user_army;
    }

    public function setUserArmy(?UserArmy $user_army): self
    {
        $this->user_army = $user_army;

        return $this;
    }

    public function __toString()
    {
        return $this->getUnit()->getName();
    }

    public function getNumberOfUnit(): ?int
    {
        return $this->number_of_unit;
    }

    public function setNumberOfUnit(int $number_of_unit): self
    {
        $this->number_of_unit = $number_of_unit;

        return $this;
    }
}