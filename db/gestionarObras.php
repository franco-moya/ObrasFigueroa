<?php
//Case de las Obras 
include_once("obras.php");
$operacion = $_POST["tipoOperacion"];
switch ($operacion) {
    case 'listarObras':
        $res = Obras::listarObras();
        echo $res;
        break;
        
    case 'GuardarObras':
        $nombreObra = $_POST["nombre"];
        $direccionObra = $_POST["direccion"];
        $estadoObra = 1;
        $fechaObra = $_POST["fechaObra"];
        $fechaTermino=$_POST["fechaTermino"];
        $estadoPresupuesto = $_POST["estadoPresupuesto"];
        $estadoPago = $_POST["estadoPago"];
        $descripcion = $_POST["descripcion"];
        

        $res = Obras::GuardarObras($nombreObra,$direccionObra,$estadoObra,$fechaObra,$estadoPresupuesto,$estadoPago, $fechaTermino, $descripcion);
        echo $res;
        break;
    case 'EliminarObra':
        $idObra = $_POST["idObra"];
        $respuesta = Obras::EliminarObra($idObra);
        echo 'eliminarObra';
        break;
    case 'ActualziarEstado':
        $idObra = $_POST["idObra"];
        $respuesta = Obras::ActualizarEstado($idObra);
        echo 'actualizarEstado';
        break;
}