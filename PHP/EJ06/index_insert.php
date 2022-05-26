<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!--index de consulta está en ej04 (lo q el profesor tiene como index en Ejer05-->
    <div class="container">
        <h2>INSERTAR ALUMNOS</h2>
        <form action="insertar.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" autofocus>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="curso">Curso</label>
                <select name="curso" class="form-control" id="curso">
                    <?php
                    $conexion = mysqli_connect("localhost","root","219LP4gs-p!","cursophp") or die("Problemas de conexión");

                    $sql = "SELECT idCurso, nombreCurso FROM cursos;";
                    
                    $registros = mysqli_query($conexion, $sql) or die("Problema en select: " . mysqli_error($conexion));

                    while ($reg=mysqli_fetch_array($registros)) {
                        echo "<option value='$reg[idCurso]' > $reg[nombreCurso] </option>";
                    }

                    //mysqli_close($conexion);
                    ?>
                </select>
            </div>
        </br>
            <input type="submit" value="Insertar" class="btn btn-primary btn-block">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>