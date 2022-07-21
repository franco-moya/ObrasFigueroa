<!-- Aqui va el modal para agregar Comercios -->

<div class="modal fade" id="modalComercios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light" id="exampleModalLabel">Nuevo Comercio</h5>
                
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
                <form id="formularioComercio">
                    <div class="mt-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombreProveedor" name="nombreProveedor" required>
                    </div>
                    <div class="mt-3">
                        <label for="nombre" class="form-label">Rut</label>
                        <input type="text" class="form-control" id="direccionProveedor" name="direccionProveedor" required>
                    </div>
                     
                   
                    <div class="mt-3">
                        <button data-bs-dismiss="modal" type="submit" class="btn btn-dark col-12">Agregar</button>

                    </div>
                    

                    
                </form>
            </div>
      
        </div>
  </div>
</div>