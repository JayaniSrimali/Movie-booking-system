<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="prostyle.css" />
  <script src="script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body background="pop.jpg">
<!--header-->
<div class="header">
    <div class="bg" style="background-color: black">
        <div class="col-1" style="padding-top: 5px;">
            <center>
                <img src="logo.jpg" style="height: 45px; width: 80%;">
            </center>
        </div>
        <div class="col-2">
            <ul class="nav" style="padding-top: 5px;">
                <li class="li1"><a href="index.html" style="color: aliceblue;">Home</a></li>
                <li class="li1"><a href="genre.html" style="color: aliceblue;">Genre</a></li>
                <li class="li1"><a href="help.html" style="color: aliceblue;">Help</a></li>
            </ul>
        </div>
        <div class="col-4" style="padding-top: 5px;">
            <input type="search" style="width: 100%; height: 45px;">
        </div>
        <div class="col-1" style="padding-top: 5px;">
            <button style="height: 45px;" onclick="popup();" id="sb" onmouseover="sel('sb');" onmouseout="unsel('sb');">
                <img src="search-icon-png-21.png" style="height: 25px;width: 25px;">
            </button>
        </div>
        <div class="col-1" style="padding-top: 5px;">
            <center>
                <img src="account-profile-user-icon--icon-search-engine-10.png" style="height: 40px;width: 40px; background-color: white;">
            </center>
        </div>
    </div>
</div>
<!--header-->
<div class="container">
  <div class="transbox">
    <h2 align="center">User Profile</h2>

   
    <div class="text-block">
      <div class="pos_cen">
        
        <div class="personal-details">
          <h6>First Name:</h6>
          <h6>Last Name:</h6>
          <h6>Address:</h6>
          <h6>Contact No:</h6>
        </div>

        
        <div class="image-container">
          <img class="img_deg" src="person1.jpg">
        </div>
      </div>

      <h6>Favorite Movie:</h6>
      <select id="favorite-movie" name="favorite-movie">
        <option value="movie1">Movie 1</option>
        <option value="movie2">Movie 2</option>
        <option value="movie3">Movie 3</option>
      </select>

      <h6>Cast:</h6>
      <select id="cast" name="cast">
        <option value="cast1">Cast 1</option>
        <option value="cast2">Cast 2</option>
        <option value="cast3">Cast 3</option>
      </select>

      
      <div id="image-gallery">
        <img id="cast1" class="cast-image" src="act1.jfif">
        <img id="cast2" class="cast-image" src="act2.jfif">
        <img id="cast3" class="cast-image" src="act3.jfif">
      </div>
    </div>
  </div>
</div>

<!--footer-->
<footer class="bdr1" style="height: 400px;">
  <div class="bg">
    <div class="col-2">
      <center>
        <h3 style="color: aliceblue;">About us</h3>
        <h4 style="color: aliceblue;">
          Unleashing the Magic of Movies. Streamline your movie bookings with our user-friendly platform. Discover, book, and enjoy your favorite films hassle-free. Your ultimate destination for cinematic experiences.
        </h4>
      </center>
    </div>
    <div class="col-1">
      <center>
        <h3 style="color: aliceblue;">Services</h3>
        <h4 style="color: aliceblue;">
          Cinemage offers seamless online movie booking, personalized recommendations, secure transactions, and a vibrant community of movie enthusiasts.
          Discover the latest releases, book tickets with ease, and engage in discussions about your favorite films.
          Unleash the power of movies with Cinemage.
        </h4>
      </center>
    </div>
    <div class="col-2">
      <center>
        <h3 style="color: aliceblue;">Privacy policy</h3>
        <h4 style="color: aliceblue;">
          At Cinemage, we prioritize the protection of your personal information.
          Rest assured that we adhere to strict privacy standards, ensuring your data is secure and used solely for enhancing your movie booking experience.
          Your privacy is our commitment.
        </h4>
      </center>
    </div>
  </div>
  <div class="bg">
    <div class="col-5">
      <h3 style="color: aliceblue;">Follow us on</h3>
    </div>
  </div>
  <div class="bg">
    <div class="col-5" style="align-items: center;justify-content: center;display: flex;">
      <img src="social-media-removebg.png" alt="" style="width: 200px;height: 130px;padding-top: 5px;">
    </div>
  </div>
</footer>
</body>
</html>
