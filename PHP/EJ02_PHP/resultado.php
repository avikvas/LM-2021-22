<?php

$nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));
//$sels = trim(htmlspecialchars(strip_tags($_REQUEST["selec"]), ENT_QUOTES, "UTF-8"));
$sel = $_POST["selec"]; 

//mostrar ficheros individuales
if ($nombre != "") {
print "Su nombre es " . $nombre . "\n";
}

echo "</br></br></br></br>";

//o bien
if (isset($_REQUEST["opc"])) {
    echo "Opción marcada" . "\n";
}

echo "</br></br></br></br>";

print_r($_REQUEST);

echo "</br></br></br></br>";

//para select
for ($i=0;$i<count($sel);$i++)    
{     
echo $sel[$i];    
} 

echo "</br></br></br></br>";

//mostrar todos los ficheros adjuntos
print_r($_FILES);

?>