<?php
$conn = include "conexion.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];

$state = $conn->prepare("UPDATE usuarios SET
nombre = ?,
correo = ?
WHERE id = ?");
$state->bind_param("ssi", $nombre, $correo, $id);
$state->execute();
header("location: lista.php");
