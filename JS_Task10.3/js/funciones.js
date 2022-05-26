var mayor = 0;
var menor = 0;
var sumaPositivos = "";
var sumaNegativos = "";

function aplicar(numero) {

    if (numero > mayor) {
        mayor = numero;

    } else if(numero < menor) {
            menor = numero;
    }

    if (numero > 0) {
        sumaPositivos += numero;
    } else if (numero < 0) {
        sumaNegativos += numero;
    }

    document.getElementById("numero").value = "";
    document.getElementById("numero").focus();

}

function mostrarResu() {
    var resu = document.getElementById("resultado");
    resu.innerHTML = "Mayor: " + mayor + "</br>" + "Menor: " + menor + "</br>" + "Suma positivos: " + sumaPositivos + "</br>" + "Suma negativos: " + sumaNegativos + "</br>";
}