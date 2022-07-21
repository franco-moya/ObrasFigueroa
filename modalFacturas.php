<!-- Modal -->
<div class="modal fade" id="modalFactura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 1600">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-dark sombra">
                <h5 class="modal-title text-light" id="modalFacturas">Facturas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="container">

                    <div class="row">

                        <div id="contenedorResumen" class="col-6 mb-2">


                        </div>

                        <form class="col-5 border p-3 border-dark rounded mb-2" id="ordenar">

                            <div class="mb-2 mt-3">
                                <label class="col-3">Fecha: </label>
                                <input id="fecha1" name="fecha1" type="date">
                                -
                                <input id="fecha2" name="fecha2" type="date">
                            </div>
                            <div class="mb-2 ">
                                <label class="col-3 mb">N° de factura:</label>
                                <input id="ordenarNumero" name="ordenarNumero" type="text">

                            </div>

                            <div>
                                <button type="submit" class="btn btn-dark col-12 mb-2">Buscar</button>
                            </div>


                        </form>
                    </div>
                    <div class="row">
                        <div class="col-4">

                            <form id="formularioFacturas" class="p-3 border border-dark rounded">
                                <h1>Facturas</h1>
                                <div class="mt-3">
                                    <label for="NumeroFactura" class="form-label">Numero Factura</label>
                                    <input type="number" class="form-control" id="numeroFactura" name="numeroFactura" required>
                                </div>
                                <div class="mt-3">
                                    <label for="FechaFactura" class="form-label">Fecha Factura</label>
                                    <input type="date" class="form-control" id="fechaFactura" name="fechaFactura" required>
                                </div>

                                <!-- <div class="mt-3">
                        <label for="obra" class="form-label mt-3">Obra destinada</label>
                        <select class="form-control" name="obra" id="select-obra" require>
                            
                        </select>
                    </div> -->

                                <div class="mt-3">
                                    <label for="proveedor" class="form-label mt-3">Proveedor</label>
                                    <select class="form-control" name="proveedor" id="select-proveedor" require>
                                        <!-- Se cargan los proveedores -->
                                    </select>
                                </div>

                                <div class="mt-3">
                                    <label for="comprador" class="form-label mt-3">Comprador</label>
                                    <select class="form-control" name="comprador" id="select-comprador" require>
                                        <!-- Se cargan los compradores -->
                                    </select>
                                </div>

                                <!-- <div class="mt-3">
                        <label class="form-label" for="Estado">Estado</label>
                        
                        <select  class="form-control" name="estadoFactura" id="estadoFactura">

                            <option selected>Seleccione</option>
                            <option value="1">Pendiente</option>
                            <option value="0">Finalizada </option>
                            
                        </select>
                        
                    </div> -->
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <label for="Monto" class="form-label">Monto</label>
                                        <input type="number" class="form-control" id="montoFactura" name="montoFactura" required oninput="CalcularIVA() , calcularTotal()">
                                    </div>
                                    <div class="col-6" id="contenedorIVA">
                                        <label for="IVA" class="form-label">IVA</label>
                                        <input type="number" class="form-control" id="montoIVA" name="" step="0.001" disabled="">

                                    </div>
                                    <div class="col-12" id="contenedorTotal">
                                        <label for="Total" class="form-label">Monto Total</label>
                                        <input type="number" class="form-control" id="montoTotal" name="" step="0.001" disabled="">

                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="imagen" class="form-label">Imagen</label>
                                    <input type="file" class="form-control" name="imagenFactura" id="imagenFactura" required>
                                </div>

                                <div class="mt-3 d-grid">
                                    <button type="submit" class="btn btn-dark">Guardar</button>
                                </div>

                            </form>
                        </div>
                        <div class="col-7 border border-dark rounded">
                            <div class="row" id="contenedorFacturas">

                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>
</div>