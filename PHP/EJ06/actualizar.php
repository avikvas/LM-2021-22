<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php

            $idAlumno = trim(htmlspecialchars($_REQUEST["idAlumno"], ENT_QUOTES, "UTF-8"));
            
            $conexion = mysqli_connect("localhost", "root", "219LP4gs-p!", "cursophp") 
                            or die("Problemas de Conexión");
            
            $sql = "SELECT FROM alumnos WHERE idAlumno = $idAlumno";

            mysqli_query($conexion, $sql) 
                        or die("Problemas en el delete: ".mysqli_error($conexion));

            if ($reg = mysqli_fetch_array($registro)) {
                ?>
                <form action="actualizar01.php" method="post">
                    <input type="hidden" name="idAlumno" id="idAlumno" value="<?php echo $reg['idAlumno']; ?>">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" autofocus value="<?php echo $reg['idAlumno']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="curso">Curso</label>
                        <select name="curso" class="form-control" id="curso">
                    </div>
                    <input type="submit" value="Actualizar">
                </form>
                <?php
            }


            mysqli_close($conexion);            
        ?>
    </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>