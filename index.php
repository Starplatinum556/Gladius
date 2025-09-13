<?php
require_once __DIR__ . '/config/config.php';
// Puedes personalizar metas por página si quieres
$SEO['title'] = 'Gladius Coliseum — Home';
$SEO['description'] = 'Torneos 1v1 estilo gladiador. Entra al coliseo y deja tu marca.';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/header.php';
include __DIR__ . '/pages/home.php';
include __DIR__ . '/partials/footer.php';
