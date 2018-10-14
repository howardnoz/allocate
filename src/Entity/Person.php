<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 */
class Person
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gender;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_postgrad;

    /**
     * @ORM\Column(type="boolean")
     */
    private $can_drive;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getIsPostgrad(): ?bool
    {
        return $this->is_postgrad;
    }

    public function setIsPostgrad(bool $is_postgrad): self
    {
        $this->is_postgrad = $is_postgrad;

        return $this;
    }

    public function getCanDrive(): ?bool
    {
        return $this->can_drive;
    }

    public function setCanDrive(bool $can_drive): self
    {
        $this->can_drive = $can_drive;

        return $this;
    }
}
