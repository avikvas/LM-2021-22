<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View all the listings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container d-grid gap-3 bg-light">
        <a href="../index.html" class="btn btn-secondary col-3 mt-1" role="button">Back to Main Menu</a>
    <?php

        $connect = mysqli_connect("localhost","root","219LP4gs-p!","prex6_viajes") or die("Houston, we have a problem");

        $sql = "SELECT L.LISTING_ID, L.LISTING_NAME,L.ADDRESS,L.PRICE,
        H.HOST_NAME,H.EMAIL,H.COUNTRY,H.HOST_RATING 
        FROM LISTING_DATA L INNER JOIN HOST_DATA H ON L.HOST_ID=H.HOST_ID ORDER BY L.LISTING_ID;";

        $registros = mysqli_query($connect, $sql) or die("Problema en la consulta: " . mysqli_error($connect));

        echo "<table class='table table-dark table-striped'>";
        echo "<thead><th>Name listing</th><th>Address</th><th>Price</th><th>Name</th><th>Email</th><th>Country</th><th>Rating</th><th>Settings</th></thead>";

        while ($reg=mysqli_fetch_array($registros)) {
            echo "<tr>";
            echo "<td>" . $reg['LISTING_NAME'] . "</td>";
            echo "<td>" . $reg['ADDRESS'] . "</td>";
            echo "<td>" . $reg['PRICE'] . "</td>";
            echo "<td>" . $reg['HOST_NAME'] . "</td>";
            echo "<td>" . $reg['EMAIL'] . "</td>";
            echo "<td>" . $reg['COUNTRY'] . "</td>";
            echo "<td>" . $reg['HOST_RATING'] . "</td>";
            echo "<td>" . "<a href='delete_all.php?LISTING_ID=$reg[LISTING_ID]' class='btn btn-danger'>Delete</a>
                           <a href='update_all.php?LISTING_ID=$reg[LISTING_ID]' class='btn btn-primary'>Update</a>" . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        mysqli_close($connect);

        ?>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>