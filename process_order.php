<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER SUMMARY</title>
    <link rel="stylesheet" type="text/css" href="summary.css">
    <style>
        body {
            background-image: url('movie-summary-background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 90% 90%;
            margin: 0;
            padding: 0;
        }

    </style>
</head>
<body>
     <!--header-->
	<div class=" header">
		
		<div class="bg" style="background-color:black">
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
                <img src="account-profile-user-icon--icon-search-engine-10.png" style="height: 40px;width: 40px; background-color: white;">
            </center>
        </div>

    </div><!--header-->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie booking system";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $movieName = $_POST["movie_name"];
    $movieLanguage = $_POST["movie_language"];
    $movieDate = $_POST["movie_date"];
    $theatre = $_POST["theatre"];
    $ticketNumber = $_POST["ticket_number"];
    $ticketType = $_POST["ticket_type"];
    $ticketPrice = $_POST["ticket_price"];
    $numOfTickets = $_POST["num_of_tickets"];
    $userID = $_POST["user_id"];
    $userName = $_POST["user_name"];
    $userAddress = $_POST["user_address"];
    $userPhone = $_POST["user_phone"];
    $userEmail = $_POST["user_email"];

    
    $sql = "INSERT INTO orders (movie_name, movie_language, movie_date, theatre, ticket_number, ticket_type, ticket_price, num_of_tickets, user_id, user_name, user_address, user_phone, user_email)
            VALUES ('$movieName', '$movieLanguage', '$movieDate', '$theatre', '$ticketNumber', '$ticketType', '$ticketPrice', '$numOfTickets', '$userID', '$userName', '$userAddress', '$userPhone', '$userEmail')";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>

<!--footer-->
<footer class="bdr1" style="height: 400px;">
    <div class="bg">
        <div class="col-2">
            <center>
                <h3 style="color: aliceblue;">About us</h3>
  
                <h4 style="color: aliceblue;" >
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
            
               <h3 style="color: aliceblue;align-items: center;justify-content: center;display: center;"> Follow us on</h3>
            
        </div>
    </div>
    <div class="bg">
        <div class="col-5" style="align-items: center;justify-content: center;display: flex;">
            
          <div class ="set-1">
                <img src="social-media-removebg.png" alt="" style="width: 200px;height: 130px;padding-top: 5px;">
              </div>
        </div>
    </div>
  </footer>

<script src="summary.js"></script>
</body>
</html>