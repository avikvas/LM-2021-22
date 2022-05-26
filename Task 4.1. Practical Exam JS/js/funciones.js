/*EJERCICIO 1*/

function validarFormulario() {
    
    var correcto = true;
    var alerta = "";

    var error = document.getElementById("errores");
    error.innerHTML = "";

    var log = document.getElementById("login").value;
    var tel = document.getElementById("phone").value;
    var pagweb = document.getElementById("web").value;
    var hob = document.getElementById("hobbie").value;

    if (log == null || log.length == 0) {
            alerta += "<li>Error: Campo vacío</li>";
            correcto = false;
    } else if (log.length < 5) {
        alerta += "<li>Error: Login incorrecto</li>";
        correcto = false;
    }

    if (tel == null || tel.length == 0 ||
        tel.length != 9 || (!String(tel).startsWith("6") || !String(tel).startsWith("9"))) {
        alerta += "<li>Error: Teléfono incorrecto</li>";
        correcto = false;
    }

    if (pagweb == null || pagweb.length == 0 || !String(pagweb).startsWith("www") || 
    !String(pagweb).endsWith(".es")) {
        alerta += "<li>Error: Enlace de web incorrecto</li>";
        correcto = false;
    }
    if (hob == null) {
        alerta += "<li>Error: No se ha elegido ningún hobbie</li>";
        correcto = false;
    }
    
    error.innerHTML = alerta;
    return correcto;
}


/*EJERCICIO 2*/

function cambiar() {
    var primero = "";
    var segundo = "";
    var tercero = "";

    primero = document.getElementsByTagName("a")[0].style = "font-weight: bold";
    segundo = document.getElementsByTagName("a")[1].style = "font-size: x-large";
    tercero = document.getElementsByTagName("a")[2].style = "color: orange";
}

/*EJERCICIO 3*/

function calcular() {
    var destino = document.getElementById("viaje").value;
    var km = parseInt(document.getElementById("kilometro").value);
    var price = parseFloat(document.getElementById("precio").value);

    var calculo = km * price;

    document.getElementById("resultado").innerHTML = "El viaje de " + destino + " de " + km + " kilómetros a " +
    price + " de precio por kilómetro hace un gasto total de " + calculo + "€";

}