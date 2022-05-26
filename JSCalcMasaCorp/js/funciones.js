function calcIndice() {
    var kg = document.getElementById("peso").value;
    var m = document.getElementById("alto").value;

    var resu = kg / Math.pow(m, 2);
    var texto = "";

    if (resu < 18.5) {
        texto = "Peso insuficiente" + resu;
    } else if (resu >= 18.5 && resu <= 24.9) {
        texto = "Normopeso" + resu;
    } else if (resu >= 25 && resu <= 26.9) {
        texto = "Sobrepeso grado I" + resu;
    } else if (resu >= 27 && resu <= 29.9) {
        texto = "Sobrepeso grado II (preobesidad)" + resu;
    } else if (resu >= 30 && resu <= 34.9) {
        texto = "Obesidad de tipo I" + resu;
    } else if (resu >= 35 && resu <= 39.9) {
        texto = "Obesidad de tipo II" + resu;
    } else if (resu >= 40 && resu <= 49.9) {
        texto = "Obesidad de tipo III (mórbida)" + resu;
    } else if (resu >= 50) {
        texto = "Obesidad de tipo IV (extrema)" + resu;
    }

    document.getElementById("resultado").innerHTML = texto;
}