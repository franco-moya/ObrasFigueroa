<?php
session_start();
//isset(variable)= permite validar si una variable exixte y tiene un valor
if ( empty($_SESSION["autenticado"]) ) {

    echo '<script>
    window.location = "login.php"
</script>';

}



?>