<!-- Aqui va el modal para agregar Compradores -->

<div class="modal fade" id="modalComprador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light" id="exampleModalLabel">Nuevo Comprador</h5>

                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
                <div class="container">

                    <div class="row">
                        <clas class="col-4">
                            <form id="formularioComprador" class="p-3 border border-dark rounded">
                                <div class="mt-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombreComprador" name="nombreComprador" required>
                                </div>
                                <div class="mt-3">
                                    <button data-bs-dismiss="modal" type="submit" class="btn btn-dark col-12">Agregar</button>

                                </div>
                            </form>

                        </clas>

                        <div class="col-7 border border-dark rounded">
                            <div id="contenedorCompradores" class="row">
                                <table class="table" id="TablaCompradores">
                                    
                                </table>

                            </div>

                        </div>


                    </div>




                </div>


            </div>


        </div>

    </div>
</div>
</div>