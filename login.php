<?php
include("utilitis/config.php");

if(isset($_POST['submit'])){
    
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    // Check connection
    //echo $username;
    //echo $password;

    $query = "select * from user where username = '$username' and password = '$password'";
    
    $result = mysqli_query($conn,$query);
    $result1 = mysqli_fetch_assoc($result);

    if($result1){

        
        $_SESSION["user_id"] = $result1["user_id"];
        $_SESSION["user_role"] = $result1["role"];

         print_r($_SESSION["user_id"]);
        // print_r($_SESSION["user_role"]);
        // die;
        if($_SESSION["user_role"] == "user" ){
        	header("Location: index.php");
        }
        else{
        	header("Location:adminpanel.php");
        }


        // if($_SESSION["user_role"] == "admin" || $_SESSION["user_role"] ="superadmin"){
        // 	print_r("Inside the user and superadmin------------");
        // 	print_r($_SESSION["user_id"]);
        //     print_r($_SESSION["user_role"]);
        // die;
        // 	header("Location:adminpanel.php");
        // }
        // else if($_SESSION["user_role"] == "user" ){
        // 	header("Location: index.php");
        // }


    }
    else{
			$message = "Username and/or Password incorrect.\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
		  
        //header("Location:login.php");
        
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
.social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 .social {
     -webkit-transform: scale(0.8);
     /* Browser Variations: */
     
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }

/*
    Multicoloured Hover Variations
*/
 
 #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #4099FF;
 }
 #social-gp:hover {
     color: #d34836;
 }
 #social-em:hover {
     color: #f39c12;
	 
 }


body{
	 background-image:url("images/adm3.jpg");
 }</style>
<title>Ecommerce</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.63321.js"></script>
<script type="text/javascript">
</script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

</head>
<body>
<div class="wrap">
<div class="header">
	<div class="logo">
		<a href="login.php"><img src="images/logo.png" alt=""> </a>
	</div>
	<div class="header-right">
	<div class="contact-info">
		<ul>
		<br>
		<br>
			<li><b><span style="color:white;">HELP LINE</span></b></li>
			<li><b><span style="color:white;">+91 9167872926</span></b></li>
		</ul>
	</div>
	<nav class="cl-effect-1">
	 	 <ul class="nav">
        <a href="index.php" title="">Home</a></li>
	    <a href="login.php">Login</a></li>
		</nav>
	 </div>
	 </div>
	<div class="clear"></div>
</div>
 <center><h2 style="font-size:300%;"><span style="color:red;">Welcome </span><br>To<br> <span style="color:red;">Cart2Marketplace</h2></center>


			   <div class="container">
			<section class="main">
				<form class="form-2" name="myform" action = "" method = "POST">
				<center><h3>*Please Sign-Up if You Don't have Account with Us</h3></center><br>
					<h1><center><span class="log-in"><a href="login.php" >Log in</a></span> or <span class="sign-up"><a href="signup.php" >sign up</a></span></center></h1>
					<p class="float">
						<label for="login"><i class="icon-user"></i>Username</label>
						<input type="text" placeholder="Username or email" name="username" id="emailadd" required>
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Password</label>
						<input type="password" name="password" placeholder="Your Password" id="password" class="showpassword" required>
					</p>
					<p class="clearfix"> 
						<a href="http://www.facebook.com/" class="log-twitter">Log in with Facebook</a>    
						<input type="submit" name="submit" value="Log in" >
					</p>
				</form>​​
			</section>
			
        </div>	
			   <div class="clearfix"> </div>
			   
		
	
  <div class="clear"></div>
</div>
</div>


</body>
<footer>

<div class="footer-bg">
<div class="wrap">
<div class="footer">
      <div class="container">
    <hr>
        <div class="text-center center-block">
            <p class="txt-railway"></p>
            
                <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:your@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
    <hr>
</div> 
	<div class="footer1">
		<p>All Rights Reserved | Design by&nbsp; <a href=""> Cart2Marketplace </a></p>
	</div>
</div>
</div>
</div>
</footer>
</html>

