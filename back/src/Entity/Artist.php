<?php

namespace App\Entity;

use App\Repository\ArtistRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"primary"}}
 * )
 * @ORM\Entity(repositoryClass=ArtistRepository::class)
 */
class Artist
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"primary"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"primary"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"primary"})
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"primary"})
     */
    private $music_group;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"primary"})
     */
    private $picture;

    /**
     * @ORM\OneToMany(targetEntity=ArtistMeeting::class, mappedBy="artist")
     */
    private $artist_meetings;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"primary"})
     */
    private $genre;


    /**
     * @ORM\OneToMany(targetEntity=Concert::class, mappedBy="artist", orphanRemoval=true)
     */
    private $concert;

    public function __construct()
    {
        $this->artist_meetings = new ArrayCollection();
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

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

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
            $concert->setArtist($this);
        }

        return $this;
    }

    public function removeConcert(Concert $concert): self
    {
        if ($this->concert->removeElement($concert)) {
            // set the owning side to null (unless already changed)
            if ($concert->getArtist() === $this) {
                $concert->setArtist(null);
            }
        }

        return $this;
    }
}
