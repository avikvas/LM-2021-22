function validar(campo) {
    //var campo = document.getElementsByName("nombre");
    //alert(campo.value);
    if (campo.value == null || campo.value == "" || campo.value.length == 0) {
        //campo.style = "border: 2px solid red";
        //campo.focus();
        mostrarError("spnombre", "Error: nombre vacío");
    } else {
        //campo.style = "";
        borrarError("spnombre");
    }

}

function mostrarError(nombreSpan, mensaje) {
    document.getElementById(nombreSpan).innerHTML = mensaje;
};

function borrarError(nombreSpan) {
    document.getElementById(nombreSpan).innerHTML = "";
}

function validarFormulario() {
    var cadenaError = "";

    var nombre = document.getElementsById("nombre");
    if (nombre.value == null || nombre.value.length == 0) {
        cadenaError = cadenaError + "<li>Error: Nombre vacío</li>";
    }

    var postal = document.getElementsById("postal");
    if (postal.value == null || postal.value.length == 0) {
        cadenaError = cadenaError + "<li>Error: Código Postal vacío</li>";
    } else if (postal.value.length != 5) {
        cadenaError = cadenaError + "<li>Error: Código Postal no es de 5 dígitos</li>";
    }

    var telefono = document.getElementsById("telefono")
    if (telefono.value == null || telefono.value.length == 0) {
        cadenaError = cadenaError + "<li>Error: Código Postal vacío</li>";
    } else if (postal.value.length != 5) {
        cadenaError = cadenaError + "<li>Error: Código Postal no es de 5 dígitos</li>";
    }

    return true;
}

function mostrarEdad(campoEdad) {
    document.getElementById("spedad").innerHTML = campoEdad.value;
}