<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información de la Película</title>
</head>
<body>
    <h1>Información de la Película</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $genero = $_POST['genero'];
        $calificacion = $_POST['calificacion'];
        $anio = $_POST['anio'];
        $director = $_POST['director'];

        echo "<p>Nombre:". $nombre;
        echo "<p>Descripción: $descripcion</p>";
        echo "<p>Género: $genero</p>";
        echo "<p>Calificación: $calificacion</p>";
        echo "<p>Año: $anio</p>";
        echo "<p>Director: $director</p>";
    } else {
        echo "<p>No se ha enviado ningún formulario.</p>";
    }
    ?>
</body>
</html>