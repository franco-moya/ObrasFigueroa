
<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c1a9509d0d.js" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Inicio de Sesión</title>

        <style>

            .login {
            box-shadow: 0px 1px 10px rgb(0, 0, 0); 
            border-radius: 15px;
            }
 
            .sombra{
            box-shadow: 0px 1px 10px rgb(0, 0, 0);
            }
            body{
                background-image: url("https://fondosmil.com/fondo/57246.jpg");
                background-size:cover;
            }
            h2{
                background: rgb(183, 203, 7);
                font-size: 35px;
                box-shadow:0px 1px 10px rgb(0, 0, 0);
                border-radius: 15px;
            }
            form{
                 font-weight: bold;
            }
            label{
                font-size: 20px;
            }
                      
        </style>
  </head> 

<body>
    <div class="container-fluid text-center bg-dark p-3 sombra">
        <span class="navbar-brand mb-0 fs-1 text-light">Constructora Figueroa</span>
    </div>
   <div class="container mt-5 ">

       <div class="row">


           <div class="offset-md-3 col-md-6 p-5 login">
                <h2 class="text-center">Iniciar Sesion</h2>
                <form id="formularioLogin">
                    <div class="mt-3">
                        <label class="form-label" for="rut">Rut:</label>
                        <input type="text" class="form-control" id="rut" name="rut" placeholder="Rut">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                    </div>
                    <div class="mt-3 d-grid">
                        <button type="submit" class="btn btn-dark sombra mb-2">Iniciar Sesion</button>
                    </div>

                    <button type="button" class="btn btn-light col-12 sombra" data-bs-toggle="modal" data-bs-target="#modalRecuperar">
                        ¿Ha olvidado su contraseña? Recuperar contraseña.  
                    </button>

                    
                    
                     
                   
                </form>
           </div>
       </div>
   </div>
    <?php include ("modalRecuperarContraseña.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/gestionarUsuarios.js?v=<?php echo rand(); ?>"></script>  
</body>
</html>