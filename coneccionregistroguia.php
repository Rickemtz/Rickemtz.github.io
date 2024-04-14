<?php
// Establish connection to MySQL
$mysqli = new mysqli("localhost", "root", "", "hackaton");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Prepare data for insertion
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];
$ubicacion = $_GET['from'];
$formacion_academica = $_GET['carrera'];
$capacitacion_habilidades = $_GET['Capacitacion'];

// Insert data into registro_guia table
$sql = "INSERT INTO registro_guia (nombre, correo, telefono, ubicacion, formacion_academica, capacitacion_habilidades) VALUES ('$nombre', '$email', '$telefono', '$ubicacion', '$formacion_academica', '$capacitacion_habilidades')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

// Close connection
$mysqli->close();
?>
