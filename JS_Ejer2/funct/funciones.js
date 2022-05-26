function inicio() {
    var titulo = document.getElementById("titulo");
    var texto = document.getElementById("texto");
    var capa = document.getElementById("capa");
    if (capa.classList.contains("success")) {
        titulo.innerHTML = "CORRECTO";
        texto.innerHTML = "Los datos son correctos";
    } else if (capa.classList.contains("warning")) {
        titulo.innerHTML = "AVISO";
        texto.innerHTML = "Tenga cuidado";
    } else if (capa.classList.contains("error")) {
        titulo.innerHTML = "ERROR";
        texto.innerHTML = "Ha surgido un error";
    }   
}

window.addEventListener("load",inicio,false);
