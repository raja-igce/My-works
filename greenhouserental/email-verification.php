<?php
require_once 'config.php';
$db = new Cl_DBclass();


include_once('header.php');
?>
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Verification</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Account Verification</span></div>
      </div>
    </div>
  </div>
</div>

<?php

if(!empty($_GET['activate_code'])){

$hash_code = $_GET['activate_code'];
	$query = " SELECT * FROM user where hash_code = '$hash_code'";
		$result = mysqli_query($db->con, $query);
		//$data = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);

?>



<!-- confirmation -->
<div class="listpgWraper">
<div class="container">
<?php
 if( $count >= 1)
 {
$query1 = "UPDATE user SET acc_activate = '2' WHERE hash_code = '$hash_code'";
mysqli_query($db->con, $query1);
?>	
	<div class="row">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box_c">
                <div class="box_c-icon">
                    <span class="fa fa-thumbs-up fa-4x"></span>
                </div>
                <div class="info_c">
                    <h5 class="text-center">Congratulations, your account has been activated</h5>
                    
                    <a href="userlogin.php" class="btn">Back to Login</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"></div>
        
	</div>
<?php
echo '<script>
    window.setTimeout(function(){
        window.location.href = "userlogin.php";
    }, 2000); </script>';
}
else
	{
?>	
	
	<div class="row">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box_c">
                <div class="box_c-icon error_box">
                    <span class="fa fa-4x fa-thumbs-down"></span>
                </div>
                <div class="info_c">
                    <h5 class="text-center">Please Activate Your Account</h5>
                    
                    <a href="userlogin.php" class="btn">Back to Login</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"></div>
        
	</div>
<?php	
	}

}   
?>
	
</div>
</div>
<!-- confirmation -->
<!-- Page Title End -->

<?php
include_once('footer.php');
?>