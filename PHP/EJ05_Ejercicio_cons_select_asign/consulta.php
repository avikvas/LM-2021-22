<?php
    
    $course = $_POST["curso"];

    //print_r($_REQUEST);

    $conexion = mysqli_connect("localhost","root","219LP4gs-p!","cursophp") or die("Problemas de conexión");

    for ($i=0;$i<count($course);$i++)    
        {  
    //hacer una consulta - devuelve un conjunto de resultados q es una subtabla de tabla principal (result set)
    $sql = "SELECT a.idAlumno, a.nombre, a.mail, c.nombreCurso FROM alumnos a JOIN cursos c ON a.codigocurso = c.idCurso WHERE c.nombreCurso = '$course[$i]';";

    //lanzar la consulta sobre la BD
    $registro = mysqli_query($conexion, $sql) or die("Problema en la consulta: " . mysqli_error($conexion));

    echo "<h3>Los alumnos que asisten al curso " . $course[$i] . " son los que se muestran a continuación</h3></br>";
    echo "<table class='table table-dark table-striped'>";
    echo "<thead><th>idAlumno</th><th>Nombre</th><th>Email</th><th>Nombre Curso</th></thead>";
    //con un bucle recorremos la consulta 
    while ($reg=mysqli_fetch_array($registro)) {
        echo "<tr>";
        echo "<td>" . $reg['idAlumno'] . '</td>';
        echo "<td>" . $reg['nombre'] . '</td>';
        echo "<td>" . $reg['mail'] . '</td>';
        echo "<td>" . $reg['nombreCurso'] . '</td>';
        echo "</tr>";
    }

    echo "</table>";

} 

    mysqli_close($conexion);
    ?>
