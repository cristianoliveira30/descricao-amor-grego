<?php

namespace App\Models\Amor\Types;

use App\Models\Amor\Contracts\Amor;

class Storge implements Amor
{
    public function detalhes(): array
    {
        return [
            'tipo' => 'Storge',

            'descricao' => 'Amor baseado na atração, desejo e intensidade emocional.',

            'expressao' => 'Busca proximidade, união física e emocional intensa.',

            'caracteristicas' => [
                'paixão',
                'desejo',
                'intensidade',
                'atração'
            ],

            'virtudes' => [
                'entrega',
                'energia emocional'
            ],

            'riscos' => [
                'impulsividade',
                'instabilidade',
                'dependência emocional'
            ],

            'referencias' => [
                'Filosofia grega',
                'Platão'
            ]
        ];
    }
}