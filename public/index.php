<?php
session_start();

require_once __DIR__ . '/../app/Core/autoload.php';
require_once __DIR__ . '/../app/Core/EnvLoader.php';
require_once __DIR__ . '/../app/Core/Helpers.php';
require_once __DIR__ . '/../app/Core/Router.php';

// Carrega variáveis do .env
EnvLoader::load(__DIR__ . '/../.env');

$router = new Router();

// Rotas básicas
$router->get('/', 'HomeController@index');
$router->dispatch();


