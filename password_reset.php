<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Password Reset</title>
    <link rel="stylesheet" href="logstyle.css"/>
</head>
<body background="pop.jpg">
    <div class="text-block"> 
        <h2>Password Reset</h2>
        <p>Enter your email address below to initiate the password reset process:</p>
        <form action="password_reset.php" method="post">
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="reset">
                <input type="submit" value="Reset Password">
            </div>
        </form>
    </div>
	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

   
    header("Location: password_reset_confirmation.html");
    exit;
}
?>
</body>
</html>
