<?php
const SERVIDOR = "localhost";
const USUARIO  = "root";
const PASSWORD = "";
const BD       = "bd_constructora";

class Conexion {

    static public function conectar() {
        $link = new mysqli(SERVIDOR,USUARIO,PASSWORD,BD);
        $link->set_charset("utf8");
        return $link;
    }

}