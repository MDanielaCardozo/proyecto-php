<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// $correo = "
// Consulta .
// Nombre: $nombre " . "\r\n".
// "Apellido: $apellido". "\r\n".
// "Email: $email" . "\r\n".
// "Mensaje:" .$mensaje;

// // mail("mdanielacardozo@gmail.com", "Mensaje desde PHP", $correo);

$server = "sql112.infinityfree.com";
$user = "if0_37301024";
$password = "Eg3mti0WcA";
$db_name = "if0_37301024_cardozo_daniela";

$conexion = mysqli_connect( $server, $user, $password, $db_name) or exit ("No se
pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre', 
'$apellido', '$email', '$mensaje')");

mysqli_close($conexion);

header("Location: contacto.php?ok");