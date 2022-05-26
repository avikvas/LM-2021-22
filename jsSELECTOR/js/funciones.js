function iniciar() {
    alert(document.getElementById("usuario").value);
    /*var usu = prompt("introduzca nombre:");
    alert("Hola, " + usu);
    var usu = prompt("introduzca nombre:");
    document.getElementById("texto").innerHTML = "Hola, " + usu + "</br>";
    document.getElementById("texto").style = "font-weight: bold";*/

    /*var radios = document.getElementsByName("valores");
    for (let i = 0; i < radios.length; i++) {
        alert(radios[i]).value;
    }*/

    document.getElementsByTagName("p")[0].innerHTML = "primer p";
    //document.getElementsByTagName("p")[0].onclick = mostrarMensaje;
}
function alerta() {
    alert("Alerta")
}

function mostrarMensaje(){
    document.getElementById("texto").innerHTML = "Hola";
    document.getElementById("texto").className = "bordeYcolor";
}

function ocultar() {
    document.getElementById("principal").style = "display: none";
}

function mostrar() {
    document.getElementById("principal").style = "display: block";
    //document.querySelector("principal p:first-child").onclick = alerta;
    var coleccion = document.querySelectorAll("#principal p");
    var coleccion = document.getElementById("principal").querySelectorAll("p")
    //las 2 últimas líneas hacen lo mismo: seleccionar los p de id "principal"
    for (let i = 0; i < radios.length; i++) {
        radios[i].innerHTML = "p" + [i];
    }

}

window.addEventListener("load",iniciar,false);
/*a la ventana del navegador le indicamos que escuche un evento - la carga de un doc*/

