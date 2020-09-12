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
			
			$data = $user_obj->login( $_POST );
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

if(!empty($_GET['er']))
{
	$error = USER_BLOCK;
}

if(!empty($_GET['err']))
{
	$error = USER_EXITS;
}

?>
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Login</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Login</span></div>
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
          <h5>User Login</h5>
          <!-- login form -->
		  <form id="login-form" method="post" class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="formpanel">
            <div class="formrow">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email address" autofocus  data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address">
            </div>
            <div class="formrow">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" data-rule-required="true" data-msg-required="Please enter your Password" >
            </div>
            <input type="submit" class="btn" value="Login">			
			
          </div>
		  </form>
          <!-- login form  end--> 
          
          <!-- sign up form -->
          <div class="newuser">
		  <i class="fa fa-user" aria-hidden="true"></i><a href="otplogin.php" class="btn">Login with phone &amp; OTP</a> 
		  <i class="fa fa-envelope" aria-hidden="true"></i><a href="forget_password.php" class="btn">Forgot Password</a></div>
          <!-- sign up form end-->
          
          <div class="socialLogin">
            <h5>Login Or Register with Social</h5>
            <a href="login.php?type=facebook" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
			<a href="login.php?type=google" class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a> 
			<!--<a href="login.php?type=twitter" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a> -->
		 </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php ob_end_flush(); ?>
<?php 
include_once('footer.php');
?>