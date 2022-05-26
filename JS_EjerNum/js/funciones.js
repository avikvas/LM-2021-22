/*
COMPARAR 2 NUMEROS
function comparar() {
    var num1 = parseInt(document.getElementById("n1").value);
    var num2 = parseInt(document.getElementById("n2").value);
    var resultado = "";


    if (num1 > num2) {
        resultado = num1 + " es mayor que " + num2;
    } else if (num2 > num1) {
        resultado = num2 + " es mayor que " + num1;
    } else {
        resultado = num1 + " es igual a " + num2;
    }
    document.getElementById("resultado").innerHTML = resultado;
}
*/

/*parseInt - es para indicar que se usen los números enteros*/

/*COMPARAR 3 NUMEROS*/
function comparar() {
    var num1 = parseInt(document.getElementById("n1").value);
    var num2 = parseInt(document.getElementById("n2").value);
    var num3 = parseInt(document.getElementById("n3").value);
    var resultado = "";

    if (num1 > num2 && num1 > num3 && num3 < num2) {
        resultado = num1 + " es el mayor, " + num2 + " es el central y " + num3 + " es el menor";
    } else if (num1 > num2 && num1 > num3 && num2 < num3) {
        resultado = num1 + " es el mayor, " + num3 + " es el central y " + num2 + " es el menor";
    } else if (num2 > num1 && num2 > num3 && num1 < num3) {
        resultado = num2 + " es el mayor, " + num3 + " es el central y " + num1 + " es el menor";
    } else if (num2 > num1 && num2 > num3 && num3 < num1) {
        resultado = num2 + " es el mayor, " + num1 + " es el central y " + num3 + " es el menor";
    } else if (num3 > num1 && num3 > num2 && num1 < num2) {
        resultado = num3 + " es el mayor, " + num2 + " es el central y " + num1 + " es el menor";
    } else if (num3 > num1 && num3 > num2 && num2 < num1) {
        resultado = num3 + " es el mayor, " + num1 + " es el central y " + num1 + " es el menor";
    }
    document.getElementById("resultado").innerHTML = resultado;
}

function repetir() {
    var repeticion = document.getElementById("frase").value;
    var nrep = parseInt(document.getElementById("repeat").value);
    var resultado = "";
        
    for (let i = 0; i < nrep; i++) {
        resultado = resultado + (i+1) + ". " + repeticion + "</br>";
    }

    document.getElementById("imprimir").innerHTML = resultado;
}

function elevar() {
    var nbase = parseInt(document.getElementById("base").value);
    var nexp = parseInt(document.getElementById("exponente").value);
    var resul = "";

    let elevado = Math.pow(nbase,nexp);
    resul = "El resultado es " + elevado;
    document.getElementById("resu").innerHTML = resul;
}

/*existen variables globales que se declaran fuera de la funcion; Math.random solo devuelve valores entre 0 y 1*/

var aleatorio = parseInt(Math.random() * 100);
var intentos = 3;

function comprobar() {
    var capturado = parseInt(document.getElementById("intronum").value);
    var resp = "";

    if (intentos > 0) {

        if (capturado > aleatorio) {
            intentos = intentos - 1;
            resp = capturado + " es mayor. Intentos restantes - " + intentos;
        } else if (capturado < aleatorio) {
            intentos = intentos - 1;
            resp = capturado + " es menor. Intentos restantes - " + intentos;
        } else {
            resp = "¡Has acertado!";
        }
        
    } else {
            resp = "Te has quedado sin intentos";
            
            if (document.getElementById("encender").style = "visibility: visible") {
                /*seguir*/
            }
    }
        document.getElementById("respuesta").innerHTML = resp;
}