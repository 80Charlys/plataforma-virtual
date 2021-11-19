<?php
$servername = "localhost";
$database = "saber_conectar";
$username = "root";
$password = "";
// Conexion a la base
$conn = mysqli_connect($servername, $username, $password, $database);
// Comprobar conexion
if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}
echo "Conexion con base de datos exitosa!";
?>

include("conexion.php");