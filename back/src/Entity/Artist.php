<?php

namespace App\Entity;

use App\Repository\ArtistRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtistRepository::class)
 */
class Artist
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
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $music_group;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\OneToMany(targetEntity=ArtistMeeting::class, mappedBy="artist", orphanRemoval=true)
     */
    private $artist_meetings;

    /**
     * @ORM\ManyToMany(targetEntity=ConcertPlanning::class, inversedBy="artists")
     */
    private $concertplanning;

    public function __construct()
    {
        $this->artist_meetings = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMusicGroup(): ?string
    {
        return $this->music_group;
    }

    public function setMusicGroup(?string $music_group): self
    {
        $this->music_group = $music_group;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return Collection|ArtistMeeting[]
     */
    public function getArtistMeetings(): Collection
    {
        return $this->artist_meetings;
    }

    public function addArtistMeeting(ArtistMeeting $artistMeeting): self
    {
        if (!$this->artist_meetings->contains($artistMeeting)) {
            $this->artist_meetings[] = $artistMeeting;
            $artistMeeting->setArtist($this);
        }

        return $this;
    }

    public function removeArtistMeeting(ArtistMeeting $artistMeeting): self
    {
        if ($this->artist_meetings->removeElement($artistMeeting)) {
            // set the owning side to null (unless already changed)
            if ($artistMeeting->getArtist() === $this) {
                $artistMeeting->setArtist(null);
            }
        }

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
        }

        return $this;
    }

    public function removeConcertplanning(ConcertPlanning $concertplanning): self
    {
        $this->concertplanning->removeElement($concertplanning);

        return $this;
    }
}
