<?php
// src/Entity/Motocicleta.php

namespace App\Entity;

class Motocicleta
{
    private $marca;
    private $modelo;
    private $color;
    private $precio;

    public function __construct(string $marca = 'Sin marca', string $modelo = 'Sin modelo', string $color = 'sin color', string $precio = 'sin precio')
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->precio = $precio;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): self
    {
        $this->marca = $marca;
        return $this;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;
        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;
        return $this;
    }
    
    public function getPrecio(): string
    {
        return $this->precio;
    }

    public function setPrecio(string $precio): self
    {
        $this->precio = $precio;
        return $this;
    }
}