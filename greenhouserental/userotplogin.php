<?php 
ob_start();
require_once 'config.php'; 
session_start();
//initalize user class
$user_obj = new Cl_User();

?>
<?php 
	if( !empty( $_POST )){
		try {
			
			$data = $user_obj->otplogin( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				header('Location: dashboard.php');
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: dashboard.php');
	}
?>
<?php 
include_once('header.php');
?>
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">OTP Login</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>OTP Login</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->
<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="userccount">
		<?php require_once 'templates/message.php';?>
          <h5>OTP Login</h5>
          <!-- login form -->
		  <form id="userotp-form" method="post" class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="formpanel">
            <div class="formrow">
              <input type="tel" name="phone" id="phone" class="form-control" placeholder="Mobile Number"  maxlength="10">
            </div>
            <div class="formrow">
              <input type="text" name="otppass" id="otppass" class="form-control" placeholder="OTP Code">
            </div>
            <input type="submit" class="btn" value="OTP Login">			
			
          </div>
		  </form>
          <!-- login form  end--> 
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php ob_end_flush(); ?>
<?php 
include_once('footer.php');
?>