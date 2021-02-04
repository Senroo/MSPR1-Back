<?php

namespace App\Entity;

use App\Repository\StageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StageRepository::class)
 */
class Stage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
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
    private $location;

    /**
     * @ORM\OneToMany(targetEntity=Concert::class, mappedBy="stage")
     */
    private $concert;

    public function __construct()
    {
        $this->concert = new ArrayCollection();
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

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Collection|Concert[]
     */
    public function getConcert(): Collection
    {
        return $this->concert;
    }

    public function addConcert(Concert $concert): self
    {
        if (!$this->concert->contains($concert)) {
            $this->concert[] = $concert;
            $concert->setStage($this);
        }

        return $this;
    }

    public function removeConcert(Concert $concert): self
    {
        if ($this->concert->removeElement($concert)) {
            // set the owning side to null (unless already changed)
            if ($concert->getStage() === $this) {
                $concert->setStage(null);
            }
        }

        return $this;
    }
}
