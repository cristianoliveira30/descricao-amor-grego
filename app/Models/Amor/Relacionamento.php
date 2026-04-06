<?php
namespace App\Models\Amor\ValueObjects;

class Intensidade
{
    private float $valor;

    public function __construct(float $valor)
    {
        if ($valor < 0 || $valor > 1) {
            throw new \InvalidArgumentException("Intensidade inválida");
        }

        $this->valor = $valor;
    }

    public function valor(): float
    {
        return $this->valor;
    }
}