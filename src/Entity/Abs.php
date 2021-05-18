<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AbsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AbsRepository::class)
 */
#[ApiResource]
class Abs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $date1;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $enddate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $am;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    #[Assert\Type("boolean")]
    private $pm;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDate1(): ?string
    {
        return $this->date1;
    }

    public function setDate1(?string $date1): self
    {
        $this->date1 = $date1;

        return $this;
    }

    public function getEnddate(): ?\DateTimeInterface
    {
        return $this->enddate;
    }

    public function setEnddate(?\DateTimeInterface $enddate): self
    {
        $this->enddate = $enddate;

        return $this;
    }

    public function getAm(): ?bool
    {
        return $this->am;
    }

    public function setAm(?bool $am): self
    {
        $this->am = $am;

        return $this;
    }

    public function getPm(): ?string
    {
        return $this->pm;
    }

    public function setPm(?string $pm): self
    {
        $this->pm = $pm;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
