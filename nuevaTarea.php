<!DOCTYPE html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];

    $host = "localhost";
    $basededatos = "prueba";
    $usuario = "root";
    $password = "";

    $conexion = new mysqli($host, $usuario, $password, $basededatos);

    if ($conexion->connect_error) {
        die("Todo se fue al carajo");
    } else {
        echo "ta bien";
    }
    $sql = "INSERT INTO prueba (nombre) VALUES (?)";
    $queryFormateada = $conexion->prepare($sql);
    $queryFormateada->bind_param("s",$nombre);

    $todobien = $queryFormateada->execute();

    if ($todobien) {
        //al index
    } else {
        // ya fue
    }
}

?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>Creacion de tarea</header>
    <main>
        <form action="?" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <div class="operaciones">
                <input type="submit" value="Guardar">
            </div>
        </form>
    </main>
</body>

</html>