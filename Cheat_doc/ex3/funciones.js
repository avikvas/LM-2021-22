// no olvidar poner () en funcion

//ESCUCHAR EVENTO
window.addEventListener("load",iniciar,false);

//usar un alert o prompt para ver lo q se captura
function iniciar() {
    alert(document.getElementById("usuario").value);
    /*var usu = prompt("introduzca nombre:");
    alert("Hola, " + usu);*/
}

//SELECTORES: id,name,tagname,classname,querySelector,querySelectorAll, por ej
document.getElementById("").loquesea
//despues del punto puedo capturar texto o valor con .value, poner estilo con .style, poner texto con .innerHTML, 
//poner un estilo con una class con .className

//bucle for, donde i es un elemento de lista q va desde 0 a la longitud de lista; radios es la variable q tengo;
//con "p" + [i] lo aplico a todos los parrafos o elementos
for (let i = 0; i < radios.length; i++) {
    radios[i].innerHTML = "p" + [i];