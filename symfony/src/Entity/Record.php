<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Tenant;
use App\Entity\Local;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecordRepository")
 */
class Record
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $entryDate;

    /**
     * @ORM\Column(type="float")
     */
    private $rent;

    /**
     * @ORM\Column(type="float")
     */
    private $fixedCharge;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $periodicity;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $revisionIndex;

    /**
     * @ORM\Column(type="datetime")
     */
    private $releaseDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $additionalInformation;

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Tenant")
    * @ORM\JoinColumn(nullable=false)
    */
    private $tenant;

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Local")
    * @ORM\JoinColumn(nullable=false)
    */
    private $local;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntryDate(): ?\DateTimeInterface
    {
        return $this->entryDate;
    }

    public function setEntryDate(\DateTimeInterface $entryDate): self
    {
        $this->entryDate = $entryDate;

        return $this;
    }

    public function getRent(): ?float
    {
        return $this->rent;
    }

    public function setRent(float $rent): self
    {
        $this->rent = $rent;

        return $this;
    }

    public function getFixedCharge(): ?float
    {
        return $this->fixedCharge;
    }

    public function setFixedCharge(float $fixedCharge): self
    {
        $this->fixedCharge = $fixedCharge;

        return $this;
    }

    public function getPeriodicity(): ?string
    {
        return $this->periodicity;
    }

    public function setPeriodicity(string $periodicity): self
    {
        $this->periodicity = $periodicity;

        return $this;
    }

    public function getRevisionIndex(): ?string
    {
        return $this->revisionIndex;
    }

    public function setRevisionIndex(string $revisionIndex): self
    {
        $this->revisionIndex = $revisionIndex;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?string $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    public function getTenant(): ?Tenant
    {
        return $this->tenant;
    }

    public function setTenant(?Tenant $tenant): self
    {
        $this->tenant = $tenant;

        return $this;
    }

    public function getLocal(): ?Local
    {
        return $this->local;
    }

    public function setLocal(?Local $local): self
    {
        $this->local = $local;

        return $this;
    }
}