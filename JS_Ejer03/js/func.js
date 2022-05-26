function calcular() {
    var nombre = document.getElementById("nombre").value;
    var edad = document.getElementById("edad").value;
    var nacimiento = document.getElementById("naci").value;

    if (edad !="" || edad.length > 0) {
        var dias = edad * 365;

        document.getElementById("resultado").innerHTML = "Buenos días, " + nombre + "usted tiene " + edad + " años, que son " + dias + " días. Gracias";
    } else {
        var fechaInicio = new Date(nacimiento).getTime;
        var fechaFin = new Date().getTime;

        var diff = fechaFin - fechaInicio;

        var dias = Math.floor(diff/(1000*60*60*24));

        document.getElementById("resultado").innerHTML = "Buenos días, " + nombre + "usted ha vivido " + dias + " días. Gracias";
    }

}