function iniciar() {
    var tabla = "";

    for (let i = 1; i <= 10; i++) {
        tabla = tabla + "<h3>Tabla del " + i + "</h3>";
        for (let j = 1; j <= 10; j++) {
            tabla = tabla + i + " * " + j + " = " + (i*j) + "<br/>";
        }
            
    }
    document.getElementById("tablas").innerHTML = tabla;
}

function mostrarTabla() {
    var numero = document.getElementById("num").value;
    var texto = "Tabla de multiplicar de " + numero + " es: " + "<br/>";
    
    for (let i = 1; i <= 10; i++) {
        texto = texto + numero + " * " + i + " = " + (numero*i) + "<br/>";
        
    }

    document.getElementById("resultado").innerHTML = texto;
}

window.addEventListener("load",iniciar,false);