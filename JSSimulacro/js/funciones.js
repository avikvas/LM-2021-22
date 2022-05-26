function cambiar(estado) {
    var borde = "";
    var sinborde = "";

    if (estado == "encender") {
        borde = document.getElementById("bordenegro").style = "border: 2px solid black";
    } else if (estado == "apagar") {
        sinborde = document.getElementById("bordenegro").style = "border: none";
    }
}