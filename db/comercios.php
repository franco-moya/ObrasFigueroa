<?php
// Consultas de los comercios
include_once("conexion.php");
class Comercios {
    
    //Consulta para listar los comercios dentro de la base de datos
    static public function ListarComercios(){
        $connect = Conexion::conectar();
        $sql = "SELECT * FROM proveedor";
        $resultado = $connect->query($sql);
        $arreglo = [];
        $i = 0;

        while($fila = $resultado->fetch_assoc()) {
            $arreglo[$i] = $fila;
            $i++;
        }
        return json_encode($arreglo);

    }
    //Consulta para guardar los comercios 
    static public function GuardarComercios($nombreProveedor,$direccionProveedor){
        $connect = Conexion::conectar();
        $sql = "INSERT INTO proveedor() VALUES (null,'$nombreProveedor','$direccionProveedor')";

        $exe = $connect->query($sql);

        if($exe){
            $respuesta = "ok";

        }else{
            $respuesta ="Error";
        }
        return $respuesta;
    }
    static public function EliminarProveedor($idProveedor){
        $connect=conexion::conectar();
        $sql= "DELETE FROM proveedor WHERE ID_Proveedor = $idProveedor";
        $respuesta=$connect->query($sql);
        if($respuesta){
            $respuesta= "eliminarProveedor";
        }else{
            $respuesta="erroreliminar";
        }
        return $respuesta;
    }

}