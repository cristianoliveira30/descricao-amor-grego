<?php

/**
 * Gera as tags <script> / <link> do Vite.
 *  - Em desenvolvimento (Vite dev server rodando): aponta para localhost:5173
 *  - Em produção: lê o manifest gerado por `npm run build`
 */
function vite(string $entry = 'resources/js/app.js'): string
{
    $isDev = (getenv('APP_ENV') ?: 'development') === 'development';

    if ($isDev) {
        return implode("\n", [
            '<script type="module" src="http://localhost:5173/@vite/client"></script>',
            '<script type="module" src="http://localhost:5173/' . $entry . '"></script>',
        ]);
    }

    // Produção: lê o manifest
    $manifestPath = __DIR__ . '/../../../public/build/.vite/manifest.json';
    if (!file_exists($manifestPath)) {
        // Fallback para manifest sem subpasta .vite (Vite < 5)
        $manifestPath = __DIR__ . '/../../../public/build/manifest.json';
    }

    if (!file_exists($manifestPath)) {
        return '<!-- Vite manifest não encontrado. Execute: npm run build -->';
    }

    $manifest = json_decode(file_get_contents($manifestPath), true);
    $chunk    = $manifest[$entry] ?? null;

    if (!$chunk) {
        return '<!-- Entrada não encontrada no manifest do Vite -->';
    }

    $tags = [];

    // CSS gerado
    foreach ($chunk['css'] ?? [] as $css) {
        $tags[] = '<link rel="stylesheet" href="/build/' . $css . '">';
    }

    // JS principal
    $tags[] = '<script type="module" src="/build/' . $chunk['file'] . '"></script>';

    return implode("\n    ", $tags);
}
