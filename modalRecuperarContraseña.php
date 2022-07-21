<!--Aqui va la modal para recuperar la contraseña 
-->
<div class="modal fade" id="modalRecuperar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light" id="exampleModalLabel">Recuperar Contraseña</h5>
                
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
                <form id="formularioContraseña">
                <div class="mt-3">
                        <label for="nombre" class="form-label">Ingrese su RUT </label>
                        <input type="text" class="form-control" id="rut" name="rut" required>
                    </div>
                    <div class="mt-3">
                        <label for="nombre" class="form-label">Ingrese su correo electronico</label>
                        <input type="text" class="form-control" id="correo" name="correo" required>
                    </div>
                   
                   
                   
                    <div class="mt-3">
                        <button data-bs-dismiss="modal" type="submit" class="btn btn-dark col-12 sombra">Recuperar</button>

                    </div>

                    
                </form>
            </div>
      
        </div>
  </div>
</div>