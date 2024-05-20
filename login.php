<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="logstyle.css"/>
</head>

<body background="pop.jpg">
	<div class="text-block"> 
		<div class="wrapper"> 
			<div class="form-box login" >
				<h2 align="center">Login</h2>
				<form action="login.php" method="post">
					<div class="input-box">
						<span class="details"></span>
						<input type="text" name="email" placeholder="Email" required>
					</div><br>
					<div class="input-box">
						<span class="details"></span>
						<input type="password" name="password" placeholder="Password" required>
					</div><br>
					<div class="remember-forget">
						<label><input type="checkbox" name="remember">Remember me</label>
						<a href="password_reset.php">Forgot Password?</a>
					</div><br>
					<div class="btun1">
						<button type="submit" class="btn"><a href="profile.html">Login</button>
						<div class="login-register">
							<p><a href="#"></a></p>
						</div><br><br>
					</div>
					<div class="btun2">
						<button type="submit" class="btn">Sign in with Facebook</button>
						<div class="login-register">
							<p><a href="#"></a></p>
						</div>
					</div>
					<div class="btun3">
						<button type="submit" class="btn">Sign in with Google</button>
						<div class="login-register">
							<p><a href="#"></a></p>
						</div>
					</div>
					<div class="acc">
						You don't have an account? <a href="registration.php">Sign up</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie booking system";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

   
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        $row = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["user_type"] = $row["user_type"];

        
        header("Location: home.php");
        exit();
    } else {
        
        echo "Invalid email or password.";
    }
    mysqli_close($conn);
}
?>

</body>
</html>
