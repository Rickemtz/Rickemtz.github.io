<?php

$mysqli = new mysqli("localhost", "root", "", "hackaton");

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];

// Preparar la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO registroCliente (nombre, correo, telefono, destino, fecha_viaje) VALUES ('$nombre', '$email', '$telefono', '$destino', '$fecha')";

// Ejecutar la consulta y verificar si fue exitosa
if ($mysqli->query($sql) === TRUE) {
    echo "Registro exitoso. Gracias por registrarte para el tour.";
} else {
    echo "Error al registrar: " . $mysqli->error;
}

// Cerrar la conexión
$mysqli->close();
?>
