<?php
include("utilitis/config.php");

if(isset($_POST['submit'])){
	$name = addslashes($_POST['name']);
	$address = addslashes($_POST['address']);
    $email = addslashes($_POST['emailadd']);
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
	$repassword = addslashes($_POST['repassword']);
    $query = "insert into user(name,address,email,username,password,status,role) value('$name','$address','$email','$username','$repassword',1,'user')" ;
    $result = mysqli_query($conn,$query) or die("User Name Redundant");
    $result1 = mysqli_fetch_assoc($result);
   	header("Location:index.php");  
}	
 else 
 {
	 header("Location:signup.php");
 }
 


?>