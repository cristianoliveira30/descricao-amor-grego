<?php

namespace App\Controllers;

use App\Factories\AmorFactory;

class HomeController
{
    public function index()
    {
        $tipo = $_GET['tipo'] ?? 'philia';
        $intensidade = (float) ($_GET['intensidade'] ?? 0.5);

        $amor = AmorFactory::create($tipo, $intensidade);

        // Retorna os dados para o Router renderizar
        return [
            'view' => 'home',
            'data' => compact('amor')
        ];
    }

    public function expressar()
    {
        $amor = AmorFactory::create($tipo);

        echo json_encode($amor->detalhes());
    }
}
