<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;


#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $mail = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(nullable: true)]
    private ?bool $teacher = null;

    #[ORM\Column(nullable: true)]
    private ?bool $admin = null;

    #[ORM\Column(nullable: true)]
    private ?bool $superAdmin = null;

    private Collection $userReservation;

    public function __construct()
    {
        $this->userReservation = new ArrayCollection();
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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function isTeacher(): ?bool
    {
        return $this->teacher;
    }

    public function setTeacher(?bool $teacher): static
    {
        $this->teacher = $teacher;

        return $this;
    }

    public function isAdmin(): ?bool
    {
        return $this->admin;
    }

    public function setAdmin(?bool $admin): static
    {
        $this->admin = $admin;

        return $this;
    }

    public function isSuperAdmin(): ?bool
    {
        return $this->superAdmin;
    }

    public function setSuperAdmin(?bool $superAdmin): static
    {
        $this->superAdmin = $superAdmin;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getUserReservation(): Collection
    {
        return $this->userReservation;
    }

    public function addUserReservation(Reservation $userReservation): static
    {
        if (!$this->userReservation->contains($userReservation)) {
            $this->userReservation->add($userReservation);
            $userReservation->setIdUser($this);
        }

        return $this;
    }

    public function removeUserReservation(Reservation $userReservation): static
    {
        if ($this->userReservation->removeElement($userReservation)) {
            // set the owning side to null (unless already changed)
            if ($userReservation->getIdUser() === $this) {
                $userReservation->setIdUser(null);
            }
        }

        return $this;
    }
}
