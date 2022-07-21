<?php
//Aqui van las consultas de las Obras 
include_once("conexion.php");
class Obras {
    static public function listarObras(){
        $connect = Conexion::conectar();
        $sql = "SELECT * from obras WHERE obras.Estado_Obra = 1 ";
        $resultado = $connect->query($sql);
        $arreglo = [];
        $i = 0;
        while($fila = $resultado->fetch_assoc()) {
            $arreglo[$i] = $fila;
            $i++;
        }
        return json_encode($arreglo);

    }
    //Consulta para guardar las Obras en la base de datos 
    
    static public function GuardarObras($nombreObra,$direccionObra,$estadoObra,$fechaObra,$estadoPresupuesto,$estadoPago,$fechaTermino,$descripcion){

        $connect = Conexion::conectar();

        $sql = "INSERT INTO obras() VALUES (NULL, '$nombreObra','$direccionObra','$estadoObra','$estadoPresupuesto','$fechaObra','$fechaTermino','$estadoPago','$descripcion')";
        $exe = $connect->query($sql);
        if($exe){
            $respuesta = "ok";
        }else{
            $respuesta ="Error";
        }
        return $respuesta;

        
    }
    static public function EliminarObra($idObra){
        $connect=conexion::conectar();
        $sql= "DELETE FROM obras WHERE ID_Obra = $idObra";
        $respuesta=$connect->query($sql);
        if($respuesta){
            $respuesta= "eliminarObra";
        }else{
            $respuesta="erroreliminar";
        }
        return $respuesta;
    }
    static public function ActualizarEstado($idObra){
        $connect = conexion::conectar();
        $sql = "UPDATE obras set Estado_Obra = 0 where ID_Obra = $idObra;";
        $respuesta=$connect->query($sql);
        return $respuesta;
    }
}