<?php
require "/libs/db.php";
if (isset($_POST["email"] )){ 
$email=$_POST["email"]; 
} 
if (isset($_POST["password"] )){ 
$password=$_POST["password"]; 
} 



$sql = "INSERT INTO `users` (email, password) VALUES ('$email', '$password')";
$result = mysqli_query($mysqli, $sql);
                    
        
if($result==true){
	echo 0;
	

} else{
	echo 1;
	
}

?>
