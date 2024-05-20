<!DOCTYPE html>
<html>

<head>
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
        <button class="col-1" style="padding-top: 5px;background-color:blueviolet">
            <center>
                <img src="account-profile-user-icon--icon-search-engine-10.png" style="height: 40px;width: 40px; background-color: blueviolet;">
            </center>
            <a href="login.html">Log In</a>
        </button>

    </div>

    <div class="row">
        <div style="height: 500px; width: 100%; background-color: brown;">
            <img src="pascal-blanche-dune-movie-dune-series-artwork-science-fiction-hd-wallpaper-preview.jpg" style="height: 100%;width: 100%;" id="img">
        </div>
    </div>

    <div style="background-color: blueviolet;">
        <center>
            <div class="col-2">

                <input type="radio" name="mv" onclick="firsthome(1);">
                <input type="radio" name="mv" onclick="firsthome(2);">
                <input type="radio" name="mv" onclick="firsthome(3);">
                <input type="radio" name="mv" onclick="firsthome(4);">
                <input type="radio" name="mv" onclick="firsthome(5);">
                <input type="radio" name="mv" onclick="firsthome(6);">

            </div>
        </center>
    </div>
    <div style="height: 10px;"></div>

    <div class="row" style="background-color: blueviolet;">
        <div class="col-5">
            <center>
                <h2>
                    Popular movies
                </h2>
            </center>
        </div>
    </div>

    <div class="row" style="height: 350px;">

        <div class="col-1 bdr" style="background-color: aqua;">
            <img src="Evil_Dead_Rise.jpg" style="height: 100%;width: 100%;" alt="">
            <a style="color: white;" href="Evil Dead Rise.html">Evil dead rise</a>
        </div>

        <div class="col-1 bdr" style="background-color: antiquewhite;">
            <img src="john-wick-movies-movie-poster-wallpaper-preview.jpg" style="height: 100%;width: 100%;" alt="">
            <a style="color: white;" href="johnwick.html">John wick</a>
        </div>

        <div class="col-1 bdr" style="background-color: aquamarine;">
            <img src="fxhome.jfif" style="height: 100%;width: 100%;" alt="">
            <a style="color: white;" href="Fast X(2023).html">Fast X</a>
        </div>

        <div class="col-1 bdr" style="background-color: aqua;">
            <img src="avngers.jfif" style="height: 100%;width: 100%;" alt="">
            <a style="color: white;" href="Guardians of the Galaxy Vol. 3.html">Guardians of the galaxy</a>
        </div>

        <div class="col-1 bdr" style="background-color: antiquewhite;">
            <img src="The-Little-Mermaid.webp" style="height: 100%;width: 100%;" alt="">
            <a style="color: white;" href="the little mermaid (2023).html">The little mermaid</a>
        </div>

        <div class="col-1 bdr" style="background-color: aquamarine;">
            <img src="don.jfif" style="height: 100%;width: 100%;" alt="">
            <a style="color: white;" href="#">Death on nile</a>
        </div>

    </div>

    <div style="height: 10px;"></div>

    <div class="row" style="background-color: blueviolet;">
        <div class="col-5">
            <div style="background-color: blueviolet;">
                <center>
                    <div class="col-2">



                    </div>
                </center>
            </div>
        </div>
    </div>

    <div style="height: 100px;"></div>

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