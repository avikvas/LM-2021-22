<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        //variable para la conexion con la base de datos
        $conexion = mysqli_connect("localhost","root","219LP4gs-p!","cursophp") or die("Problemas de coneexión");

        //hacer una consulta - devuelve un conjunto de resultados q es una subtabla de tabla principal (result set)
        $sql = "SELECT a.idAlumno, a.nombre, a.mail, c.nombreCurso FROM alumnos a JOIN cursos c ON a.codigocurso=c.idCurso";

        //lanzar la consulta sobre la BD
        $registros = mysqli_query($conexion, $sql) or die("Problema en la consulta: " . mysqli_error($conexion));

        echo "<table class='table table-dark table-striped'>";
        echo "<thead><th>idAlumno</th><th>Nombre</th><th>Email</th><th>Curso</th><th>Opciones</th></thead>";
        //con un bucle recorremos la consulta 
        while ($reg=mysqli_fetch_array($registros)) {
            echo "<tr>";
            echo "<td>" . $reg['idAlumno'] . "</td>";
            echo "<td>" . $reg['nombre'] . "</td>";
            echo "<td>" . $reg['mail'] . "</td>";
            echo "<td>" . $reg['nombreCurso'] . "</td>";
            echo "<td>" . "<a href='borrar.php?' class='btn btn-danger btn-'>Borrar</a>
                    <a href='actualizar.php?' class='btn btn-primary btn-'>Actualizar</a>" . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        mysqli_close($conexion);

        ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>