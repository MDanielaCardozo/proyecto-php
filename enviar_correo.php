<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$correo = "
Consulta .
Nombre: $nombre " . "\r\n".
"Email: $email" . "\r\n".
"Mensaje:" .$mensaje;

mail("mdanielacardozo@gmail.com", "Mensaje desde PHP", $correo);