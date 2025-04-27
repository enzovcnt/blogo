<?php

namespace App\Entity;

use App\Repository\ProfyleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfyleRepository::class)]
class Profyle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?User $displayName = null;

    #[ORM\OneToOne(inversedBy: 'profyle', cascade: ['persist', 'remove'])]
    private ?Image $profilePicture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDisplayName(): ?User
    {
        return $this->displayName;
    }

    public function setDisplayName(?User $displayName): static
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function getProfilePicture(): ?Image
    {
        return $this->profilePicture;
    }

    public function setProfilePicture(?Image $profilePicture): static
    {
        $this->profilePicture = $profilePicture;

        return $this;
    }
}
