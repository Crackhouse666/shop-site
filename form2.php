<?php
@ob_start();
session_start();
require "/libs/db.php";

if (isset($_POST["email_entry"] )){ 
$email=$_POST["email_entry"]; 
} 
if (isset($_POST["password_entry"] )){ 
$password=$_POST["password_entry"]; 
}


$sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
$result = mysqli_query($mysqli, $sql);



if (mysqli_num_rows($result)!=0) {
	$arr=mysqli_fetch_assoc($result);
	$_SESSION['id']=$arr['id'];
	$_SESSION['email']=$arr['email'];
	$_SESSION['password']=$arr['password'];
	echo 0;
	
}
else{
	echo 1;
	
}

?>