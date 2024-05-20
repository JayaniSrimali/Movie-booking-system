
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
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

    
    $date = sanitizeInput($conn, $_POST['date']);
    $time = sanitizeInput($conn, $_POST['time']);
    $category = sanitizeInput($conn, $_POST['category']);
    $seats = implode(',', $_POST['seats']);

   
    $sql = "INSERT INTO bookings (date, time, category, seats) VALUES ('$date', '$time', '$category', '$seats')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Booking created successfully.');</script>";
    } else {
        echo "<script>alert('Error creating booking: " . mysqli_error($conn) . "');</script>";
    }

  
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="seat.css" />
    <title>Movie Seat Booking</title>
    <style>
        body {
         background-image: url('3d-glasses-popcorn-assortment.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed; 
         background-size: 100% 100%;
        }
        </style>
  </head>
  <body>
        
    <fieldset>
    <div class="booking-details1">
        <label for="date">DATE:</label>
        <input type="date" id="date">
      </div>
    <div class="booking-details2">
      <label> SELECT A TIME:</label>
      <select id="movie">
        <option >02.30 PM</option>
        <option >06.30 PM</option>
        <option>10.00 PM</option>
      </select>
    </div>

    <div class="booking-details3">
        <label>SELECT A CATEGORY:</label>
        <select id="category">
          <option value="12">Front Row($12)</option>
          <option value="8">Normal($8)</option>
          <option value="7">Balcony($7)</option>
        
        </select>
      </div>
    <hr>
  
   </body>
    <div class="container">
      <div class="screen"></div>

      <div class="row">
        <div class="seat "></div>
        <div class="seat Front Row($12)"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

       <div class="row">
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
    </div>
    <hr>
    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Sold</small>
      </li>
    </ul>
<center>
   <p class="text">
      You have selected <span id="count"> 0 </span> seat for a price of $.<span id="total"> 0 </span >
    </p>
</center>
   <center><a href = "summary.html"> <button onclick= "myFunction()">Sumbit</button> </a></center>
</fieldset>

    <script src="seat.js"></script>
<form method="POST" action="booking.php">

  </body>
</html>

