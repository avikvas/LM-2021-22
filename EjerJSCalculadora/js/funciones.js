/* VERSION 1 */

function sumar() {
    var n1 = parseInt(document.getElementById("num1").value);
    var n2 = parseInt(document.getElementById("num2").value);

    resu = n1 + n2;
    document.getElementById("resultado").value = resu;
}

function restar() {
    var n1 = parseInt(document.getElementById("num1").value);
    var n2 = parseInt(document.getElementById("num2").value);

    resu = n1 - n2;
    document.getElementById("resultado").value = resu;
}

function multiplicar() {
    var n1 = parseInt(document.getElementById("num1").value);
    var n2 = parseInt(document.getElementById("num2").value);

    resu = n1 * n2;
    document.getElementById("resultado").value = resu;
}

function dividir() {
    var n1 = parseInt(document.getElementById("num1").value);
    var n2 = parseInt(document.getElementById("num2").value);

    resu = n1 / n2;
    document.getElementById("resultado").value = resu;
}

/* VERSION 2 */

/* 
function calcular() {
    var n12 = parseInt(document.getElementById("num12").value);
    var n22 = parseInt(document.getElementById("num22").value);

    if (document.getElementById("sumar").value) {
        resu2 = n12 + n22;

    } else if (document.getElementById("restar").value) {
        resu2 = n12 - n22;

    } else if (document.getElementById("multiplicar").value) {
        resu2 = n12 * n22;

    } else {
        resu2 = n12 / n22;
    }

    document.getElementById("resultado2").value = resu2;

}
*/

function calcular(operacion) {
    var n12 = parseInt(document.getElementById("num12").value);
    var n22 = parseInt(document.getElementById("num22").value);

    if (operacion == "sumar") {
        resu2 = n12 + n22;

    } else if (operacion == "restar") {
        resu2 = n12 - n22;

    } else if (operacion == "multiplicar") {
        resu2 = n12 * n22;

    } else if (operacion == "dividir") {
        resu2 = n12 / n22;
    }

    document.getElementById("resultado2").value = resu2;

}