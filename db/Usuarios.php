<?php
include_once("conexion.php");


Class usuarios {

    static public function IniciarSesion($rut, $Password) {

       $connect = Conexion::conectar();
        $pass = md5 ($Password);
        $sql = "SELECT * FROM usuarios WHERE Rut = '$rut' AND Password = '$pass' ";
        $resultado = $connect->query($sql);

        if ( $resultado->num_rows == 1 ) {


        $fila = $resultado->fetch_assoc();

        session_start(); 
        $_SESSION["autenticado"] = true;
        $_SESSION["usuario"] = $fila["nombre_usuario"];

        if($respuesta = "OK"){
        } else {
            $respuesta = "error";
        }



        return $respuesta;
    }
 }
}