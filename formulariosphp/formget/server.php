<?php

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$telefono= $_GET["telefono"];
$direccion = $_GET["direccion"];
$email = $_GET["email"];
$usuario = $_GET["usuario"];
$password = $_GET["password"];

echo "Los datos enviados son: nombre: $nombre, apellido: $apellido, dirección: $direccion, teléfono: $telefono, correo: $email, usuario: $usuario y password: $password.";