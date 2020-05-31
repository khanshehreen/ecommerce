
<?php

include_once("utilitis/config.php");
// echo "<pre>";
// print_r($_SESSION);
// die;
include_once("utilitis/checksession.php");

$rs_results = mysqli_query($conn,"Select * from user");
include_once('adminpanel.php');

?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
</head>
<body>
    <?php
    include_once('adminpanel.php');
    ?>
	
<div class="table-responsive">
    <h2 align="center"><nav class="cl-effect-20"><span data-hover="Members"><b>User list</b</span></nav></h2>


    <table class = "table" border="2" align="center">
        <thead>
        <th><b>UserID</b> </th>
        <th><b>Username</b></th>
        <th><b>Name</b></th>
        <th><b>Status</b></th>
        <th><b>Address</b></th>
		<th><b>Role</b></th>

        </thead>

        <tbody>
        <?php
        while ($rs_res = mysqli_fetch_assoc($rs_results))
        {
        ?>
        <tr>

            <td><b><?php echo $rs_res["user_id"]?></b></td>
            <td><b><?php echo $rs_res["username"]?></b></td>
            <td><b><?php echo $rs_res["name"]?></b></td>
            <td><b><?php echo $rs_res["status"]?></td><td><?php echo $rs_res["address"]?></b></td>
            <td><b><?php echo $rs_res["role"]?></b></td>
            
            
           

            <?php if($_SESSION['user_role']=='superadmin') { ?>
			 <td><a href="admin_edituser.php?user_id=<?php echo $rs_res["user_id"];?>"><b>Edit</b></a></td>
            <td><a href="admin_deleteuser.php?user_id=<?php echo $rs_res["user_id"];?>"><b>Delete</b></a></td> 
            <?php } ?>           
        </tr>
        

        <?php }?>
        <tr>
        	<td colspan="6" align="center">
        		<b><a href="admin_adduser.php"><input type="button" name="add" value="Add User"></a></b>
        	</td>
        </tr>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



