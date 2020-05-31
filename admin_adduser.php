 <?php

  include_once ('utilitis/config.php');
  include_once("utilitis/checksession.php");
  

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
  <div class="table-responsive">
    <?php include_once( 'adminpanel.php'); ?>
    <form action = "" method = "POST" enctype="multipart/form-data">
       <table class = "table" border="2">
       <tr>
            <td>User name: </td>
            <td> <input type="text" name="username" required></td>
       </tr>
        <tr>
            <td>Password</td>
            <td> <input type="password" name="password"  required  minlength="6" ></td>
       </tr>
	   <tr>
            <td>Enter Password Again:</td>
            <td> <input type="password" name="repassword"  required minlength="6"></td>
       </tr>
        <tr>
            <td>Status</td>
            <td> <input type="number" min="0" max="1" name="status"  required></td>
       </tr>
       <tr>
            <td>Role</td>
            <td> <input type="text" name="role"  required></td>
       </tr>
       
           <td colspan="2" align="center"> <input type="submit" name="submit" class="myButton" value="Add User"></td>
       </tr>

           
       </table>
        
    </form>
</div>
</body>
</html>

<?php
 include ('utilitis/config.php'); 

  
  if(isset($_POST['submit'])){


     

    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $role = $_POST['role'];
    
if($role=="superadmin"){
	$message = "You Dont have Rights";
    echo "<script type='text/javascript'>alert('$message');</script>";
	
}
    else
	{
   $query ="insert into user(username,password,status,role) values('$username','$password','$status','$role')";
    

    
    echo $query;
    
  
    $result = mysqli_query($conn,$query) or die ("Error");

    if($result){
      header("Location: admin_viewuser.php");
    }
  
    
   
    // if ($res) {
        
    //     header("Location:login.php");
    // }  
   //header("Location:login.php");
	}
    
}

 
        
   

?>
