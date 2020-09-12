<?php 
ob_start();
require_once 'config.php'; ?>
<?php 
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->profile( $_POST );
			if($data)$success = PROFILE_CHANAGE_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		} 
	}
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
        <h1 class="page-heading">Profile Setting</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Profile Setting</span></div>
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
          <h5>Account Settings</h5>
		  <!-- form -->
		  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="profile-form" method="post" class="form-horizontal myaccount" role="form">
          <div class="formpanel">
            
			<div class="formrow">
                <input type="text" name="c_username" id="c_username" class="form-control" placeholder="Username" value="<?php echo $_SESSION['name']; ?>">
				<span class="help-block"></span>
              </div>
			  <div class="formrow">
                <input type="tel" name="c_phone" id="c_phone" class="form-control" placeholder="Mobile Number"  maxlength="10" value="<?php echo $_SESSION['mobile']; ?>">
				<span class="help-block"></span>
              </div>
              <div class="formrow">
                <input type="email" name="c_email" id="c_email" class="form-control" placeholder="Email"  value="<?php echo $_SESSION['email']; ?>" readonly>
				<span class="help-block"></span>
              </div>
              
			<input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
			<input type="hidden" id="email" value="<?php echo $_SESSION['email']; ?>" />
			
            <input type="submit" class="btn" value="Update">
            <br>
            <a href="dashboard.php" class="btn">Cancel</a> 
			
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
