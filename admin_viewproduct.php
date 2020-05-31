<?php
include("utilitis/config.php");
include_once("utilitis/checksession.php");

$rs_results = mysqli_query($conn,"Select * from product");
include_once( 'adminpanel.php'); 

?>

<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
	<?php
    include_once('adminpanel.php');
    ?>
    
	
 <div class = "table-responsive">   
    <h2 align="center"><b>Product List</b></h2>

        
    <table class = "table" border="2" align="center">

        <thead>

        <th><b>Product ID</b></th>
        <th><b>Category ID</b></th>
        <th><b>name</b></th>
        <th><b>Description</b></th>
        <th><b>Price</b></th>
        <th><b>Stock</b></th>
        <th><b>In sale</b></th>
        <th><b>Image</b></th>
        <th><b>Discount</b></th>
        <th colspan="2"><b>Action</b></th>
        </thead>

        <tbody>
        <?php
        while ($rs_res = mysqli_fetch_assoc($rs_results))
        {
        ?>
        <tr>
        	<td><b><?php
                echo stripslashes($rs_res["id"]);
                ?></b></td>
            <td><b><?php
                echo stripslashes($rs_res["category_id"]);
                ?></b></td>

            <td><b><?php echo $rs_res["name"]?></b></td>
            <td><b><?php echo $rs_res["description"]?></b></td>
            <td><b><?php echo $rs_res["price"]?></b></td>
            <td><b><?php echo $rs_res["stock"]?></b></td>
            <td><b><?php echo $rs_res["in_sale"]?></b></td>
            <td><b><?php echo $rs_res["image"]?></b></td>
            <td><b><?php echo $rs_res["discount"]?></b></td>
            
            <td><a href="admin_editproduct.php?id=<?php echo $rs_res["id"];?>"><b>Edit</b></a></td>
            <?php if($_SESSION['user_role']=='superadmin') { ?>
            <td><a href="admin_deleteproduct.php?id=<?php echo $rs_res["id"];?>"><b>Delete</b></a></td> 
            <?php } ?>           
        </tr>
        

        <?php }?>
        <tr>
        	<td colspan="6" align="center">
        		<b><a href="product_add.php"><input type="button" name="add" class="myButton" value="Add Product"></b></a>
        	</td>
        </tr>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



