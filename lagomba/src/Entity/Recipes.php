<?php

namespace App\Entity;

use App\Repository\RecipesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipesRepository::class)
 */
class Recipes
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
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="Recipes")
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $steps;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $requires;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prep_time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prep_level;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSteps(): ?string
    {
        return $this->steps;
    }

    public function setSteps(string $steps): self
    {
        $this->steps = $steps;

        return $this;
    }

    public function getRequires(): ?string
    {
        return $this->requires;
    }

    public function setRequires(string $requires): self
    {
        $this->requires = $requires;

        return $this;
    }

    public function getPrepTime(): ?string
    {
        return $this->prep_time;
    }

    public function setPrepTime(string $prep_time): self
    {
        $this->prep_time = $prep_time;

        return $this;
    }

    public function getPrepLevel(): ?string
    {
        return $this->prep_level;
    }

    public function setPrepLevel(string $prep_level): self
    {
        $this->prep_level = $prep_level;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
