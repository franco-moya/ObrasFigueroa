let formularioLogin = document.getElementById("formularioLogin")

formularioLogin.addEventListener("submit", IniciarSesion)

function IniciarSesion(e) {
    e.preventDefault()
    let datos = new FormData(formularioLogin)
    datos.append("tipoOperacion", "IniciarSesion")

    fetch("db/gestionarUsuarios.php", {
        method: "POST",
        body: datos
    }) 
    .then(response => response.text())
    .then(data => {
    if (data == "OK") {
        
        
        window.location = "index.php"
    } else {
        alert("error al iniciar sesion")
    }
    })
}