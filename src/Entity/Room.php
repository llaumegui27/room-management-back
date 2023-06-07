<?php

namespace App\Entity;

use App\Repository\RoomRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoomRepository::class)]
class Room
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $subject = null;

    #[ORM\Column]
    private ?int $places = null;

    #[ORM\Column]
    private ?int $participants = null;

    #[ORM\OneToMany(mappedBy: 'idRoom', targetEntity: Reservation::class)]
    private Collection $roomReservation;

    public function __construct()
    {
        $this->roomReservation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(int $places): static
    {
        $this->places = $places;

        return $this;
    }

    public function getParticipants(): ?int
    {
        return $this->participants;
    }

    public function setParticipants(int $participants): static
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getRoomReservation(): Collection
    {
        return $this->roomReservation;
    }

    public function addRoomReservation(Reservation $roomReservation): static
    {
        if (!$this->roomReservation->contains($roomReservation)) {
            $this->roomReservation->add($roomReservation);
            $roomReservation->setIdRoom($this);
        }

        return $this;
    }

    public function removeRoomReservation(Reservation $roomReservation): static
    {
        if ($this->roomReservation->removeElement($roomReservation)) {
            // set the owning side to null (unless already changed)
            if ($roomReservation->getIdRoom() === $this) {
                $roomReservation->setIdRoom(null);
            }
        }

        return $this;
    }
}
