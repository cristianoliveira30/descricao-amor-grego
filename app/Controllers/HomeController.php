<?php

namespace App\Controllers;

use App\Core\Inertia;
use App\Factories\AmorFactory;

class HomeController
{
    public function index()
    {
        $amor = AmorFactory::get();

        // Renderiza o componente Vue Pages/Home.vue via Inertia
        Inertia::render('Home', [
            'title'       => 'Bem-vindo',
            'amor'        => [
                'philia' => $amor['philia']->detalhes(),
                'eros'   => $amor['eros']->detalhes(),
                'agape'  => $amor['agape']->detalhes(),
                'storge' => $amor['storge']->detalhes(),
            ]
        ]);
    }

    public function expressar()
    {
        $tipo = $_GET['tipo'] ?? 'philia';
        $amor = AmorFactory::create($tipo);

        header('Content-Type: application/json');
        echo json_encode($amor->detalhes());
    }
}

