<?php

namespace App\Entity;

use App\Repository\LiveClassRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LiveClassRepository::class)]
class LiveClass
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $topic = null;

    #[ORM\Column(length: 300)]
    private ?string $start_time = null;

    #[ORM\Column(length: 255)]
    private ?string $duration = null;

    #[ORM\Column(length: 1000)]
    private ?string $description = null;

    #[ORM\Column(length: 1000)]
    private ?string $stream_link = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $stream_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTopic(): ?string
    {
        return $this->topic;
    }

    public function setTopic(string $topic): static
    {
        $this->topic = $topic;

        return $this;
    }

    public function getStartTime(): ?string
    {
        return $this->start_time;
    }

    public function setStartTime(string $start_time): static
    {
        $this->start_time = $start_time;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getStreamLink(): ?string
    {
        return $this->stream_link;
    }

    public function setStreamLink(string $stream_link): static
    {
        $this->stream_link = $stream_link;

        return $this;
    }

    public function getStreamDate(): ?\DateTimeInterface
    {
        return $this->stream_date;
    }

    public function setStreamDate(\DateTimeInterface $stream_date): static
    {
        $this->stream_date = $stream_date;

        return $this;
    }
}
