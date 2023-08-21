<?php
if (!isset($_GET["id"])) {
    exit("No hay id");
}
$conn = include_once "conexion.php";
$id = $_GET["id"];
$state = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
$state->bind_param("i", $id);
$state->execute();
header("location: lista.php");
?>