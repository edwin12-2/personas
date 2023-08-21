<?php
$hostname = "localhost";
$usuario = "id21137116_ssss";
$clave = "2456re.Un";
$db = "id21137116_crud";
$conn = mysqli_connect($hostname, $usuario, $clave)or die("no se conectó");
mysqli_select_db($conn,$db)or die("no se conectó");
if ($conn->connect_errno) {
    echo "Falló la conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
return $conn;
