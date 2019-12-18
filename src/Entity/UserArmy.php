<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserArmyRepository")
 */
class UserArmy
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
    private $army_points;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="userArmies")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Army", inversedBy="userArmies")
     * @ORM\JoinColumn(nullable=false)
     */
    private $army;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserArmyUnit", mappedBy="user_army", cascade={"remove"})
     */
    private $userArmyUnits;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function __construct()
    {
        $this->userArmyUnits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArmyPoints(): ?int
    {
        return $this->army_points;
    }

    public function setArmyPoints(int $army_points): self
    {
        $this->army_points = $army_points;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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
            $userArmyUnit->setUserArmy($this);
        }

        return $this;
    }

    public function removeUserArmyUnit(UserArmyUnit $userArmyUnit): self
    {
        if ($this->userArmyUnits->contains($userArmyUnit)) {
            $this->userArmyUnits->removeElement($userArmyUnit);
            // set the owning side to null (unless already changed)
            if ($userArmyUnit->getUserArmy() === $this) {
                $userArmyUnit->setUserArmy(null);
            }
        }

        return $this;
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function __toString()
    {
        return $this->getName();
        /*return $this->getArmy()->getName() . " " . $this->getArmyPoints(); */
    }
}
