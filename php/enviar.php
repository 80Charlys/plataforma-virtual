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

if (isset($_POST["Enviar"])) {
    if (strlen($_POST["usuario"]) >= 1 
    && strlen($_POST["nombre"]) >= 1 
    && strlen($_POST["apellido"]) >= 1
    && strlen($_POST["password"]) >= 1
    && strlen($_POST["correo"]) >= 1
    && strlen($_POST["telefono"]) >= 1) {
	    $usuario = trim($_POST["usuario"]);
	    $nombre = trim($_POST["nombre"]);
	    $apellido = trim($_POST["apellido"]);
	    $password = trim($_POST["password"]);
        $correo = trim($_POST["correo"]);
	    $telefono = trim($_POST["telefono"]);
	    $consulta = "INSERT INTO `usuarios`(`usuario`, `nombre`, `apellido`, `password`, `correo`, `telefono`) VALUES ( '$usuario', '$nombre', '$apellido', '$password', '$correo', '$telefono')";
	    $resultado = mysqli_query($conn,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3>¡Te has inscripto correctamente!<br><a href= 'https://saberconectar.ddns.net/index.html'>INICIO</a></h3>
           <?php
	    } else {
	    	?> 
	    	<h3>¡Ups ha ocurrido un error!<br><a href= 'https://saberconectar.ddns.net/index.html'>INICIO</a></h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3>¡Por favor complete los campos!<br><a href= 'https://saberconectar.ddns.net/index.html'>INICIO</a></h3>
           <?php
    }
}

?>