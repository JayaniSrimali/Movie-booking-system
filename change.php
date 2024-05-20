<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change/Delete</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <fieldset>
        <legend>Change datails</legend>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <h2>Enter the booking ID : </h2><span><input type="text" name="id"></span>
            <br><br>
            <h2>New Theatre : </h2><span>Theatre 1 :<input type="radio" name="theatre" value="Theatre 1" onclick="times(1);"> Theatre 2 :<input type="radio" name="theatre" value="Theatre 2" onclick="times(2);"></span>
            <br><br>
            <h2>New time : </h2>
            <div class="row">

                <div class="col-2">

                    <fieldset>
                        <legend>Theatre 1 only</legend>

                        <ul id="times">
                            <li><input type="radio" name="tm" value="10:00 AM">10:00 AM</li>
                            <li><input type="radio" name="tm" value="2:00 PM">2:00 PM</li>
                            <li><input type="radio" name="tm" value="6:00 PM">6:00 PM</li>
                        </ul>

                    </fieldset>

                </div>

                <div class="col-1"></div>

                <div class="col-2">

                    <fieldset>
                        <legend>Theatre 2 only</legend>

                        <ul id="times">
                            <li><input type="radio" name="tm" value="11:00 AM">11:00 AM</li>
                            <li><input type="radio" name="tm" value="3:00 PM">3:00 PM</li>
                            <li><input type="radio" name="tm" value="7:00 PM">7:00 PM</li>
                        </ul>

                    </fieldset>

                </div>

            </div>
            <div style="height: 30px;"></div>
            <div class="row">
                <div class="col-5">
                    <button class="bdr col-1" type="submit" name="submit" type="submit">
                        <h2>Update</h2>
                    </button>
                </div>
            </div>


        </form>
    </fieldset>


    <?php

    require 'config.php';

    if (isset($_POST["submit"])) {

        $ids = $_POST["id"];
        $time = $_POST["tm"];
        $theatres = $_POST["theatre"];

        $sql = "UPDATE showtime SET Theatre='$theatres',Time='$time' WHERE BookingID='$ids'";

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