

<!-- Modal -->
<div class="modal fade" id="modalFacturaComercios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-dark sombra">
                <h5 class="modal-title text-light" id="modalFacturas">Facturas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="row col-12 mb-2 align-items-center">
                            <div id="contenedorResumen" class="col-6" >
                            </div>
                            <div class="col-6">
                                <div class="card p-3 border border-dark rounded">                           
                                    <h5>Filtro</h5>
                                    <div class="mb-2">
                                        <label class="col-3">Fecha: </label>
                                        <input type="date">
                                        -
                                        <input type="date">
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-3">N° de factura:</label>
                                        <input type="text">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-dark col-12">Buscar</button>
                                    </div>                          
                                </div>
                            </div>
                        </div>
                        <div class="row col-12 px-4">
                            <div class="border border-dark rounded align-items-center">
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
</div>