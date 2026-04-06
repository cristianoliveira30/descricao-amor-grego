<?php

namespace App\Core;

/**
 * Implementação do protocolo Inertia.js para framework PHP customizado.
 * Não depende do Laravel — segue o protocolo oficial:
 * https://inertiajs.com/the-protocol
 */
class Inertia
{
    private static string $rootView  = 'layouts/inertia';
    private static string $version   = '1';
    private static array  $shared    = [];

    // -----------------------------------------------------------------
    // Configuração
    // -----------------------------------------------------------------

    public static function setRootView(string $view): void
    {
        self::$rootView = $view;
    }

    public static function version(string $version): void
    {
        self::$version = $version;
    }

    /** Dados compartilhados que são mesclados em todos os renders (ex: auth, flash) */
    public static function share(string $key, mixed $value): void
    {
        self::$shared[$key] = $value;
    }

    // -----------------------------------------------------------------
    // Renderização
    // -----------------------------------------------------------------

    public static function render(string $component, array $props = []): void
    {
        $page = [
            'component' => $component,
            'props'     => array_merge(self::$shared, $props),
            'url'       => $_SERVER['REQUEST_URI'],
            'version'   => self::$version,
        ];

        // Requisição Inertia (AJAX subsequente) — devolve JSON
        if (!empty($_SERVER['HTTP_X_INERTIA'])) {

            // Verificação de versão → forçar reload completo se desatualizado
            $clientVersion = $_SERVER['HTTP_X_INERTIA_VERSION'] ?? '';
            if ($clientVersion !== '' && $clientVersion !== self::$version) {
                http_response_code(409);
                header('X-Inertia-Location: ' . $_SERVER['REQUEST_URI']);
                exit;
            }

            http_response_code(200);
            header('Content-Type: application/json');
            header('X-Inertia: true');
            header('Vary: X-Inertia');
            echo json_encode($page);
            exit;
        }

        // Requisição inicial — renderiza o layout raiz com o div#app
        extract(['page' => $page]);
        $viewPath = __DIR__ . '/../Views/' . self::$rootView . '.php';
        include $viewPath;
        exit;
    }
}
