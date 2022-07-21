<!-- Modal -->
<div class="modal fade" id="modalReportes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 1900">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-dark sombra">
                <h5 class="modal-title text-light" id="modalReportes">Reportes</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">



                    <form class="col-6 border p-3 border-dark rounded mb-2" id="formularioReportes">
                        <div class="mb-2 mt-3">
                            <h4>SELECCIONE</h4>
                            <div class="mt-3">
                                <label for="Obras" class="form-label mt-3">Obras</label>
                                <select class="form-control" name="Obras" id="select-Obras" required onclick="ListarDatosObra(),ListarDatosFacturas(),ListarDatosCompradores()">
                                    <!-- Se cargan las obras -->
                                </select>

                                <!-- <div class="mt-3 d-grid">
                                    <button id="BotonGenerar" class="btn btn-dark mt-2" onclick="ListarDatosObra()">
                                        Generar reporte
                                    </button> -->

                                </div>
                                <div class="mt-3 d-grid">

                                    <button id="BotonLimpiar" class="btn btn-dark mt-2" onclick="LimpiarDatosReporte()">
                                        Limpiar reporte
                                        <i class="fas fa-broom"></i>
                                    </button>

                                </div>
                            </div>

                        </div>
                    </form>
                    <form class="col-6 border p-3 border-dark rounded mb-2" id="formularioTablasReportes">
                        <div class="mb-2 mt-3">
                            <h4>INFORMACIÓN DE LA OBRA</h4>
                            <table class="table" id="TablaObras">
                                <thead>
                                    <tr>
                                        <th scope="col">Obra</th>
                                        <th scope="col">Total Facturas</th>
                                        <th scope="col">Monto total + IVA</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Seleccione Obra</td>
                                        <td>$0</td>
                                        <td>$0</td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>




                        <div class="mb-2 mt-4">
                            <h4>INFORMACIÓN DE LAS FACTURAS</h4>
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th scope="col">N°Factura</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Proveedor</th>
                                        <th scope="col">Comprador</th>
                                        <th scope="col">Monto</th>
                                        <th scope="col">Monto IVA</th>
                                        <th scope="col">Monto Total</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaFacturas">
                                    <tr>
                                        <td>00000</td>
                                        <td>00/00/0000</td>
                                        <td>N/N</td>
                                        <td>N/N</td>
                                        <td>$0</td>
                                        <td>$0</td>
                                        <td>$0</td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>



                        <div class="mb-2 mt-4">
                            <h4>INFORMACIÓN DE LOS PROVEEDORES</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Proveedor</th>
                                        <th scope="col">Facturas Asociadas</th>
                                        <th scope="col">Gastos</th>
                                        <th scope="col">RUT</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaProveedores">
                                    <tr>
                                        <td>N/N</td>
                                        <td>0</td>
                                        <td>$0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>



                        <div class="mb-2 mt-4">
                            <h4>INFORMACIÓN DE LOS COMPRADORES</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Comprador</th>
                                        <th scope="col">Facturas Asociadas</th>

                                    </tr>
                                </thead>
                                 <tbody id="TablaCompradoresReportes"><!----------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                    <tr>
                                        <td>Seleccione Obra</td>
                                        <td>0</td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
</div>