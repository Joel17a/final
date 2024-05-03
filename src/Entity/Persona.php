<?php
// src/Entity/Persona.php

namespace App\Entity;

class Persona
{
    private $nombre;
    private $apellido;

    public function __construct(string $nombre = 'Sin nombre', string $apellido = 'Sin apellido')
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;
        return $this;
    }
}
