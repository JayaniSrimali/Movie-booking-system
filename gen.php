<!DOCTYPE html>
<html>

<head>
    <title>
        CINEMAGE
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


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

                <input type="search" name="search" style="width: 100%; height: 45px;">

            </div>

            <div class="col-1" style=" padding-top: 5px;">

                <button name="submit" value="submit" type="submit" style="height: 45px;" onclick="popup();" id="sb" onmouseover="sel('sb');" onmouseout="unsel('sb');">
                    <img src="search-icon-png-21.png" style="height: 25px;width: 25px;">
                </button>

            </div>
        

   

        

        <div class="col-1" style="padding-top: 5px;">
            <center>
                <img src="account-profile-user-icon--icon-search-engine-10.png" style="height: 40px;width: 40px; background-color: blueviolet;">
            </center>
        </div>

    </div>

    <div style="height: 50px;"></div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div class="row" style="height: 50px; border-style: solid; border-color:blueviolet;">
            <button class="col-1" type="submit" name="submit" value="Action" id="g1" onmouseover="sel('g1')" onmouseout="unsel('g1')" style="background-color: white;">
                <h2>
                    Action
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Adventure" id="g2" onmouseover="sel('g2')" onmouseout="unsel('g2')" style="background-color: white;">
                <h2>
                    Adventure
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Drama" id="g3" onmouseover="sel('g3')" onmouseout="unsel('g3')" style="background-color: white;">
                <h2>
                    Drama
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Comedy" id="g4" onmouseover="sel('g4')" onmouseout="unsel('g4')" style="background-color: white;">
                <h2>
                    Comedy
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Thriller" id="g5" onmouseover="sel('g5')" onmouseout="unsel('g5')" style="background-color: white;">
                <h2>
                    Thriller
                </h2>
            </button>

        </div>

        <div style="height: 20px;"></div>

        <div class="row" style="height: 50px; border-style: solid; border-color:blueviolet;">
            <button class="col-1" type="submit" name="submit" value="Romance" id="g6" onmouseover="sel('g6')" onmouseout="unsel('g6')" style="background-color: white;">
                <h2>
                    Romance
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Horror" id="g7" onmouseover="sel('g7')" onmouseout="unsel('g7')" style="background-color: white;">
                <h2>
                    Horror
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Sci-fi" id="g8" onmouseover="sel('g8')" onmouseout="unsel('g8')" style="background-color: white;">
                <h2>
                    Sci-fi
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Fantasy" id="g9" onmouseover="sel('g9')" onmouseout="unsel('g9')" style="background-color: white;">
                <h2>
                    Fantasy
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Animation" id="g10" onmouseover="sel('g10')" onmouseout="unsel('g10')" style="background-color: white;">
                <h2>
                    Animation
                </h2>
            </button>

        </div>

        <div style="height: 20px;"></div>

        <div class="row" style="height: 50px; border-style: solid; border-color:blueviolet;">
            <button class="col-1" type="submit" name="submit" value="Mystery" id="g11" onmouseover="sel('g11')" onmouseout="unsel('g11')" style="background-color: white;">
                <h2>
                    Mystery
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Historical" id="g12" onmouseover="sel('g12')" onmouseout="unsel('g12')" style="background-color: white;">
                <h2>
                    Historical
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Documentry" id="g13" onmouseover="sel('g13')" onmouseout="unsel('g13')" style="background-color: white;">
                <h2>
                    Documentry
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Musical" id="g14" onmouseover="sel('g14')" onmouseout="unsel('g14')" style="background-color: white;">
                <h2>
                    Musical
                </h2>
            </button>

            <button class="col-1" type="submit" name="submit" value="Crime" id="g15" onmouseover="sel('g15')" onmouseout="unsel('g15')" style="background-color: white;">
                <h2>
                    Crime
                </h2>
            </button>

        </div>

    </form>

    <?php

    require 'config.php';

    if (isset($_POST["submit"])) {
        $gen = $_POST["submit"];

        $sql = "  SELECT m.Name,m.Description
                FROM movie m,movie_genre g 
                WHERE m.MovieID=g.MovieID AND Genre='$gen'";

        $arr = $con->query($sql);

        if ($arr) {
            if ($arr->num_rows > 0) {

                while ($row = $arr->fetch_assoc()) {

                    $Movie = $row['Name'];
                    $Des = $row['Description'];

                    echo ("<h2><a href='#'>" . $Movie . "</a></h2> <h2>Synopsis:</h2><h3>" . $Des . "</h3><br>=======================================================================");
                }
            } else {
                echo "No result";
            }
        } else {

            echo ("Error:" . $con->error);
        }
    }
    ?>

</body>

<script src="script.js"></script>

<footer class="bdr" style="height: 350px; background-color:black;">
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