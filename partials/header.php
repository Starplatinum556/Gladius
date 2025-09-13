<?php require_once __DIR__ . '/../config/config.php'; ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- SEO dinámico -->
  <title><?= e($SEO['title']); ?></title>
  <meta name="description" content="<?= e($SEO['description']); ?>">
  <meta property="og:title" content="<?= e($SEO['title']); ?>">
  <meta property="og:description" content="<?= e($SEO['description']); ?>">
  <meta property="og:image" content="<?= e($SEO['image']); ?>">

  <!-- Favicon -->
  <link rel="icon" href="<?= BASE_URL ?>assets/img/logo.png">

  <!-- Fuentes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- Estilos principales -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css?v=1.0.4">
</head>
<body>
  <!-- Cursor falso (primer hijo del body) -->
  <div id="custom-cursor" aria-hidden="true"></div>

  <!-- Header de navegación -->
  <header class="gc-nav">
    <div class="gc-container">
      <a class="brand" href="<?= BASE_URL ?>">
        <img src="<?= BASE_URL ?>assets/img/logo.png" alt="Gladius Coliseum">
        <span>Gladius Coliseum</span>
      </a>

      <nav>
        <a href="#torneos">Torneos</a>
        <a href="#reglas">Reglas</a>
        <a href="#premios">Premios</a>
        <a class="btn btn-primary" href="#inscribirse">Inscribirme</a>
      </nav>

      <!-- Botón para menú móvil -->
      <button class="nav-toggle" aria-label="Abrir menú"></button>
    </div>
  </header>
