<?php
// Recoger datos
$nombre = $_REQUEST['nombre'];
$email = $_REQUEST['email'];
$telefono = $_REQUEST['telefono'];
$fecha = $_REQUEST['fecha'];
$mensaje = $_REQUEST['mensaje'];

// Validación
$error = false;

if (empty($nombre) || empty($email)) {
    $error = true;
}

// Seguridad básica
$nombre = htmlspecialchars($nombre);
$email = htmlspecialchars($email);
$telefono = htmlspecialchars($telefono);
$fecha = htmlspecialchars($fecha);
$mensaje = htmlspecialchars($mensaje);
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado - Azur Peluquería</title>

    <link rel="icon" href="img/logo.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/design.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="img/logo.png" height="40" class="me-2" alt="Logo">
            Azur Peluquería
        </a>
    </div>
</nav>

<main class="container text-center" style="margin-top: 6rem; max-width: 700px;">

<section class="mensaje-resultado">

<?php if ($error) { ?>

    <h1>Error en la solicitud</h1>

    <p class="lead">
        Debes rellenar al menos el nombre y el correo electrónico.
    </p>

<?php } else { ?>

    <h1>Solicitud enviada correctamente</h1>

    <p class="lead">
        Gracias <strong><?php echo $nombre; ?></strong>, hemos recibido tu solicitud.
    </p>

    <div class="mt-4 text-start">
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>
        <p><strong>Fecha:</strong> <?php echo $fecha; ?></p>
        <p><strong>Mensaje:</strong> <?php echo $mensaje; ?></p>
    </div>

<?php } ?>

<!-- Botones -->
<div class="mt-4 d-flex justify-content-center flex-wrap gap-2">

    <a href="index.html" class="btn btn-primary btn-lg">
        Volver al inicio
    </a>

    <a href="formulario.html" class="btn btn-secondary btn-lg">
        Enviar otra solicitud
    </a>

</div>

</section>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>