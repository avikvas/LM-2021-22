$(document).ready(function () {
    
    //EJ 1
    $("a").mouseover(function () {
       $("a").css("background","lightgreen");
    });

    $("a").mouseout(function () {
        $("a").css("background","none");
     });

    //EJ 2
    $("td").mousedown(function () {
        $(this).addClass("estVerde");
      });
    
      $("td").mouseup(function () {
        $(this).removeClass("estVerde");
      });

    //EJ 3
    //$(":text#texto").val().length
    
    var texto = $("p").val();
    $("button#ponerAmarillo").click(function () {
        if (texto.length < 100) {
            $("p").css("background","yellow");
        } else if (texto.length > 100) {
            $("p").css("background","none");
        }
        
    });
    
    $("button#quitarAmarillo").click(function () {
       if ($("p").css("background","yellow")) {
           $("p").css("background","none");
       }
    });
   

    
 });


