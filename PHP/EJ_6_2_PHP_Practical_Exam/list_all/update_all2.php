<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating listing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container d-grid gap-3 bg-light">
        <?php
            
            $idIn = trim(htmlspecialchars($_REQUEST["listId"], ENT_QUOTES, "UTF-8"));
            $nameIn = trim(htmlspecialchars($_REQUEST["l_name"], ENT_QUOTES, "UTF-8"));
            $hostidIn = trim(htmlspecialchars($_REQUEST["h_id"], ENT_QUOTES, "UTF-8"));
            $cityIn = trim(htmlspecialchars($_REQUEST["l_city"], ENT_QUOTES, "UTF-8"));
            $addressIn = trim(htmlspecialchars($_REQUEST["l_addr"], ENT_QUOTES, "UTF-8"));
            $priceIn = trim(htmlspecialchars($_REQUEST["l_price"], ENT_QUOTES, "UTF-8"));
            
            $connect = mysqli_connect("localhost", "root", "219LP4gs-p!", "prex6_viajes") 
                            or die("Houston, we have a problem");
            
            $sql = "UPDATE LISTING_DATA SET LISTING_NAME='$nameIn', 
                                        LISTING_ID='$idIn',
                                        HOST_ID='$hostidIn', 
                                        CITY='$cityIn', 
                                        ADDRESS='$addressIn', 
                                        PRICE='$priceIn' WHERE LISTING_ID=$idIn";

            mysqli_query($connect, $sql) 
                        or die("An issue has occured in UPDATE clause: ".mysqli_error($connect));

            header("Location: list_all.php");

            mysqli_close($connect);            
        ?>
    </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>