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
          <li  class="active"><a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
          <li><a href="ad-post.php"><i class="fa fa-list" aria-hidden="true"></i> Post an ad</a></li>
          <li><a href="myactivate.php"><i class="fa fa-laptop" aria-hidden="true"></i> My Active Ads</a></li>
          <li><a href="myinactivate.php"><i class="fa fa-laptop" aria-hidden="true"></i> My Inactive Ads</a></li>
          <li><a href="user_message.php"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send Messages</a></li>
          <li><a href="received_message.php"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>
 Received Messages</a></li>
		  <li><a href="account-setting.php"><i class="fa fa-lock" aria-hidden="true"></i> My Profile</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
        <!--<div class="adimages"> <img src="images/large-ad.jpg" alt="google ad"> </div>-->
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
                    Messages</h4>
                <!--<span class="label label-info">
                    78</span>-->
            </div>
            <div class="panel-body">
                   
			<div class="message_box">	   
            <!-- ad start -->
<?php			
$msgorder =$_SESSION['user_id'];

$msg = base64_decode(urldecode($_GET['msg']));

$query = "SELECT * FROM client_msg WHERE ads_id = '$msg' ORDER BY id asc";
			$result = mysqli_query($db->con, $query);
	
while($row1 = mysqli_fetch_assoc($result))			
{
$u_id = $row1['user_id'];
$ads_id = $row1['adspost_id'];
			
$query1 = "SELECT DISTINCT user_name FROM post_ads WHERE user_id = '$u_id'";
$result1 = mysqli_query($db->con, $query1);
$row2 = mysqli_fetch_assoc($result1);

if($msgorder == $u_id)
{	
?>			
<div class="user_commends">
<span class="badge"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;
<?php echo $row2['user_name']; ?></span>&nbsp;
<span class="msg_box"><?php echo $row1['user_msg']; ?>&nbsp;<span class="badge"><?php echo date("d-m-y h:i:a", strtotime($row1['msg_date'])); ?></span></span>
</div>	
<?php				
}
else
{		
?>
<div class="user_commends1">
<span class="badge"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php echo $row2['user_name']; ?></span>&nbsp;
<span class="msg_box1"><?php echo $row1['user_msg']; ?>&nbsp;<span class="badge"><?php echo date("d-m-y h:i:a", strtotime($row1['msg_date'])); ?></span></span>
</div>				                    
<?php
}
}
?>			                    

           </div>
           </div>
<!-- mesg box -->
	<form method="post" id="cutomer_commands" name="cutomer_commands">
<span class="help-block"></span>	
<div class="input-group formrow">

<input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
<input type="hidden" id="ads_id" name="ads_id" value="<?php echo $msg; ?>">		
<input type="hidden" id="adspost_id" name="adspost_id" value="<?php echo $ads_id; ?>">

<textarea class="form-control custom-control" rows="3" style="resize:none" id="client_msg" name="client_msg"></textarea>     
<span class="input-group-addon"><input class="btn btn-info btn-md" value="Send" id="send_message" type="submit"></span>
</div>
</form>	   
<!-- msg box -->		   
        </div>
    </div>
            
         
        </div>
		
		
      </div>
    </div>
  </div>
</div>



<?php 
ob_end_flush();
include_once('footer.php');
?>
