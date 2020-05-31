
<?php
include("utilitis/config.php");
			
		

		$rs_results = mysqli_query($conn,"Select id,name from category");
		
		$rs_resultssub = mysqli_query($conn,"Select sub_cat_id,sub_category_name from category");

		$rs_resultforrandom =mysqli_query($conn,"Select * from product order by rand() limit 9") or die("Error");

		$rs_specialoffer = mysqli_query($conn,"Select * from product where in_sale=1 order by rand() limit 1 ") or die("Error");

		$rs_specialfetch = mysqli_fetch_assoc($rs_specialoffer);






      


?>

<!DOCTYPE HTML>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
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
	 background-image:url("images/back.gif");
	 background-repeat:"repeat-no";
 }
 
 </style>
 <link type="text/css" rel="stylesheet" href="css/slider.css">
<link type="text/css" rel="stylesheet" href="css/style.css">
	<?php include_once("include_user.php");?>
	<title>Ecommerce</title>
	<script>
    var a = document.getElementById('tfnewsearch');
    a.addEventListener('submit',function(e) {
        e.preventDefault();
        var b = document.getElementById('tftextinput').value;
        window.location.href = 'userselect/'+b;

    });

</script>
	<style type="text/css"> .frame { height: 250px; width: 1200px; overflow: hidden; } .zoomin img { height: 150px; width: 200px; -webkit-transition: all 2s ease; -moz-transition: all 2s ease; -ms-transition: all 2s ease; transition: all 2s ease; } .zoomin img:hover { width: 250px; height: 200px; } </style>
</head>

<body>



<!--Dynamically show the category item in this -->
<div class="main">

<div class="sidebar">
<div class="s-main">
	<div class="s_hdr">
		<h2>Categories</h2>
	</div>
	<div class="text1-nav">
		<ul>
		 <?php
        while ($rs_res= mysqli_fetch_assoc($rs_results))
        {	
        ?>
        <li style="font-size:25px"><strong><a href="user_categoryselect.php?id=<?php echo $rs_res["id"]?>"><?php echo $rs_res["name"] ?></a><strong></li>
        <?php }?>
        </ul>
		<ul>   </ul>
	</div>
</div>
</div>
<div class="content">
	
	
	<div class="clear"></div>
	
	<div class="grid">
	<div class="grid-img">
	</div>
	<div>
		
		<marquee behavior="alternate" direction="left"><img src="images/special.jpg" width="320" height="180" alt="Offer" /></marquee>
    </div>	
	<div id="slider" class="sliding">
        <div>
            <a href="details.php?id=<?php echo $rs_specialfetch["id"]?>"><img src="images/product/<?php echo $rs_specialfetch["image"];?>"></a>
        </div>
		<div>
            <a><img src="images/sale1.jpg" height="500px"></a>
        </div>
		
        <div>
            <a href="details.php?id=<?php echo $rs_specialfetch["id"]?>"><img src="images/product/3.png" alt=""></a>
        </div>
        <div>
            <a href="details.php?id=<?php echo $rs_specialfetch["id"]?>"><img src="images/product/2.png" alt=""></a>
        </div>
        <div>
           <a href="details.php?id=<?php echo $rs_specialfetch["id"]?>"> <img src="images/product/1.png" alt=""></a>
        </div>
	</div>
	
	<div class="clear"></div>
	</div><div class="section group">
		<?php 

				while ($rs_rand = mysqli_fetch_assoc($rs_resultforrandom)) { ?>

					<?php //  print_r("images/product/". $rs_rand["image"] );?>
					 <?php //  print_r($rs_rand["id"] );
					// 		die;

					?>

					<div class="grid_1_of_3 images_1_of_3">
						 <a href="details.php?id=<?php echo $rs_rand["id"];?>"><img src="images/product/<?php echo $rs_rand["image"];?>" alt=""/></a>
						 <a href="details.php?id=<?php echo $rs_rand["id"];?>"><h3><?php echo $rs_rand["description"];?></h3></a>
						 <div class="cart-b">
							<span class="price left"><sup>Rs <?php echo $rs_rand["price"] ?></sup><sub></sub></span>
						    <div class="btn top-right right"><a href="details.php?id=<?php echo $rs_rand["id"];?>">Add to Cart</a></div>
					    <div class="clear"></div>
					 </div>
				</div>

		
		<?php }?>
			
	</div>
	
</div>
<div class="cnt-main btm">
	<div class="section group">
		<?php 

				while ($rs_rand = mysqli_fetch_assoc($rs_resultforrandom)) { ?>

					<?php //  print_r("images/product/". $rs_rand["image"] );?>
					 <?php //  print_r($rs_rand["id"] );
					// 		die;

					?>

					<div class="grid_1_of_3 images_1_of_3">
						 <a href="details.php?id=<?php echo $rs_rand["id"];?>"><img src="images/product/<?php echo $rs_rand["image"];?>" alt=""/></a>
						 <a href="details.php?id=<?php echo $rs_rand["id"];?>"><h3><?php echo $rs_rand["description"];?></h3></a>
						 <div class="cart-b">
							<span class="price left"><sup>Rs <?php echo $rs_rand["price"] ?></sup><sub></sub></span>
						    <div class="btn top-right right"><a href="details.php?id=<?php echo $rs_rand["id"];?>">Add to Cart</a></div>
					    <div class="clear"></div>
					 </div>
				</div>

		
		<?php }?>
			
	</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="footer-bg">
<div class="wrap">
<div><br>
<div class="zoomin frame">
<marquee behavior="scroll"  dir="ltr" align="absbottom"><img src="usepics/logo5.jpg" width="100" height="80"/>
<img src="usepics/logo11.jpg" width="100" height="80"/>
<img src="usepics/logo12.jpg" width="100" height="80"/>
<img src="usepics/logo8.jpg" width="100" height="80"/>
<img src="usepics/logo6.jpg" width="100" height="80"/>
<img src="usepics/logo4.jpg" width="100" height="80"/>
<img src="usepics/logo3.jpg" width="100" height="80"/>
<img src="usepics/logo13.jpg" width="100" height="80"/> 
<img src="usepics/logo15.jpg" width="100" height="80"/>
<img src="usepics/logo1.jpg" width="100" height="80"/>
 <img src="usepics/logo2.jpg" width="100" height="80"/>
 <img src="usepics/logo14.jpg" width="100" height="80"/>
 <img src="usepics/logo9.jpg" width="100" height="80"/>
</marquee>
</div>
</div>

<!-- // -->
<div class="container">
    <hr>
        <div class="text-center center-block">
            <p class="txt-railway"></p>
            
                <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="https://.com/"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
    <hr>
</div>
<br><br>
<div class="footer">
	
	<div class="footer1">
		<p>All Rights Reserved | &nbsp; <a> Developed By Cart2Marketplace</a></p>
	</div>
</div>
</div>
</div>
</body>
</html>

