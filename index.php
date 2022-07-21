<?php include("seguridad.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/7ff0a0897d.js"></script>
    <title>Obras</title>
    <style>
        
        h2{
            font-weight:bold;
        }
        .rojo{
            background-color: rgb(255,215,130) ;
        }
        .verde{
            background-color: rgb(100,215,170);
        }
        .sombra{
            box-shadow: 0px 1px 10px rgb(0, 0, 0);
            }
    </style>
</head> 
<body> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark sombra">+
        <div class="container-fluid"> 
            <a class="navbar-brand" href="">Constructora Figueroa</a>  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">    
                    <li class="nav-item">
                        
                        <a class="nav-link active bg-light text-dark rounded" href="index.php">Obras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ventanaComercios.php">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn text-light" data-bs-toggle="modal" data-bs-target="#modalComprador">
                             Compradores
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn text-light" data-bs-toggle="modal" data-bs-target="#modalObras">
                            Agregar Obras
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn text-light" data-bs-toggle="modal" data-bs-target="#modalReportes">
                            Crear reporte
                        </button>
                    </li>
                    
                </ul>
                <ul class="navbar-nav"> 
                    <li class="nav-item">
                        <a class="nav-link link-danger" href="cerrarSesion.php">Cerrar sesion</a>
                    </li>
                </ul>

            </div>
        </div> 
    </nav>
   
    <div class="col-8 offset-md-2 p-4">
        <h2>Obras</h2>    
        <div class="row" id="Contenedor_obras">

        </div>              
    </div>

    <?php include ("modalObras.php");?>
    <?php include ("modalFacturas.php");?>
    <?php include ("modalComercios.php");?>
    <?php include ("modalCompradores.php");?>
    <?php include ("modalReportes.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/gestionarObras.js?v=<?php echo rand()?>"></script>
    <script src="js/gestionarFacturas.js?v=<?php echo rand()?>"></script>
    
    
    
</body>
</html>