<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fundamento</title>

    <?php
    if (!function_exists('vite')) {
        require_once __DIR__ . '/../../Core/Helpers.php';
    }
    echo vite('resources/js/app.js');
    ?>
</head>
<body>
    <div id="app"></div>

    <?php /* Inertia v3: page data vai num <script type="application/json">, não no data-page do div */ ?>
    <script type="application/json" data-page="app"><?= json_encode($page, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
</body>
</html>
