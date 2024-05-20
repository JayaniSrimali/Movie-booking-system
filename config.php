<?php

$con=mysqli_connect("localhost","root","","myweb");

if($con->connect_error){
	
	die("database connection failed".$con->connect_error);
	
}/*else{echo("<h2 >Connected succesfully</h2>");}*/

?>