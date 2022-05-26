function iniciar() {
    var estilo = prompt("Introduce el nombre:")
        if (estilo == "Vik") {
            document.getElementById("container").className="Vik";
        }
            else
                if (estilo == "Lola") {
                    document.getElementById("container").className="Lola";
                }
                else {
                    document.getElementById("container").className="Black";
                }
    }


window.addEventListener("load",iniciar,false);