<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Institución Educativa</title>
</head>
<body>

    <h1>Página Principal</h1>

    <nav>
        <a href="index.php?seccion=Inicio">Inicio</a> |
        <a href="index.php?seccion=Unidades">Unidades</a> |
        <a href="index.php?seccion=Contacto">Contacto</a>
    </nav>

    <hr>

    <?php
    if (isset($_GET['seccion'])) {
        $seccion = $_GET['seccion'];
        echo "<h2>Sección seleccionada:</h2>";
        echo "<p>Has seleccionado la sección <strong>$seccion</strong></p>";
    } else {
        echo "<p>Bienvenido a la página principal.</p>";
    }
    ?>

    <hr>

    <a href="contacto.php">Ir al formulario de contacto</a>

</body>
</html>
