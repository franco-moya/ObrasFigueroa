<!-- Aqui va el modal para agregar Obras -->

<div class="modal fade" id="modalObras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light" id="exampleModalLabel">Nueva Obra</h5>
                
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
                <form id="formularioObra">
                    <div class="mt-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mt-3">
                        <label for="nombre" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-6">
                            <label class="form-label" for="fechaObra">Fecha Obra</label>
                            <input type="date" class="form-control" id="fechaObra" required name="fechaObra">
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="fechaTermino">Fecha termino</label>
                            <input type="date" class="form-control" id="fechaTermino" required name="fechaTermino">
                        </div>
                   </div>

                   <div class="mt-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="5" class="form-control" required></textarea>
                    </div>
                    
                    

                   
                   
                   <div class="mt-3">
                        <!-- <label class="form-label" for="Estado">Estado</label>
                        
                        <select  class="form-control" name="estadoObra" id="estadoObra">

                            <option selected>Seleccione</option>
                            <option value="1">Pendiente</option>
                            <option value="0">Finalizada </option>
                            

                        </select> -->

                        <div class="mt-3">
                        <label class="form-label" for="Presupuesto">Presupuesto</label>
                            <select  class="form-control" name="estadoPresupuesto" id="estadoPresupuesto">
                                <option selected>Seleccione</option>
                                <option value="1">Presupuestada</option>
                                <option value="0">Sin presupuesto</option>
                            </select> 
                        </div>

                        <div class="mt-3">
                            <label class="form-label" for="Pago">Pago</label>
                            <select  class="form-control" name="estadoPago" id="estadoPago">
                                <option selected>Seleccione</option>
                                <option value="1">Pagada</option>
                                <option value="0">Por pagar</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="mt-3">
                        <button data-bs-dismiss="modal" type="submit" class="btn btn-dark col-12">Agregar</button>

                    </div>

                    
                </form>
            </div>
      
        </div>
  </div>
</div>