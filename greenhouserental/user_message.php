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
        <div class="breadCrumb"><span>Welcome <?php echo $_SESSION['name']; ?></span></div>
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
          <li><a href="myinactivate.php"><i class="fa fa-laptop" aria-hidden="true"></i> My Inactive Ads</a></li>
		  <li><a href="mydelete.php"><i class="fa fa-trash" aria-hidden="true"></i> My Expired Ads</a></li>
          <li class="active"><a href="user_message.php"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send Messages</a></li>
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
          
    <div class="row">
        <div class="panel panel-success widget">
            <div class="panel-heading">
                <h4 class="panel-title"><span class="glyphicon glyphicon-comment"></span> 
                    Recent Messages</h4>
                <!--<span class="label label-info">
                    78</span>-->
            </div>
            <div class="panel-body">
                <ul class="list-group" id="gallery_1">
                    
            <!-- ad start -->
<?php			
$u_id =$_SESSION['user_id'];

$query = "SELECT DISTINCT ads_id FROM client_msg WHERE user_id = '$u_id'";
			$result = mysqli_query($db->con, $query);
			$rowcount=mysqli_num_rows($result);
			
			if($rowcount > 0)
			{
			$pagers = 2;
			while($row1 = mysqli_fetch_assoc($result))			
			{

$ads_id = $row1['ads_id'];
			

$query = "SELECT * FROM post_ads WHERE id = '$ads_id' ORDER BY id DESC";
			$result1 = mysqli_query($db->con, $query);
			
				
			$row = mysqli_fetch_assoc($result1);		
				

/*$now = time(); // or your date as well
$your_date = strtotime($row['post_date']);
$datediff = $now - $your_date;
$a = floor($datediff / (60 * 60 * 24));
*/
?>


					
					<li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-2">
                                <img src="ads_images/<?php echo $row['cover_image']; ?>" class="img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-10">
                                <div>
                                   <p class="ads_msg_h"> <a href="view_message.php?msg=<?php echo urlencode(base64_encode($ads_id)); ?>">
                                        <?php echo $row['ad_title']; ?></a></p>
										
                                    <div class="mic-info">
                                        By: <a href="#"><span class="badge"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php echo $row['user_name']; ?></span></a> on <?php echo date("d/m/y h:i:a", strtotime($row['post_date'])); ?>
                                    </div>
                                </div>
                                
                                <div class="action">
                                    <a href="view_message.php?msg=<?php echo urlencode(base64_encode($ads_id)); ?>" class="btn btn-success btn-xs">
                                         <i class="fa fa-envelope-open-o" aria-hidden="true"></i>&nbsp;&nbsp;view Message
                                    </a>
                                     <!--<button type="button" class="btn btn-success btn-xs" title="Approved">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </button>-->
                                </div>
                            </div>
                        </div>
                    </li>
<?php
}
			}
else
{
echo '<br/><div class="alert alert-danger">
		<p class="text-center"> No Record Found.</p>
	</div>';
$pagers = 1;	
}
				
?>			                    
                    
                </ul>
           </div>
        </div>
    </div>
            
         
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
