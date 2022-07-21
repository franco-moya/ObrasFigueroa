// Funciones de los comercios }


//Rescatando el contenedor de los comercios
let cargarComercios = document.getElementById("Contenedor_comercios")
let ruta = 'db/gestionarComercios.php'

//Rescatando el la modal con el formulario para agregar comercios
let formularioComercios = document.getElementById("formularioComercio")
formularioComercios.addEventListener("submit",GuardarComercios)

function GuardarComercios(e){
    e.preventDefault()
    

    let datos = new FormData(formularioComercios)
    datos.append("tipoOperacion","GuardarComercios")


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
                title: 'Comercio Ingresada',
                showConfirmButton: false,
                timer: 1500
              })
              ListarComercios()
              formularioComercios.reset()
              
    
        }else if (contenido == "Error"){
          
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Error al ingresar Comercio',
                showConfirmButton: false,
                timer: 1500
              })

        }
    })

}

function ListarComercios(){
    
    cargarComercios.innerHTML = ""
    let datos = new FormData()
    datos.append("tipoOperacion","ListarComercios")
    
    fetch(ruta, {
        method: "POST",
        body: datos
    })
    .then(response => response.json())
    .then(data =>{
        data.forEach(comercio =>{
            cargarComercios.innerHTML += `

            <div class="card m-2 border-dark" style="width: 30%;">
                        <div class="card-body">
                            <h5 class="card-title">${comercio["Nombre_Proveedor"]}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">RUT Proveedor: ${comercio["RUT"]}</li>
                        </ul>
                        <div class = "row mb-2">
                            <div class="col-12 px-3">
                                <button type="submit" class="btn btn-dark col-12 my-2 btn-sm" onclick="ListarFacturasComercio(${comercio["ID_Proveedor"]})" data-bs-toggle="modal" data-bs-target="#modalFacturaComercios">
                                Visualizar
                                </button>
                            </div>
                            <div class="col-12 px-3">
                                <button type="submit" class="btn btn-dark col-12 btn-sm" onclick="EliminarProveedor(${comercio["ID_Proveedor"]})">
                                Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
        
            `
        })
        //Tarjeta para listar comercios 

    })
}
ListarComercios()

function EliminarProveedor(id){
    
    Swal.fire({
        title: '¿Esta seguro de que desea eliminar este proveedor?',
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
            datos.append("tipoOperacion", "EliminarProveedor")
            datos.append("idProveedor", id)

            fetch(ruta, {
                method: "POST",
                body: datos
            })
            .then(respuesta => respuesta.text() )
            .then(contenido => {
                if(contenido=="eliminarProveedor"){
                    Swal.fire({
                        icon: 'success',
                        title: 'Proveedor eliminado',
                        text: 'Proveedor eliminada con exito',
                    })
                    ListarComercios()
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

