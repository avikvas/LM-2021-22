<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search listings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container d-grid gap-3 bg-light">
        <a href="../index.html" class="btn btn-secondary col-3 mt-1" role="button">Back to Main Menu</a>
        <h3>Search listings by country!</h3>
        <form action="view_cond.php" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="counId" class="lead">Select country</label>
                <select name="countr" id="countr" class="form-control">
                    <?php
                    $connect = mysqli_connect("localhost", "root", "219LP4gs-p!", "prex6_viajes") 
                                    or die("Houston, we have a problem");

                    $sql = "SELECT DISTINCT COUNTRY, COUNTRY_ID FROM HOST_DATA ORDER BY 1";

                    $registros = mysqli_query($connect, $sql) 
                            or die("An issue with select clause has ocurred:".mysqli_error($connect));

                    while($reg=mysqli_fetch_array($registros)) {
                        echo "<option value='$reg[COUNTRY]'>$reg[COUNTRY]</option>";
                    }
                    ?>
                </select>
            </div>
            <input type="submit" value="Search" class="btn btn-dark mt-1">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>