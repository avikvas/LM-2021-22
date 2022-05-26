function calcularIva() {
    var preci = parseInt(document.getElementById("precio").value);
    var iva = document.getElementById("iva").value;
    var selected = iva.options[selectedIndex].value;
    var resu = "";

    resu = preci * selected / 100;
    document.getElementById("mostrarPrecio").innerHTML = selected;
}