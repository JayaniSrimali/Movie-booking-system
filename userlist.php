<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin UI - User List</title>
    <link rel="stylesheet" href="usedetails.css" />
    <script src="usedetails.js"></script>

    <style>
        body {
            background-image: url('AdminUI.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
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
       
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "movie booking system";
        $conn = mysqli_connect($host, $username, $password, $database);

       
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        
        function sanitizeInput($conn, $input) {
            $input = trim($input);
            $input = mysqli_real_escape_string($conn, $input);
            return $input;
        }

      
        if (isset($_POST['delete_user'])) {
            $user_id = sanitizeInput($conn, $_POST['delete_user']);
            $sql = "DELETE FROM users WHERE id = '$user_id'";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('User deleted successfully.');</script>";
            } else {
                echo "<script>alert('Error deleting user: " . mysqli_error($conn) . "');</script>";
            }
        }

       
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

       
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<fieldset>";
                echo "<div class='container'>";
                echo "<div class='user-picture'>";
                echo "<img id='user-img' src='user.jpg' alt='User Picture'>";
                echo "</div>";
                echo "<div class='user-details'>";
                echo "<h2 class='user-id'>" . $row['user_id'] . "</h2>";
                echo "<p class='user-name'>" . $row['user_name'] . "</p>";
                echo "<p class='user-address'>" . $row['user_address'] . "</p>";
                echo "<p class='user-phone'>" . $row['user_phone'] . "</p>";
                echo "<p class='user-email'>" . $row['user_email'] . "</p>";
                echo "</div>";
                echo "<div class='buttons'>";
                echo "<form method='post'>";
                echo "<button class='remove-user' type='submit' name='delete_user' value='" . $row['id'] . "'>Remove User</button><br/>";
                echo "<button class='view-details'>View Details</button>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
                echo "</fieldset>";
                echo "<br>";
            }
        } else {
            echo "No users found.";
        }

       
        mysqli_close($conn);
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
          
             <h3 style="color: aliceblue;align-items: center;justify-content: center;display: center;"> Follow us on</h3></center>  
          
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

</body>
</html>
