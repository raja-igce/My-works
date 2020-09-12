<!DOCTYPE html>
<html lang="en">
<link href="../css/owl.carousel.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="../css/font-awesome.css" rel="stylesheet">
<!-- Custom Style -->
<link href="css/main_1.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>


<?php
include 'ads_crud.php';
$object = new Crud();
?>


<?php			
$s1 = $_POST['view_his'];
$query = "SELECT * FROM  post_ads WHERE id = '".$s1."'";
$result = $object->execute_query($query);
$row = mysqli_fetch_assoc($result);
?>
<h3 class="text-center" style="color: #70952d;"><?php echo $row['ad_title']; ?></h3>
<div class="row">
<div class="col-sm-4">
<p class="col-green"><b>Name:</b> <?php echo $row['user_name']; ?></p>
<p class="col-green"><b>Ad Type:</b> <?php echo $row['ad_type']; ?></p>
<p class="col-green"><b>Item Type:</b> <?php echo $row['item_type']; ?></p>
<p class="col-green"><b>Price: &#8377;</b> <?php echo $row['ad_price']; ?></p>
</div>
<div class="col-sm-4"><p class="col-green"><b>Property Type:</b> <?php echo $row['property_type']; ?></p>
<p class="col-green"><b>Category:</b> <?php echo $row['main_catgory']; ?></p>
<p class="col-green"><b>Sub Category:</b> <?php echo $row['sub_catgory']; ?></p>
</div>
<div class="col-sm-4">
<p class="col-green"><b>City:</b> <?php echo $row['ad_city']; ?></p>
<p class="col-green"><b>Location:</b> <?php echo $row['ad_location']; ?></p>
<p class="col-green"><b>Date:</b> <?php echo date("d/m/y h:i a", strtotime($row['post_date'])); ?></p>
</div>
</div>


<div class="advert-header">
          <div class="contentbox">
            <div class="adimages">
              <div id="adslider" class="flexslider">
                <ul class="slides">
				<?php
                 if($row['cover_image'] ==  'ad-img2.jpg')
				 {
				?>
				<li> <img src="../ads_images/ad-img2.jpg" alt="" /> </li>
				 <?php
				 }
				 else
				 {
				?>
				<li> <img src="../ads_images/<?php echo $row['cover_image']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
                  <?php
                 if($row['sub_img1'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="../ads_images/<?php echo $row['sub_img1']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
				 <?php
                 if($row['sub_img2'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="../ads_images/<?php echo $row['sub_img2']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
				 <?php
                 if($row['sub_img3'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="../ads_images/<?php echo $row['sub_img3']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>

                </ul>
              </div>
              <div id="carousel" class="flexslider">
                <ul class="slides">
							 <?php
                 if($row['cover_image'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="../ads_images/<?php echo $row['cover_image']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
                  			 <?php
                 if($row['sub_img1'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="../ads_images/<?php echo $row['sub_img1']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
				 			 <?php
                 if($row['sub_img2'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="../ads_images/<?php echo $row['sub_img2']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
				 			 <?php
                 if($row['sub_img3'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="../ads_images/<?php echo $row['sub_img3']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
				  
                </ul>
              </div>
            </div>
            <h3>Description</h3>
            <p><?php echo $row['ad_des']; ?></p>
            </div>
        </div>
        

<!-- Bootstrap's JavaScript --> 
<script src="../js/jquery-2.1.4.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<!-- Owl carousel --> 
<script src="../js/owl.carousel.js"></script> 
<!-- Flex slider --> 
<script src="../js/jquery.flexslider.js"></script> 
<!-- Custom js --> 
<script src="../js/script.js"></script>        

</body>
</html>