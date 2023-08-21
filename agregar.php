<?php
$conn = include('conexion.php');
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$state = $conn->prepare("insert into usuarios(nombre,correo)
values(?,?)");
$state->bind_param("ss", $nombre, $correo);
$state->execute();
header("location: lista.php");
?>
