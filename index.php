<?php
$host = "localhost";
$basededatos = "prueba";
$usuario = "root";
$password = "";

$conexion = new mysqli($host, $usuario, $password, $basededatos);

if ($conexion->connect_error) {
    die("Todo se fue a la mierda");
} else {
    echo "Fiumba";
}

$sql = "SELECT * from prueba";
$resultado = $conexion->query($sql);

$numeroResultados = $resultado->num_rows;
while ($fila = $resultado->fetch_assoc()) {
    echo $fila["nombre"];
}

$conexion->close();
?>
<a href="nuevaTarea.php">crear tarea</a>
