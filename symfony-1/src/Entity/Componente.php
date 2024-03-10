<?php

namespace App\Entity;

use App\Repository\ComponenteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComponenteRepository::class)]
class Componente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $modelo = null;


    #[ORM\Column]
    private ?string $fabricante = null;


    #[ORM\Column]
    private ?string $caracteristicas = null;


    #[ORM\Column]
    private ?string $precio = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    public function getFabricante(): ?string
    {
        return $this->fabricante;
    }

    public function getCaracteristicas(): ?string
    {
        return $this->caracteristicas;
    }

    public function getPrecio(): ?string
    {
        return $this->precio;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function setModelo(string $modelo): static
    {
        $this->modelo = $modelo;
        return $this;
    }

    public function setFabricante(string $fabricante): static
    {
        $this->fabricante = $fabricante;
        return $this;
    }

    public function setCaracteristicas(string $caracteristicas): static
    {
        $this->caracteristicas = $caracteristicas;
        return $this;
    }

    public function setPrecio(string $precio): static
    {
        $this->precio = $precio;
        return $this;
    }
}
