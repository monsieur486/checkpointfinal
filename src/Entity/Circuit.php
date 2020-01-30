<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CircuitRepository")
 */
class Circuit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $datePresentation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer")
     */
    private $places;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse01;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse02;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $codepostal;

    /**
     * @ORM\Column(type="decimal", precision=16, scale=13)
     */
    private $longitude;

    /**
     * @ORM\Column(type="decimal", precision=16, scale=13)
     */
    private $latitude;

    /**
     * @ORM\Column(type="text")
     */
    private $resume;

    /**
     * @ORM\Column(type="boolean")
     */
    private $actif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePresentation(): ?\DateTimeInterface
    {
        return $this->datePresentation;
    }

    public function setDatePresentation(\DateTimeInterface $datePresentation): self
    {
        $this->datePresentation = $datePresentation;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(int $places): self
    {
        $this->places = $places;

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

    public function getAdresse01(): ?string
    {
        return $this->adresse01;
    }

    public function setAdresse01(string $adresse01): self
    {
        $this->adresse01 = $adresse01;

        return $this;
    }

    public function getAdresse02(): ?string
    {
        return $this->adresse02;
    }

    public function setAdresse02(?string $adresse02): self
    {
        $this->adresse02 = $adresse02;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(string $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(bool $actif): self
    {
        $this->actif = $actif;

        return $this;
    }
}
