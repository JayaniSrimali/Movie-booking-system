<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change/Delete</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <fieldset>
        <legend>Cancel booking</legend>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <h2>Enter the booking ID : </h2><span><input type="text" name="id"></span>
            <br><br>
           
            <div style="height: 30px;"></div>
            <div class="row">
                <div class="col-5">
                    <button class="bdr col-1" type="submit" name="submit" type="submit">
                        <h2>Delete</h2>
                    </button>
                </div>
            </div>


        </form>
    </fieldset>


    <?php

    require 'config.php';

    if (isset($_POST["submit"])) {

        $ids = $_POST["id"];
        

        $sql = "DELETE FROM showtime WHERE BookingID='$ids'";

        $con->query($sql);

        if ($con->query($sql)) {
        } else {

            echo ("Failed");
        }
    }



    $con->close();
    ?>

    <div style="height: 50px;"></div>

</body>

</html>