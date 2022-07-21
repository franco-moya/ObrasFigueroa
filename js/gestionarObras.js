//Funciones de las Obras 

let cargarObras = document.getElementById("Contenedor_obras")
let ruta = 'db/gestionarObras.php'

//Rescatando id de la Modal para agregar Obras 
let formularioObras = document.getElementById("formularioObra")
formularioObras.addEventListener("submit",GuardarObras)

ListarObras()



//Funcion para agregar nuevas obras 
function GuardarObras(e){

    e.preventDefault()

    let datos = new FormData(formularioObras)
    datos.append("tipoOperacion","GuardarObras")

    fetch(ruta, {
        method: "POST",
        body: datos
    })
    .then( respuesta => respuesta.text() ) 
    .then( contenido => {
        if (contenido == "ok") {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Obra Ingresada',
                showConfirmButton: false,
                timer: 1500
              })
              ListarObras()
              formularioObras.reset()
              
    
        }else if (contenido == "Error"){
          
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Error al ingresar Obra',
                showConfirmButton: false,
                timer: 1500
              })

        }
    })

}

//Funcion para Listar Obras
function ListarObras() {
    i=``
    cargarObras.innerHTML = ``
    let datos = new FormData()
    datos.append("tipoOperacion","listarObras")
    fetch(ruta, {
        method: "POST",
        body: datos
    })
    .then( response => response.json())
    .then( data =>{
        data.forEach(obra =>{
            id_Obra = (obra["ID_Obra"])
            //"switch" para definir estados de variables
            let estado = (obra["Estado_Obra"] ==1)?"Pendiente":"Terminada"
            let presupuesto = (obra["Estado_Presupuesto"] ==1)?"Presupuestado":"Sin presupuesto"
            let pago = (obra["Estado_Pago"] ==1)?"Pagada":"Por pagar"
            //"switch" para definir estados de variables

            //Variables para el cambio de color de badges en las tarjetas
            let color_presupuesto = ""
            if (obra["Estado_Presupuesto"] == 1) {
                 color_presupuesto = "text-dark verde"
            } else {
                color_presupuesto = "text-dark rojo"
            }
            let color_pago = ""
            if (obra["Estado_Pago"] == 1) {
                color_pago = "text-dark verde"
            } else {
                color_pago = "text-dark rojo"
            }
            //Variables para el cambio de color de badges en las tarjetas
            
            //Tarjeta para listar obras
            cargarObras.innerHTML += `
            
            <div class="card m-2 border-dark" style="width: 30%;">
                <div class="card-body">
                    <h5 class="card-title">${obra["Nombre_Obra"]}</h5>
                    <p class="card-text">${obra["Direccion"]}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Inicio: ${formato_fecha(obra["Fecha_Inicio"])}</li>
                    <li class="list-group-item">Termino: ${formato_fecha(obra["Fecha_Termino"])}</li>
                    <div id="ContenedorGastos">

                    <div>
                    <div class="container mt-2">
                        <div class="row d-flex justify-content-center">
                            <span class="badge ${color_presupuesto} col-6">${presupuesto}</span>
                            <span class="badge ${color_pago} col-6">${pago}</span>
                        </div>
                    </div>
                    <div class="container mt-2">
                        <div class="row d-flex justify-content-center">
                            <button type="submit" class="btn btn-sm verde boton mb-2" onclick="ActualziarEstado(${obra["ID_Obra"]})"><b>${estado}</b> <i class="fas fa-check-square"></i>
                            </button>
                        </div>
                    </div>
                </ul>
                    <div class="row mb-2">
                        <div class="col-12 px-3">
                            <button type="submit" class="btn btn-dark col-12 my-2 btn-sm" onclick="ListarFacturas(${obra["ID_Obra"]})" data-bs-toggle="modal" data-bs-target="#modalFactura ">
                            Agregar Facturas
                            </button>
                        </div>
                        <div class="col-12 px-3">
                            <button type="submit" class="btn btn-dark col-12 btn-sm" onclick="EliminarObra(${obra["ID_Obra"]})">
                            Eliminar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            `
            //Tarjeta para listar obras
            return obra["ID_Obra"]
        })


    })

}

//Funcion para cambiar el formato de fecha de AMD (Año Mes Dia) a DMA (Dia Mes Año)
function formato_fecha(fecha) {
    let DMA = "" //DMA= Dia Mes Año

    let fecha_actual = new Date(fecha)

    let dia = fecha_actual.getDate()+1
    let mes = fecha_actual.getMonth()+1
    let año = fecha_actual.getUTCFullYear()

    DMA = dia + "/" +mes+ "/" + año

    return DMA
}
//Funcion para cambiar el formato de fecha de AMD (Año Mes Dia) a DMA (Dia Mes Año)

//Funcion para eliminar Obras
function EliminarObra(id){
    
    Swal.fire({
        title: '¿Esta seguro de que desea eliminar esta obra?',
        text: "Los cambios son IRREVERSIBLES",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Borralo',
        cancelButtonText: 'No, mejor no'
    }).then((result) => {
        if (result.isConfirmed) {

            let datos = new FormData()
            datos.append("tipoOperacion", "EliminarObra")
            datos.append("idObra", id)

            fetch(ruta, {
                method: "POST",
                body: datos
            })
            .then(respuesta => respuesta.text() )
            .then(contenido => {
                if(contenido=="eliminarObra"){
                    Swal.fire({
                        icon: 'success',
                        title: 'Obra eliminada',
                        text: 'Obra eliminada con exito',
                    })
                    ListarObras()
                }else{
                    Swal.fire({
                        icon: 'ERROR',
                        title: 'Error',
                        text: 'Algo salio mal ',
                    })
                }
            })
        }   
    })
}
//Funcion para eliminar Obras

function ActualziarEstado(id){
    
    Swal.fire({
        title: '¿Esta seguro de que desea Marcar esta obra como FINALIZADA?',
        text: "Una vez marcada esta opcion la obra no se volvera a mostrar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Marcala',
        cancelButtonText: 'No, mejor no'
    }).then((result) => {
        if (result.isConfirmed) {

            let datos = new FormData()
            datos.append("tipoOperacion", "ActualziarEstado")
            datos.append("idObra", id)

            fetch(ruta, {
                method: "POST",
                body: datos
            })
            .then(respuesta => respuesta.text() )
            .then(contenido => {
                if(contenido=="actualizarEstado"){
                    Swal.fire({
                        icon: 'success',
                        title: 'Obra marcada',
                        text: 'Se han guardado los cambios',
                    })
                    ListarObras()
                }else{
                    Swal.fire({
                        icon: 'ERROR',
                        title: 'Error',
                        text: 'Algo salio mal ',
                    })
                }
            })
        }   
    })
}