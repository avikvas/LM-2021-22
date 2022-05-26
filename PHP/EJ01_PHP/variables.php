<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
    echo "Hola";
    echo "<p>Hola a todos</p>";
    print "<p>Hola</p>\n";
    $saludo = "Holis";
    echo $saludo;

    echo "</br>Mensaje: " .$saludo . " Fin del mensaje</br>"; // el punto concatena las cadenas

    $a = 8;
    $b = 2;
    $c = 2;
    echo $a + $b . "</br>";
    $resultado = $a - $c;
    echo $resultado . "</br>";
    $a = $a + 1;
    $a++;
    $a +=1;

    $a = $a - 1;
    $a--;
    $a -=1;

    $a = $a * 2;
    $a *= 2;
    echo $a;

    $tabla = ["valor1", "valor2"];
    $tabla2 = [["v1", "v2"],["v3","v4"]];

    $correcto = true;
    
    ?>

    <?=$saludo?>

    <?php
    echo "</br>" . $tabla[1];
    echo "</br>" . $tabla2[1][0];

    if ($correcto) {
        print "<p>Es correcto</p>";
    } else {
        print "<p>No es correcto</p>";
    }

    print $tabla[0] . " - " . $tabla[1] . "</br>";
    //añadir valor
    $tabla [0] = "valor3";
    print $tabla[0];
    //borrar valor
    unset($tabla[2]);
    print $tabla[2];

    //numero de elementos
    echo "</br>" . count($tabla);

        $numeros = [1,5,8,2,9];
        echo "<br/>MIN: " . min($numeros);
        echo "<br/>MAX: " . max($numeros);

        // Ordenar la tabla
        sort($numeros);
        print_r($numeros);

        if (in_array(88, $numeros)) {
            print "\nEstá";
        } else {
            print "\nNo Está";
        }

        print "<br/>";
        shuffle($numeros);
        print_r($numeros);
        
        print "<br/>";
        array_rand($numeros);
        print_r($numeros);

        define("PI", 3.14);
        echo "<br/>" . PI;

        print "<br/>" . PHP_INT_MAX;

        print "<pre>";
        print_r(get_defined_constants());
        print "</pre>";
    ?>
</body>
</html>