
<?php

include_once("utilitis/config.php");
// echo "<pre>";
// print_r($_SESSION);
// die;
include_once("utilitis/checksession.php");

$rs_results = mysqli_query($conn,"Select * from checkout");
include_once('adminpanel.php');

?>

<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
    <?php
    include_once('adminpanel.php');
    ?>
	
<div class="table-responsive">
    <h2 align="center"><b>Checkout List</b></h2>


    <table class = "table" border="2" align="center">
        <thead>
        
        <th><b>Cart ID</b></th>
        <th><b>User ID</b></th>
        <th><b>Product ID</b></th>
        <th><b>Quantity</b></th>
        
        
        </thead>

        <tbody>
        <?php
        while ($rs_res = mysqli_fetch_assoc($rs_results))
        {
        ?>
        <tr>

            <td><b><?php echo $rs_res["id"]?></b></td>
            <td><b><?php echo $rs_res["user_id"]?></b></td>
            <td><b><?php echo $rs_res["product_id"]?></b></td>
            <td><b><?php echo $rs_res["quantity"]?></b></td>
            
            
            

            <?php if($_SESSION['user_role']=='superadmin') { ?>
            <td><a href="admin_deleteuser.php?user_id=<?php echo $rs_res["user_id"];?>"><b>Delete</b></a></td> 
            <?php } ?>           
        </tr>
        

        <?php }?>
      
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



