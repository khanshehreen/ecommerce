<?php 
include("utilitis/config.php"); 
include_once("utilitis/checksession.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
    <?php 
      $query = "SELECT id,name FROM category";
      $data = mysqli_query($conn,$query);
     while ($temp = mysqli_fetch_assoc($data))
    {
      // print_r($temp);
      $test[] = $temp;
    }

      // echo "<pre>";
      // print_r($test);
      // die;
   ?>
   <div class = "table-responsive">
    <?php include_once( 'adminpanel.php'); ?>
    <form action = "" method = "POST" enctype="multipart/form-data">
       <table  class ="table" border="2">
       <tr>
            <td>Product name: </td>
            <td> <input type="text" name="product_name"></td>
       </tr>

        <tr>
            <td>Category Id: </td>
            <td> 
              <select name="category">
                <option>Plese Select Category</option>
                <?php foreach ($test as $value){ ?>
                  <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                <?php } ?>
              </select>
       </tr>


        <tr>
            <td>Description</td>
            <td> <input type="text" name="product_description"></td>
       </tr>
       
       <tr>
            <td>Price</td>
            <td> <input type="text" name="price"></td>
       </tr>
       <tr>
            <td>Stock</td>
            <td> <input type="text" name="stock"></td>
       </tr>
       <tr>
            <td>In sale</td>
            <td> <input type="text" name="in_sale"></td>
       </tr>
        <tr>
            <td>Image</td>
            <td> <input type="file" name="image"></td>
       </tr>
        <tr>
            <td>Discount</td>
            <td> <input type="text" name="discount"></td>
       </tr>
       <tr>
           <td colspan="2" align="center"> <input type="submit" name="submit" value="Add Product"></td>
       </tr>

           
       </table>
        
    </form>
</div>
</body>
</html>

<?php
 include ('utilitis/config.php'); 
  
  if(isset($_POST['submit'])){

    
$target_dir = "./images/product/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }



     // echo "<pre>";
     //    print_r($_POST);
     //    print_r($_FILES);
     //    die;
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category'];
    $product_description = $_POST['product_description'];
    $price =$_POST["price"];
    $stock =$_POST["stock"];
    $in_sale = $_POST["in_sale"];
    $image = $_FILES['image']['name'];
    $discount = $_POST['discount'];
  


    
   $query ="insert into product(category_id,name,description,price,stock,in_sale,image,discount) values($category_id,'$product_name','$product_description','$price','$stock','$in_sale','$image','$discount')";
    

    
    //echo $query;
    
  
    $result = mysqli_query($conn,$query);

    //if($result){
      //header("Location: admin_viewproduct.php");
    //}
  
    
   
    // if ($res) {
        
    //     header("Location:login.php");
    // }  
   //header("Location:login.php");
    
}

 
        
   

?>
