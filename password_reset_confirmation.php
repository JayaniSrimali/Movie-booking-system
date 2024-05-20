<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $email = $_POST['email'];

    
    $token = generateToken(); 

   
    saveToken($email, $token); 

    
    $subject = "Password Reset Instructions";
    $message = "Dear user,\n\n";
    $message .= "You have requested to reset your password. Please click the link below to reset your password:\n\n";
    $message .= "Reset Password: http://example.com/reset_password.php?email=" . urlencode($email) . "&token=" . urlencode($token) . "\n\n";
    $message .= "If you didn't request a password reset, please ignore this email.\n\n";
    $message .= "Best regards,\nThe Password Reset Team";

    
    $headers = "From: noreply@example.com"; 
    $result = mail($email, $subject, $message, $headers);

    if ($result) {
       
        echo "An email has been sent to your registered email address with instructions on how to reset your password. Please check your inbox and follow the provided instructions.";
    } else {
       
        echo "Failed to send the password reset email. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<link rel="stylesheet" href="style.css" />
    <title>Password Reset Confirmation</title>
    
</head>
<body background="pop.jpg">
<div class="container">
        <div class="transbox">
    <h2>Password Reset Instructions Sent</h2>
    <p>An email has been sent to your registered email address with instructions on how to reset your password. Please check your inbox and follow the provided instructions.</p>
    <p>If you don't receive the email within a few minutes, please check your spam folder.</p>
    <p>Once you have reset your password, you can <a href="login.html">login here</a>.</p>
	</div>
	</div>
</body>
</html>
