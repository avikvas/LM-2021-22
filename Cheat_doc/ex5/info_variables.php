<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    INFO
    <?php
    phpinfo();
    ?>

    <!--El codigo PHP se escribe en el bloque global <?php ?>-->
    <?php
    //mostrar info de php en la página: echo (con etiquetas html o sin), print (meter html y caracteres
    //especiales como "\n" - salto de línea, "ñ")
    echo "Hola";
    echo "<p>Hola</p>";
    print "<p>Hola</p>\n";

    //declarar variable en php con $ (texto o numero) y lo muestro con print
    $saludo = "Holaa";
    $a = 8;
    $b = 2;
    print $saludo;
    //una manera rapida de mostrar valor de una variable es poniendo una salida en html

    //tambien se puede imprimir directamente el resultado de una operacion matematica
    echo $a + $b;
    //así como guardar el resultado de la operacion en una variable y luego mostrarla
    $resultado = $a + $b;
    echo $resultado;

    //sumar/restar 1 a la variable
    $a = $a + 1; $a++; $a += 1; //sumarle uno al valor de $a
    $a = $a - 1; $a--; $a -= 1; //restarle uno al valor de $a
    $a = $a + 2; $a *= 2; //multiplicar por 2 el valor de $a
    

    //concatenación con "." de texto de echo y variable
    echo "</br>Mensaje: " . $saludo . " Fin del mensaje</br>";

    //desclarar variable tabla o array (lista)
    $tabla = ["valor1","valor2"]; //este es una cadena - se pone con "", si fuesen numeros - se ponen sin más
    //declarar variable tabla bidimensional de 3 filas y 2 columnas = lo q esta en [] interno es una fila
    $tabla2 = [["v1","v2"],["v3","v4"],["v5","v6"]];
    //visualizar valores de tabla unidimensional
    echo $tabla[0];
    //visualizar valores de tabla bidimensional indicando primero fila y luego columna entre []
    echo $tabla2[1][0];
    //podemos concatenar los valores de la tabla como si fuesen variables individuales, por ej:
    print $tabla[0] . " - " . $tabla[1];

    //añadir valor a la tabla en la ultima posicion:
    $tabla[] = "valor3";
    //añadir valor en la tabla en alguna posicion (cambiar):
    $tabla[0] = "valor4";
    //borrar valor en la tabla en la posicion x:
    unset($tanla[2]);

    //contar el numero de elementos (en una tabla en este caso):
    echo count($tabla); //o echo "Num de elems: " . count($tabla);

    //determinar minimo y maximo en una tabla dada
    $tabnueva = [1,5,8,2,9];
    echo min($tabnueva); echo max($tabnueva);

    //ordenar los elementos en una tabla y mostrarlos con print recursivo
    sort($tabnueva);
    print_r($tabnueva);

    //averiguar si un numero está en la tabla con in_array
    if (in_array(8, $tabnueva)) {
        print "Sí";
    } else {
        print "No";
    }

    //mezclar en orden aleatorio elemntos de una tabla array con shuffle
    shuffle($tabnueva); print_r($tabnnueva);

    //seleccionar una o más claves aleatorias de un array con array_rand
    array_rand($tabnueva); print_r($tabnueva);

    //declarar variable lógica (tiene 2 valores - true y false)
    $correcto = true;
    //lo podemos emplear en un if, por ej., para imprimir un valor cuando es verdadero u otro cuando es falso
    // con solo ponerlo entre () en if, se entiende que es == true; para poner == false se pone !$correcto
    if ($correcto) {
        print "<p>Es correcto</p>";
    } else {
        print "<p>No es correcto</p>";
    }

    //en las variables, sus valores pueden irse modificando
    //constante: es una variable con un valor que es fijo, no se podrá modificar; 
    //la constante se define con el nombre de la variable y su valor; por convención, se escribe en MAYUSC
    define("PI", 3.14); //se puede imprimir con echo y sin ""
    echo PI;

    //constantes predefinidas estan en get_defined_constants:
    print_r(get_defined_constants()); //con esto se imprimen todas; pero, por ej., esta saca max de lenguaje:
    print PHP_INT_MAX;


    //BUCLES Y CONDICIONES
    $aleatorio = rand(1, 10);
    print $aleatorio; //imprime un numero aleatorio del rango especificado

    //podemos poner una condición con un if igual que en JS
    if ($aleatorio < 5) {
        echo "<p>El valor $aleatorio es menor que 5</p>";
    } else if ($aleatorio > 5) {
        echo "<p>El valor $aleatorio es mayor que 5</p>";
    } else {
        echo "<p>El valor $aleatorio es 5</p>";
    }

    /*bucle for tiene 3 partes: 1) inicialización de variable (variable centinela, q se usa para dar vueltas 
    por el bucle), 2) condicion de salida (mientras se cumple, no salimos del bucle), 3) incremento/decreme*/
        for ($i=0; $i < 6; $i++) { 
            echo "<p>$i</p>";
        }

    //para sumar a cada numero 2, 3, 4, 10... en la 3ª parte, de increm, se pone $i = $1 + x:
    for ($i=0; $i < ; $i = $i + 2) { 
        # code...
    }

    //para mostrar los numeros en el orden inverso, del 5 al 0:
    for ($i=5; $i > 0; $i--) { 
        //para que muestre solo los pares
        if ($i % 2 == 0) {
            echo "<p>$i</p>";
        }
    }

    //para construir una tabla con 2 variables con bucle for: declarar variables y hacer bucle
    $filas = 3;
    $cols = 4;
    echo "<table>";
    for ($i=0; $i < $filas; $i++) { 
        echo "<tr>";
        for ($j=0; $j < $cols; $j++) { 
            echo "<td>$i-$j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    //sacar fecha y hora; funcion date permite trabajar con fecha (dia, mes, año, dia sem, hora, min, seg, 
    //donde estamos... en funcion del parametro - local o de servidor - que se le pone a la funcion date)
    $hora = date(H);
    //ya luego con eso se puede hacer una condicion para que saque un mensaje determinado a determinada hora


    //FUNCIONES: una funcion con parametros q luego se puede sustituir por lo q sea y despejar resultado en var
    function calcularHipotenusa($par1,$par2) {
        $hipoten = sqrt($par1*$par1 + $par2*$par2);
        //luego voy poder hacer llamadas a ese bloque de funcion y utilizarla cuando yo quiera
        // hay q poner return para q devuelva el valor
        return $hipoten;
    }
    //ahora fuera de la funcion declaro variables, q van a ser parametros, y la ejecuto e imprimo el result
    $cat1 = 12;
    $cat2 = 16;
    $hipotenusa = calcularHipotenusa($cat1,$cat2);
    echo $hipotenusa;


    ?>
    <!--salida en html: aqui "=" es una abreviatura de echo, o sea, imprime por pantalla lo q va despues de =-->
    <?=$saludo ?>
</body>
</html>