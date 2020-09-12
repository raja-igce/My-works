<?php
ob_start();
require_once 'config.php';
$db = new Cl_DBclass();

?>
<?php 
include_once('header.php');
if(!isset($_SESSION['logged_in'])){
	header('Location: userlogin.php');
}
?>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Dashboard</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb">Welcome&nbsp;<span><?php echo $_SESSION['name']; ?></span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->
<div class="inner-page">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <ul class="usernavdash">
          <li><a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
          <li><a href="ad-post.php"><i class="fa fa-list" aria-hidden="true"></i> Post an ad</a></li>
          <li><a href="myactivate.php"><i class="fa fa-laptop" aria-hidden="true"></i> My Active Ads</a></li>
          <li  class="active"><a href="myinactivate.php"><i class="fa fa-laptop" aria-hidden="true"></i> My Inactive Ads</a></li>
		  <li><a href="mydelete.php"><i class="fa fa-trash" aria-hidden="true"></i> My Expired Ads</a></li>
          <li><a href="user_message.php"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send Messages</a></li>
          <li><a href="received_message.php"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>
 Received Messages</a></li>
		  <li><a href="account-setting.php"><i class="fa fa-lock" aria-hidden="true"></i> Change Password</a></li>
		  <li><a href="profile-setting.php"><i class="fa fa-lock" aria-hidden="true"></i> My Profile</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
        <div class="adimages"> <img src="images/large-ad.jpg" alt="google ad"> </div>
      </div>
      <div class="col-md-9 col-sm-8">
        <!--<ul class="row profilestat">
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-eye" aria-hidden="true"></i>
              <h6>10</h6>
              <strong>Ad Views</strong> </div>
          </li>
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-tachometer" aria-hidden="true"></i>
              <h6>2 <span>hr</span></h6>
              <strong>Respond Time</strong> </div>
          </li>
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h6>10</h6>
              <strong>Ad Expire</strong> </div>
          </li>
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-user-o" aria-hidden="true"></i>
              <h6>21</h6>
              <strong>Followers</strong> </div>
          </li>
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-briefcase" aria-hidden="true"></i>
              <h6>2</h6>
              <strong>Business Pro</strong> </div>
          </li>
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <h6>8</h6>
              <strong>Messages</strong> </div>
          </li>
        </ul>-->
       <!-- <div class="instoretxt">
          <div class="credit">Your on site available credit is: <strong>$99.00</strong></div>
          <a href="#.">Update Package</a> <a href="#." class="history">Payment History</a> </div>-->
        <div class="myads">
          <h3>My Recent Ads</h3>
          <ul class="searchList" id="gallery_1">
            <!-- ad start -->
<?php			
$u_id =$_SESSION['user_id'];
$query = "SELECT * FROM post_ads where user_id = '$u_id' and ad_status ='1' ORDER BY id DESC";
			$result = mysqli_query($db->con, $query);
			$rowcount=mysqli_num_rows($result);
			if($rowcount > 0)
			{
			$pagers = 2;	
			while($row = mysqli_fetch_assoc($result))			
			{	

$now = time(); // or your date as well
$your_date = strtotime($row['post_date']);
$datediff = $now - $your_date;
$a = floor($datediff / (60 * 60 * 24));


		
?>            <li>
              <div class="row">
                <div class="col-md-2 col-sm-4">
                  <div class="adimg"><img src="ads_images/<?php echo $row['cover_image']; ?>" alt="Ad Name"></div>
                </div>
                <div class="col-md-10 col-sm-8">
                  <div class="jobinfo">
                    <div class="row">
                      <div class="col-md-8 col-sm-7">
					  
                        <h3><a href="#."><?php echo substr($row['ad_title'],0,20); ?></a> </h3>
                        <div class="cateName"> <a href="#."><?php echo $row['main_catgory']; ?></a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#."><?php echo $row['sub_catgory']; ?></a> </div>
                        <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span><?php echo $row['ad_location']; ?></span> </div>
                        <div class="clearfix"></div>
                        <p><?php echo substr($row['ad_des'],0,120); ?> ...</p>
                        <div class="listbtn"><a href="ads_details.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>">View Details</a> <span class="btn btn-danger">Remaining <?php echo 30 - $a; ?> days</span>  <a href="#" class="delete_button" id="delete_button" data-fullText = "<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete Ad</a></div>
                      </div>
                      <div class="col-md-4 col-sm-5 text-right">
                        <div class="adprice"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $row['ad_price'].'/<span class="ad_pricecol">'.$row['price_duration'].'</span>'; ?></div>
                        <a href="ad-postedit.php?edit=<?php echo urlencode(base64_encode($row['id'])); ?>" class="editad"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit this ad</a> 
						<br/>
						<?php if($row['ad_status'] == 1) { ?>
                        <a href="#" class="pendingad"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Not Approved</a> 
						<?php }
						else {
							?>
						<a href="#" class="pendingad1"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Approved</a>
						<?php } ?>
						
						</div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- ad end --> 
<?php
			}
			
}
else
{
echo '<div class="alert alert-danger">
		<p class="text-center"> No Record Found.</p>
	</div>';
$pagers = 1;	
}
?>			
            
          </ul>
        </div>
		
		<!-- pagination -->
<?php		
if($pagers == 2)
{
?>			
<div class="col-sm-3">		
<button class="prev btn btn-primary">prev</button>
<button class="next btn btn-primary">next</button>
<span>Page: <span class="counter"> </span></span>
</div>
<div class="col-sm-9">
<span class="paging-nav"></span>
</div>
<?php
}
?>
		<!-- pagination -->
		
      </div>
    </div>
  </div>
</div>



<?php 
ob_end_flush();
include_once('footer.php');
?>
