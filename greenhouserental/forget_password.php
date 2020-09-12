<?php 
ob_start();
require_once 'config.php'; ?>
<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->forgetPassword( $_POST );
			if($data)$success = PASSWORD_RESET_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
?>
<?php 
include_once('header.php');
/*if(!isset($_SESSION['logged_in'])){
	header('Location: userlogin.php');
}*/

?>
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Forgot Password</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#">Home</a> / <span>Forgot Password</span></div>
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
		 <h5>Forgot Password</h5>
          <p>If you have forgotten your password and you previously entered an email address when signing up for the account or in your Preferences, and you still have access to that email account, then this special page can help you recover access to your account.</p>
          
          <!-- form -->
		  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="forgetpassword-form" method="post"  class="form-register" role="form">
          <div class="formpanel">
            <div class="formrow">
               <input id="email" name="email" type="email" class="form-control" placeholder="Enter Email Address">
			   <span class="help-block"></span>
            </div>
            <button class="btn btn-block bt-login" type="submit">Reset Password</button>
          </div>
		  </form>
          <!-- form  end--> 
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php
ob_end_flush(); 
include_once('footer.php');
?>