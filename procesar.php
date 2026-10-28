<?php
// config.php integrado aquí para simplificar, pero puedes separarlo si lo deseas
$metodo_permitido = 'POST';

if ($_SERVER['REQUEST_METHOD'] !== $metodo_permitido) {
    http_response_code(405);
    header('Allow: POST');
    die("<div class='error-box'>Error 405: Método no permitido. Debes usar el formulario.</div>");
}

// Validación y sanitización
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$tecnologia = filter_input(INPUT_POST, 'tecnologia', FILTER_SANITIZE_SPECIAL_CHARS);
$entrada = filter_input(INPUT_POST, 'entrada', FILTER_SANITIZE_SPECIAL_CHARS);

// Verificar que no estén vacíos o inválidos
if (!$nombre || !$email || !$tecnologia || !$entrada) {
    http_response_code(400);
    die("<link rel='stylesheet' href='style.css'><div class='container'><div class='error-box'>Error 400: Datos inválidos o incompletos.</div><a href='index.php' style='color:white;'>Volver al formulario</a></div>");
}

// Escapar salida
$nombre_seguro = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
$email_seguro = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Exitoso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>✅ ¡Registro Exitoso!</h2>
        <div class="result-box">
            <p><strong>Asistente:</strong> <?= $nombre_seguro ?></p>
            <p><strong>Email:</strong> <?= $email_seguro ?></p>
            <p><strong>Entrada:</strong> <?= $entrada ?></p>
            <p><strong>Interés Principal:</strong> <?= $tecnologia ?></p>
        </div>
        <p style="text-align: center; color: var(--text-muted); font-size: 0.9rem;">
            <strong>Método HTTP:</strong> <?= $_SERVER['REQUEST_METHOD'] ?> | 
            <strong>Status:</strong> 200 OK
        </p>
        <button onclick="window.location.href='index.php'">Registrar otro asistente</button>
    </div>
</body>
</html>