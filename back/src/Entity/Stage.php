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
     * @ORM\OneToMany(targetEntity=ConcertPlanning::class, mappedBy="stage")
     */
    private $concertplanning;

    public function __construct()
    {
        $this->concertplanning = new ArrayCollection();
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
     * @return Collection|ConcertPlanning[]
     */
    public function getConcertplanning(): Collection
    {
        return $this->concertplanning;
    }

    public function addConcertplanning(ConcertPlanning $concertplanning): self
    {
        if (!$this->concertplanning->contains($concertplanning)) {
            $this->concertplanning[] = $concertplanning;
            $concertplanning->setStage($this);
        }

        return $this;
    }

    public function removeConcertplanning(ConcertPlanning $concertplanning): self
    {
        if ($this->concertplanning->removeElement($concertplanning)) {
            // set the owning side to null (unless already changed)
            if ($concertplanning->getStage() === $this) {
                $concertplanning->setStage(null);
            }
        }

        return $this;
    }
}
