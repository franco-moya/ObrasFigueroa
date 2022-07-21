<?php
// Case de los comercios
include_once("comercios.php");
$operacion = $_POST["tipoOperacion"];
switch ($operacion) {
    case 'ListarComercios':
        $res = Comercios::ListarComercios();
        echo $res;
        break;
    case 'GuardarComercios':
        $nombreProveedor = $_POST["nombreProveedor"];
        $direccionProveedor = $_POST["direccionProveedor"];

        $res = Comercios::GuardarComercios($nombreProveedor,$direccionProveedor);
        echo $res;
        break;
    case 'EliminarProveedor':
        $idProveedor = $_POST["idProveedor"];
        $respuesta = Comercios::EliminarProveedor($idProveedor);
        echo 'eliminarProveedor';
        break;
}