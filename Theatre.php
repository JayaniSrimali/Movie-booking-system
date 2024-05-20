<!DOCTYPE html>
<html>

<head>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E5E8E8;
        }

        #header {
            background-color: #333;
            padding: 20px;
            color: #fff;
            text-align: center;
        }

        #search-bar {
            margin: 20px;
            text-align: center;
        }

        #calendar {
            margin: 20px;
            text-align: center;
        }

        #movie-details {
            margin: 20px;
        }

        .theater {
            margin: 20px;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .theater-info {
            margin-top: 10px;
            display: none;
        }

        .theater-info p {
            margin-bottom: 5px;
        }

        .theater .info-button {
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .theater .info-button:hover {
            background-color: #555;
        }
    </style>

    <title>
        CINEMAGE
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: black;">


    <div class="row" style="background-color:blueviolet">

        <div class="col-1" style="padding-top: 5px ;">

            <center>
                <img src="logo.jpg" style="height: 45px; width: 80%;">
            </center>

        </div>

        <div class="col-2">


            <ul class="nav" style="padding-top: 5px;">

                <li class="li1"><a href="index.php" style="color: aliceblue;">Home</a></li>
                <li class="li1"><a href="gen.php" style="color: aliceblue;">Genre</a></li>
                <li class="li1"><a href="help.html" style="color: aliceblue;">Help</a></li>

            </ul>


        </div>

        <div class="col-4" style="padding-top: 5px;">

            <input type="search" style="width: 100%; height: 45px;">

        </div>

        <div class="col-1" style=" padding-top: 5px;">

            <button style="height: 45px;" onclick="popup();" id="sb" onmouseover="sel('sb');" onmouseout="unsel('sb');">
                <img src="search-icon-png-21.png" style="height: 25px;width: 25px;">
            </button>

        </div>
        <div class="col-1" style="padding-top: 5px;">
            <center>
                <img src="account-profile-user-icon--icon-search-engine-10.png" style="height: 40px;width: 40px; background-color: blueviolet;">
            </center>
        </div>

    </div>

    <div id="header">
        <h1>Movie Showtimes</h1>
    </div>

    <div class="row">
        <div class="col-5" style="align-content: center;justify-content:center;display:flex;">

            <button onclick="dat()" style="background-color: #333;color:aliceblue" class="bdr">Refresh Date:</button>
            <p id="date" style="color:aliceblue" onclick="dat();">---------</p>

        </div>
    </div>

    <div class="row"></div>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div id="theaters col-5">
            <div class="theater">
                <input type="radio" name="tn" value="Theatre 1">
                <h3>Theater 1</h3>
                <p>Showtimes:</p>
                <ul>
                    <li><input type="radio" name="tm" value="10:00 AM">10:00 AM</li>
                    <li><input type="radio" name="tm" value="2:00 PM">2:00 PM</li>
                    <li><input type="radio" name="tm" value="6:00 PM">6:00 PM</li>
                </ul>

            </div>

            <input type="hidden" name="bookId" value="<?php echo uniqid(); ?>">

            <div class="theater">
                <input type="radio" name="tn" value="Theatre 2">
                <h3>Theater 2</h3>
                <p>Showtimes:</p>
                <ul>
                    <li><input type="radio" name="tm" value="11:00 AM">11:00 AM</li>
                    <li><input type="radio" name="tm" value="3:00 PM">3:00 PM</li>
                    <li><input type="radio" name="tm" value="7:00 PM">7:00 PM</li>
                </ul>

            </div>

            <center>
                <button class="bdr" type="submit" name="submit" value="submit" style="height: 50px;width: 120px;">
                    <h2>Submit</h2>
                </button>
            </center>
        </div>

    </form>

    <div style="height: 50px;"></div>

    <?php

    require "config.php";

    if (isset($_POST["submit"])) {
        $id = $_POST["bookId"];
        $time = $_POST["tm"];
        $theatre = $_POST["tn"];

        $sql = "INSERT INTO showtime
                values('$id','$theatre','$time')";

        $con->query($sql);

        if ($con->query($sql)) {
        } else {

            echo ("Failed");
        }
    }


    $con->close();
    ?>

    <div style="background-color: #fff;" class="bdr">
        <?php

        echo ("<h2>ID:</h2><span>" . $id . "</span><br>" . "<h2>Time:</h2><span>" . $time . "</span><br>" . "<h2>Theatre:</h2><span>" . $theatre . "</span><br>");

        ?>
    </div>

    <div style="height: 10px;"></div>

    <div class="row">

        <div class="col-1"></div>

        <button class="bdr col-1" onclick="change(1);">
            <h3>Change bookings</h3>
        </button>

        <div class="col-1"></div>

        <button class="bdr col-1" onclick="change(2);">
            <h3>Delete bookings</h3>
        </button>

    </div>

    <div style="height: 50px;"></div>

</body>

<script src="script.js"></script>

<footer class="bdr" style="height: 350px;">
    <div class="row">
        <div class="col-2">
            <center>
                <h4 style="color: aliceblue;">About us</h4>

                <h5 style="color: aliceblue;">
                    Unleashing the Magic of Movies. Streamline your movie bookings with our user-friendly platform. Discover, book,
                    and enjoy your favorite films hassle-free. Your ultimate destination for cinematic experiences.
                </h5>

            </center>
        </div>
        <div class="col-1">
            <center>
                <h4 style="color: aliceblue;">Services</h4>

                <h5 style="color: aliceblue;">
                    Cinemage offers seamless online movie booking, personalized recommendations, secure transactions, and a vibrant community of movie enthusiasts.
                    Discover the latest releases, book tickets with ease, and engage in discussions about your favorite films.
                    Unleash the power of movies with Cinemage.
                </h5>
            </center>
        </div>
        <div class="col-2">
            <center>
                <h4 style="color: aliceblue;">Privacy policy</h4>

                <h5 style="color: aliceblue;">
                    At Cinemage, we prioritize the protection of your personal information.
                    Rest assured that we adhere to strict privacy standards, ensuring your data is secure and used solely for enhancing your movie booking experience.
                    Your privacy is our commitment.
                </h5>

            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-5">

            <h3 style="color: aliceblue;align-items: center;justify-content: center;display: flex;">Follow us on</h3>

        </div>
    </div>
    <div class="row">
        <div class="col-5" style="align-items: center;justify-content: center;display: flex;">

            <img src="social-media-removebg.png" alt="" style="width: 200px;height: 130px;padding-top: 0px;">

        </div>
    </div>
</footer>

</html>