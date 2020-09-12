<?php
require_once 'config.php';
$db = new Cl_DBclass();

?>
<?php 
include_once('header.php');
?>
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Ad Detail</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Ad Details</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->
<?php			
$u_id =base64_decode(urldecode($_GET['id']));
$query = "SELECT * FROM post_ads where id = '$u_id'";
			$result = mysqli_query($db->con, $query);
			//$rowcount=mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);

$yourAddress =$row['ad_city'] .',' .$row['ad_location'];	
			
?>



<div class="listpgWraper" id="dvContainer">
  <div class="container"> 

    <!-- Ad Header start -->
    <div class="advert-header">
      <div class="adinfo">
        <div class="row">
          <div class="col-md-8">
            <h2><?php echo $row['ad_title']; ?></h2>
            <div class="ptext"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("d-m-y h:i:sa", strtotime($row['post_date'])); ?></div>
            <div class="cateName"> <a href="#."><?php echo $row['main_catgory']; ?></a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <span><?php echo $row['sub_catgory']; ?></span> </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-4">
            <div class="adsalary">Ad Price <strong><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $row['ad_price']; ?></strong><?php echo '/'.$row['price_duration']; ?></div>
          </div>
        </div>
      </div>
      <div class="adButtons"> 
	  <a href="#" class="btn goodshare" data-type="gp"><i class="fa fa-envelope" aria-hidden="true"></i> Email to Friend</a> 
	  <a href="#" class="btn" id="btnPrint"><i class="fa fa-print" aria-hidden="true"></i> Print this Ad</a> 
	  <a href="" class="btn"><i class="fa fa-eye" aria-hidden="true"></i> Views : <?php echo $row['ads_count']; ?></a>
	  </div>
    </div>
    
    <!-- ad Detail start -->
    <div class="row">
      <div class="col-md-8"> 
        <!-- ad Description start -->
        <div class="advert-header">
          <div class="contentbox">
            <div class="adimages">
              <div id="adslider" class="flexslider">
                <ul class="slides">
				<?php
                 if($row['cover_image'] ==  'ad-img2.jpg')
				 {
				?>
				<li> <img src="ads_images/ad-img2.jpg" alt="" /> </li>
				 <?php
				 }
				 else
				 {
				?>
				<li> <img src="ads_images/<?php echo $row['cover_image']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
                  <?php
                 if($row['sub_img1'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="ads_images/<?php echo $row['sub_img1']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
				 <?php
                 if($row['sub_img2'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="ads_images/<?php echo $row['sub_img2']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
				 <?php
                 if($row['sub_img3'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="ads_images/<?php echo $row['sub_img3']; ?>" alt="" /> </li>
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
<li> <img src="ads_images/<?php echo $row['cover_image']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
                  			 <?php
                 if($row['sub_img1'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="ads_images/<?php echo $row['sub_img1']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
				 			 <?php
                 if($row['sub_img2'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="ads_images/<?php echo $row['sub_img2']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
				 			 <?php
                 if($row['sub_img3'] !=  'ad-img2.jpg')
				 {
				?>
<li> <img src="ads_images/<?php echo $row['sub_img3']; ?>" alt="" /> </li>
				<?php
				 }
				 ?>
				  
                </ul>
              </div>
            </div>
			<h3>Address:</h3>
            <p><?php echo $row['ad_address']; ?></p>
            <h3>Description:</h3>
            <p><?php echo $row['ad_des']; ?></p>
            
          </div>
        </div>
        <!-- Job Description end --> 
        
      </div>
      <!-- related jobs end -->
      
      <div class="col-md-4">
	  
	  <div class="advert-header">
        <div class="advertdetail">
            
        <div class="sellerinfo">
            <div class="profileimg"><img src="images/user-icon.png"></div>
            <h5><?php echo $row['user_name']; ?></h5>  
<?php
$user_id = $row['user_id'];
$query = "SELECT * FROM  user where user_id = '$user_id'";
			$result = mysqli_query($db->con, $query);
			//$rowcount=mysqli_num_rows($result);
	$phone = mysqli_fetch_assoc($result);
if(!empty($phone['mobile']))
{
?>			
<span class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo $phone['mobile']; ?></span>
<?php
}
else
{
?>
<span class="phone"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $phone['email']; ?></span>
<?php
}
?>                
        </div>
                
        </div>
      </div>
	  
	<div class="advert-header">
          <div class="advertdetail">
           <h3>Contact This Seller</h3>
          <div id="alert_messages"></div>
        
		<?php if($_SESSION['logged_in']) { ?>
		
		
		<form method="post" id="send-message-form">
        <div class="formpanel">
                
            <div class="formrow">
            <textarea name="client_msg" id="client_msg" class="form-control"  placeholder="Message"></textarea>
			<span class="help-block"></span>
            </div>
        
        <input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
        <input type="hidden" id="ads_id" name="ads_id" value="<?php echo $row['id']; ?>">		
        <input type="hidden" id="adspost_id" name="adspost_id" value="<?php echo $row['user_id']; ?>">		
        <input class="btn" value="Send" id="send_message" type="submit">
        </div>
        </form>
		<br/>
		<div id="msg_user"></div>
		<?php 
		}
		else
		{
	    ?>
		<div class="formpanel">
		<a href="userlogin.php" class="btn btn_2 btn-warning">Login to chat</a>
		</div>
		<?php
		}
		?>
          </div>
    </div>
	  
	  
	  
        <div class="advert-header">
          <div class="advertdetail">
            <h3>Share This Ad</h3>
            <div class="social"> 
			<a href="#" class="goodshare" data-type="tw"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> 
			<a href="#" class="goodshare" data-type="gp"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> 
			<a href="#" class="goodshare" data-type="fb"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> 
			<a href="#" class="goodshare" data-type="li"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> </div>
          </div>
          <!-- Social Icons end --> 
        </div>
        
        
        <!-- Google Map start -->
        <div class="advert-header">
          <div class="advertdetail">
            <h3>Ad Location</h3>
            <div class="gmap">
              <!--<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13276.272465119835!2d72.97962462269287!3d33.70718629417979!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1480401216309" ></iframe>-->
			  <iframe width="auto" height="auto" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $yourAddress; ?>&output=embed" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        
        <!-- Safety start -->
        <!--<div class="advert-header">
          <div class="advertdetail">
            <h3>Stay Safe</h3>
            <div class="gmap">
              <ul class="unorderlist">
                <li>Avoid deals that are too good to be true.</li>
                <li>Deal with people in your area by meeting face to face to see the item.</li>
                <li>Never provide your personal or banking information.</li>
                <li>See our Safety tips regarding vehicle buying and selling.</li>
                <li>Follow the guide lines about How to shop online more safely?</li>
                <li>How to spot scam ads?</li>
                <li>How to protect yourself?</li>
              </ul>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </div>
</div>

<?php 
include_once('footer.php');
?>
