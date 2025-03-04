<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="style.css" />
    <title>Responsive Registration Form</title>
</head>
<body background="pop.jpg">

<form action="registration.php" method="POST" enctype="multipart/form-data">

    
</form>

    <div class="container">
        <div class="transbox">
            <div class="title">
                <h2><b>Enter your details below to register</b></h2>
            </div>
            <form action="registration.php" method="POST" enctype="multipart/form-data">
                <div class="user-details">
                    <div class="register-details">
                        <span class="regiter-title">Register As,</span><br>
                        <input type="radio" id="user" name="user_type" value="User" required>
                        <label for="user">User</label><br>
                        <input type="radio" id="theater" name="user_type" value="Theater" required>
                        <label for="theater">Theater</label><br>
                    </div>

                     <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" name="first_name" placeholder="Enter your first name" required>
                </div>
                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" name="last_name" placeholder="Enter your last name" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
				<div class="input-box">
                        <span class="details">User Image</span>
                        <input type="file" name="user_image" accept="image/*" required>
                    </div>
                <div class="gender-details">
                    <span class="gender-title">Gender</span><br>
                    <input type="radio" id="male" name="gender" value="Male" required>
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="Female" required>
                    <label for="female">Female</label><br>
                </div>
                <div class="input-box">
                    <span class="details">NIC</span>
                    <input type="text" name="nic" placeholder="Enter your NIC number" required>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="address" placeholder="Enter your address" required>
                </div>
                <div class="input-box">
                    <span class="details">Contact Number</span>
                    <input type="text" name="phone_number" placeholder="Enter your phone number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" name="confirm_password" placeholder="Confirm your password" required>
                </div>

                <div class="payment-details">
                    <span class="payment-title">Choose a subscription</span><br>
                    <input type="radio" id="monthly" name="subscription" value="Monthly" required>
                    <label for="monthly">Monthly</label><br>
                    <input type="radio" id="6 month" name="subscription" value="6 Month" required>
                    <label for="6 month">6 Month</label><br>
                    <input type="radio" id="annual" name="subscription" value="Annual" required>
                    <label for="annual">Annual</label>
                </div>

                    <div class="button">
                        <input type="submit" value="Create">
                    </div>

                    <p>Existing Users? <a href="login.html">LOGIN</a></p>
                </div>
            </form>
        </div>
    </div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie booking system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userType = $_POST["user_type"];
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];
    $userImage = $_FILES["user_image"]["name"]; 
	
    $gender = $_POST["gender"];
    $nic = $_POST["nic"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["phone_number"];
    $password = $_POST["password"];
    $subscription = $_POST["subscription"];

    
    $sql = "INSERT INTO users (user_type, first_name, last_name, email, user_image, gender, nic, address, phone_number, password, subscription) VALUES ('$userType', '$firstName', '$lastName', '$email', '$userImage', '$gender', '$nic', '$address', '$phoneNumber', '$password', '$subscription')";

    if ($conn->query($sql) === true) {
        echo "User registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
</body>
</html>
