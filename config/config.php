<?php
// =======================================
// CONFIGURACIÓN GLOBAL - GLADIUS COLISEUM
// =======================================

// Nombre de la app
define('APP_NAME', 'Gladius Coliseum');

// Detectar entorno según el host
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
if (strpos($host, 'localhost') !== false || $host === '127.0.0.1') {
    // 🔹 Entorno local (XAMPP)
    define('ENVIRONMENT', 'local');
    define('BASE_URL', '/gladius-coliseum/'); 
} else {
    // 🔹 Producción (ej. dominio real)
    define('ENVIRONMENT', 'production');
    define('BASE_URL', 'https://' . $host . '/'); 
}

// Activar modo debug solo en local
define('APP_DEBUG', ENVIRONMENT === 'local');

// ===========================
// FUNCIONES DE UTILIDAD
// ===========================

// Escapar salida segura en HTML
function e($str) {
    return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8');
}

// Logs simples en debug
function dd($var) {
    if (APP_DEBUG) {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        die();
    }
}

// ===========================
// META SEO POR DEFECTO
// ===========================
$SEO = [
    'title'       => APP_NAME . ' | Torneos épicos 1v1',
    'description' => 'Arena de torneos estilo gladiador. Entra al coliseo, gana y honra tu nombre.',
    'image'       => BASE_URL . 'assets/img/logo.png'
];
