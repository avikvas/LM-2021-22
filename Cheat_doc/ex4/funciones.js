//SELECTORES
$(document).ready(function () {
   //esta es la función global tipo event listener; dentro de ella van otras funciones
   //la estructura es: <<$("selector").loqueseleaplica("propiedad","valor");>>
   
   //seleccionar elem por id: tengo un id en html #
   $("#identificador").css("border","2px dashed red");

   //selecc elem por etiqueta
   $("div").css("background","blue");

   // selecc por class .
   $(".uno").css("font-weight","bold");

   // selecc todos los elem *
   $("*").css("color","grey");

   //selecc algunos elem: etiquetas solas o combinadas con id/class: p, p#uno, div.tres...
   $("div,p.uno").css("font-style","italic");

   //selecc todos todos los elem dentro del div #box *
   $("#box *").css("color","yellow");

   //selecc todos los hijos directos del div #box > *, no nietos
   $("#box > *").css("color","green");

   //selecc los hermanos de un elem ~ (a la misma altura), los que lo siguen (si está en pos 3, se aplica a 4, 5..)
   $("li.three ~ li").css("border","1px solid black");

   //selecc el hermano inmediatamente siguiente al elem (sólo ese elem, aquí - 3) +
   $("li.two + li").css("background","red");

   //selecc la primera/última fila/col de la tabla :first / :last
   $("tr:first").css("background","red");
   $("td:last").css("background","red");

   //selecc las filas pares (:even) o impares (:odd)
   $("tr:even").css("background","orange");
   $("tr:odd").css("background","lightgreen");

   //selecc una fila en la tabla :eq(posición)
   $("tr:eq(1)").css("background","rose");

   //selecc filas posteriores y anteriores de un elem/tr con :gt(pos) y :lt(pos)
   $("tr:gt(1)").css("background","yellow");
   $("tr:lt(1)").css("background","blue");

   //selecc con condiciones (en tabla): con :not(:first,:last,:eq(pos)...)
   $("tr:not(:first,:last)").css("background","black");

   //selecc el primer/ultimo enlace del parrafo :first-child / :last-child
   $("p a:first-child").css("font-weight","bold");
   $("p a:last-child").css("font-weight","bolder");

   //selecc algun enlace del parrafo (el tercero) :nth-child(pos)
   $("p a:nth-child(3)").css("text-decoration","none");

   //selecc los parrafos que tengan por contenido algun texto (termina en "ca" en este caso) :contains(texto)
   $("p:contains(ca)").css("background","lightblue");
   //tambien hay alguno :startswith/ends??

   //selecc los parrafos vacios :empty
   $("p:empty").css("background","green");

   //selecc los parrafos que tengan hijos :parent
   $("p.dep:parent").css("background","grey");

   //selecc parrafos que tengan un enlace (o un elemento??) :has()
   $("p.dep:has(a)").css("background","yellow");

   //selecc todos los parrafos visibles :visible
   $("p.dep:visible").css("color","red");
   //cuando tengo boton, pongo funcion con accion click: lo pongo visible con .show()
   $("button").click(function () {
      $("p.dep:hidden").css("background","violet").show(); 
   });
});
/*lo que se puede aplicar a un elemento en JQ:
- .css("propiedad","valor"): estilo; se indica propiedad (color, border, background) y su valor (rojo, 34) entre comillas dobles,
separados por coma;
- .append("<span>loquesea</span>"): añade una etiqueta, un texto, al elemento, que es como innerHTML
*/

//EVENTOS
// siempre empieza con $("elem").accion(function() { contenido});
$(document).ready(function () {
    //.mouseover / .mouseout definen lo que ocurre al pasar raton por encima de un elem (div, span..)
    //se añade una class a una etiqueta (.addClass) o se quita si la tiene (.removeClass)
    //si elem tiene una class (.hasClass), se le puede añadir o quitar class con if también
    $("div").mouseover(function () {
        //this hace referencia al div sobre el que se pasa el raton y que mencioné antes
        $(this).addClass("colorfondo"); //se crea esta class en css para aplicar estilo
        if ($(this).hasClass("clase")) {
            $(this).addClass("color");
        }
    });

    $("div").mouseout(function () {
        $(this).removeClass("colorfondo");
        if ($(this).hasClass("clase")) {
            $(this).removeClass("color");
        }
    });

    // .toggleClass alternativamente pone/quita una class de css, por ej
    $("button.boton").click(function () {
        //se crea class .ocultarMostrar en css: .ocultarMostrar { display: none; }
        $("div").toggleClass("ocultarMostrar");
    });

    // .attr muestra un atributo o una caract de una etiqueta; hace falta crear una var que llame a ese elem
    //se despeja el resultado en un elem (div, p con un #id) con .text
    $("button.otroboton").click(function () {
        var estilo = $("span").attr("style");
        $("div#estiloSpan").text(estilo); 
    });

    //con .css se añade un estilo nuevo o texto a algo que ya tenemos
    $("button#esteboton").click(function () {
        $("div#estiloSpan").css("width","300px"); 
    });

    // .val() saca el valor (atributo) de una etiqueta (aqui el elvalor de opcion de value) - lo guardo en 
    //una var y se muestra en span con .text
    $("button#mostrar").click(function () {
        var seleccionado = $("input:radio:checked").val();
        $("span#resultado").text(seleccionado);
        $("#resultado2").val(seleccionado); //para meterlo en un input
        return false; //se pone para que se quede el texto reflejaado y no se envíe por form
    });

    // .prop permite modificar propiedad de uhn elem: aqui al clicar se pone a falso disabled y se pone otro 
    //placeholder
    $("button#activar").click(function () {
        $("#resultado3").prop("disabled",false);
        $("#resultado3").prop("placeholder","habilitado");
        return false; 
    });

    //aquí prop sirve para recoger la propiedad del elemento (por ej, chequeado) y quitarselo (poner ret fal)
    $("button#desmarcar").click(function () {
        $("#chequeo").prop("checked",false);
        return false; 
    });

    //insertar texto html desde input con boton jq en un div con html, que puede tener formato style, o text
    $("input#insertar").click(function () {
        //$("#capa1").html("<p style='font-weight: bold'>TEXTO</p>");
        //prepend,append,before,after sirven para añadir texto en donde yo quiera
        $("#capa1").prepend("<p>Al inicio</p>");
        $("#capa1").append("<p>Al final</p>");
        $("#capa1").before("<p>Antes</p>");
        $("#capa1").after("<p>Después</p>");
        $("#capa2").text("TEXTO");
        $("capa2").replaceWith("OTRO TEXTO");
    });

    //
    $("#checkMail").click(function () {
        if ($(this).is(":checked") ) {
            $("#capaMail").append("<input type='email' id='myEmail'>");
        } else {
            $("#myEmail").remove();
        }
    });
    
});