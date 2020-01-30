<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TarifRepository")
 */
class Tarif
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $semaineEnfant;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $semaineAdulte;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $weekendEnfant;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $weekendAdulte;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $semaineGroupe;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $weekendGroupe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSemaineEnfant(): ?string
    {
        return $this->semaineEnfant;
    }

    public function setSemaineEnfant(string $semaineEnfant): self
    {
        $this->semaineEnfant = $semaineEnfant;

        return $this;
    }

    public function getSemaineAdulte(): ?string
    {
        return $this->semaineAdulte;
    }

    public function setSemaineAdulte(string $semaineAdulte): self
    {
        $this->semaineAdulte = $semaineAdulte;

        return $this;
    }

    public function getWeekendEnfant(): ?string
    {
        return $this->weekendEnfant;
    }

    public function setWeekendEnfant(string $weekendEnfant): self
    {
        $this->weekendEnfant = $weekendEnfant;

        return $this;
    }

    public function getWeekendAdulte(): ?string
    {
        return $this->weekendAdulte;
    }

    public function setWeekendAdulte(string $weekendAdulte): self
    {
        $this->weekendAdulte = $weekendAdulte;

        return $this;
    }

    public function getSemaineGroupe(): ?string
    {
        return $this->semaineGroupe;
    }

    public function setSemaineGroupe(string $semaineGroupe): self
    {
        $this->semaineGroupe = $semaineGroupe;

        return $this;
    }

    public function getWeekendGroupe(): ?string
    {
        return $this->weekendGroupe;
    }

    public function setWeekendGroupe(string $weekendGroupe): self
    {
        $this->weekendGroupe = $weekendGroupe;

        return $this;
    }
}
