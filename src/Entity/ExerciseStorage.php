<?php

namespace App\Entity;

use App\Repository\ExerciseStorageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExerciseStorageRepository::class)]
class ExerciseStorage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 400)]
    private ?string $title = null;

    #[ORM\Column(length: 200)]
    private ?string $category = null;

    #[ORM\Column(length: 200)]
    private ?string $subcategory = null;

    #[ORM\Column(length: 400, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 500)]
    private ?string $file_path = null;

    #[ORM\Column(nullable: true)]
    private ?bool $is_locked = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $image_url = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getSubcategory(): ?string
    {
        return $this->subcategory;
    }

    public function setSubcategory(string $subcategory): static
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getFilePath(): ?string
    {
        return $this->file_path;
    }

    public function setFilePath(string $file_path): static
    {
        $this->file_path = $file_path;

        return $this;
    }

    public function isIsLocked(): ?bool
    {
        return $this->is_locked;
    }

    public function setIsLocked(?bool $is_locked): static
    {
        $this->is_locked = $is_locked;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(?string $image_url): static
    {
        $this->image_url = $image_url;

        return $this;
    }
}
