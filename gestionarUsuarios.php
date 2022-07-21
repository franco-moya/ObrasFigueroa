<?php

include_once("usuarios.php");

$accion = $_POST["tipoOperacion"];

switch ($accion) {
case 'IniciarSesion':
    $rut = $_POST["rut"];
    $pass = $_POST["password"];
    $respuesta = Usuarios::IniciarSesion($rut, $pass);
    echo $respuesta;
    break;

    default:

    break;
}