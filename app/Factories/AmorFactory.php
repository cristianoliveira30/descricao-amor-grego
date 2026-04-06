<?php

namespace App\Factories;

use App\Models\Amor\Types\Philia;
use App\Models\Amor\Types\Eros;
use App\Models\Amor\Types\Agape;
use App\Models\Amor\Types\Storge;
use App\Models\Amor\ValueObjects\Intensidade;
use App\Models\Amor\Contracts\Amor;

class AmorFactory
{
    public static function create(string $tipo): Amor
    {
        return match ($tipo) {
            'philia' => new Philia(),
            'eros' => new Eros(),
            'agape' => new Agape(),
            'storge' => new Storge(),
            default => throw new \Exception("Tipo inválido")
        };
    }

    public static function get(): array
    {
        return [
            'philia' => new Philia(),
            'eros' => new Eros(),
            'agape' => new Agape(),
            'storge' => new Storge(),
        ];
    }
}
