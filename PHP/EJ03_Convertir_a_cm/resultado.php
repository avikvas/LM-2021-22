<?php

$pies = trim(htmlspecialchars(strip_tags($_REQUEST["pie"]), ENT_QUOTES, "UTF-8"));

$pulgadas = trim(htmlspecialchars(strip_tags($_REQUEST["pulg"]), ENT_QUOTES, "UTF-8"));

$resu = "";

//mostarr ficheros individuales
if (empty($pies) || empty($pulgadas)) {
    print "<p>Campos vacíos</p>";
} else if ($pies <= 0 || $pulgadas <= 0) {
    print "<p>Campos vacíos</p>";
} else {
    $resu = ($pies * 12 + $pulgadas) * 2.54 . "\n";
    print $pies . " pies y " . $pulgadas . " pulgadas son " . $resu . " centímetros";

};

//print_r($_REQUEST);

?>