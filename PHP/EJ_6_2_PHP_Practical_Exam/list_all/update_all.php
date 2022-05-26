<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update information about your listing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container d-grid gap-3 bg-light">
        <a href="../index.html" class="btn btn-secondary col-3 mt-1" role="button">Back to Main Menu</a>
        <a href="list_all.php" class="btn btn-secondary col-3" role="button">Back to listings</a>
        <?php

            $listingID = trim(htmlspecialchars($_REQUEST["LISTING_ID"], ENT_QUOTES, "UTF-8"));
            
            $connect = mysqli_connect("localhost", "root", "219LP4gs-p!", "prex6_viajes") 
                            or die("Houston, we have a problem");
            
            $sql = "SELECT * FROM LISTING_DATA WHERE LISTING_ID = $listingID";

            $registro = mysqli_query($connect, $sql) 
                        or die("An issue has occured in UPDATE clause: ".mysqli_error($connect));

            if ($reg = mysqli_fetch_array($registro)) {
            ?>
            <h3 class="lead">Fill the information about the listing you're updating</h3>
                <form action="update_all2.php" method="post">
                    <!--LISTING_ID-->
                    <label for="listId"></label>
                    <input type="hidden" name="listId" id="listId"
                        value="<?php echo $reg['LISTING_ID'] ?>">
                    
                    <!--LISTING_NAME-->
                    <div class="form-group">
                        <label for="l_name" class="lead">Listing Name</label>
                        <input type="text" class="form-control" name="l_name" id="l_name" autofocus value="<?php echo $reg['LISTING_NAME'] ?>">
                    </div>

                    <!--CITY-->
                    <div class="form-group">
                        <label for="l_city" class="lead">City</label>
                        <input type="text" class="form-control" name="l_city" id="l_city" value="<?php echo $reg['CITY'] ?>">
                    </div>

                    <!--ADDRESS-->
                    <div class="form-group">
                        <label for="l_addr" class="lead" placeholder="Number, Name, Type">Address</label>
                        <input type="text" class="form-control" name="l_addr" id="l_addr" value="<?php echo $reg['ADDRESS'] ?>">
                    </div>

                    <!--PRICE-->
                    <div class="form-group">
                        <label for="l_price" class="lead">Price</label>
                        <input type="number" class="form-control" name="l_price" id="l_price" value="<?php echo $reg['PRICE'] ?>">
                    </div>

                    <!--HOST_ID-->
                    <div class="form-group">
                        <label for="h_id" class="lead">Select host</label>
                        <select name="h_id" class="form-control" id="h_id">
                            <?php
                            $connect = mysqli_connect("localhost", "root", "219LP4gs-p!", "prex6_viajes") 
                                            or die("Houston, we have a problem");

                            $sql = "SELECT HOST_NAME, HOST_ID FROM HOST_DATA ORDER BY 1";

                            $registros = mysqli_query($connect, $sql) 
                                    or die("An issue has occured in SELECT clause:".mysqli_error($connect));

                            while($reg=mysqli_fetch_array($registros)) {
                                if ($regH['HOST_ID'] == $reg['HOST_ID']) {
                                    echo "<option value='$reg[HOST_ID]' selected> $reg[HOST_NAME] </option>";
                                } else {
                                    echo "<option value='$reg[HOST_ID]'> $reg[HOST_NAME] </option>";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <input type="submit" value="Update listing" class="btn btn-primary btn-block mt-1">
                </form>
            <?php
            }
            mysqli_close($connect);            
        ?>

    </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>