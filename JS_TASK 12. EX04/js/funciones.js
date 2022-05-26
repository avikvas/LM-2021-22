
function viewAge(strEdad) {
    document.getElementById("veredad").innerHTML = strEdad.value;
}

function validateForm() {
    var correcto = true;
    var texto = "";

    var res = document.getElementById("errores");
    res.innerHTML = "";

    var correo = document.getElementById("email").value;
    var web = document.getElementById("web").value;
    var edad = document.getElementById("age").value;
    var pass = document.getElementById("contrasena").value;
    var pass2 = document.getElementById("contrasena2").value;

    /* 
    if (correo.length == 0 || correo.value == ""
    || web.length == 0 || web.value == ""
    || edad.length == 0 || edad.value == ""
    || pass.length == 0 || pass.value == ""
    || pass2.length == 0 || pass2.value == "") {
        texto += "<li>Debe rellenar todos los campos</li>";
        correcto = false;
    } else if (String(correo).indexOf("@") == -1 &&
    String(correo).indexOf(".") == -1 &&
    String(correo).indexOf("@") < String(correo).indexOf(".")) {
        texto = "<li>Falta @ en email</li>";
        correcto = false;
    }
    */

    if (String(correo).indexOf("@") == -1) {
        texto = "<li>Falta @ en el email</li>";
        correcto = false;
    } else {
        var posArroba = String(correo).indexOf("@");
        var posPunto = String(correo).indexOf(".",posArroba);
        if (posPunto == -1 || posPunto == posArroba + 1 || posPunto == String(correo).length-1) {
            texto = "<li>Punto no indicado bien en el correo</li>";
            correcto = false;
        }
    }

    if (!String(web).startsWith("http://")) {
        texto = "<li>El enlace de web debe empezar por http://</li>";
        correcto = false;
    }

    if (parseInt(edad) < 0) {
        texto = "<li>Edad incorrecta</li>";
        correcto = false;
    }

    if (String(pass).localeCompare(String(pass2)) != 0) {
        texto = "<li>La contraseña no coincide</li>";
        correcto = false;
    }

    res.innerHTML = texto;
    return correcto;

}

/*1 Es una psoibilidad de cómo hacer validacion de "@" y ".": (String(correo.value).indexOf("@") == -1 && 
String(correo.value).indexOf(".") == -1 && 
String(correo.value).indexOf("@") == -1 < String(correo.value).indexOf(".") == -1)
 */