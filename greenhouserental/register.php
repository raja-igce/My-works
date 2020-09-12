<?php 
ob_start();
require_once 'config.php'; ?>
<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->registration( $_POST );
			if($data)
			{
				$success = USER_REGISTRATION_SUCCESS;
				//header('Location:userlogin.php');
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
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
        <h1 class="page-heading">Register</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Register</span></div>
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
          <!--<div class="alert alert-success" role="alert"><strong>Well done!</strong> Your account successfully created.</div>
          <div class="alert alert-warning" role="alert"><strong>Warning!</strong> Better check yourself, you're not looking too good.</div>
          <div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> Change a few things up and try submitting again.</div>-->
          
<div class="userbtns">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#">Create Your Account</a></li>
              <!--<li class="active"><a data-toggle="tab" href="#">I want to sell</a></li>
              <li class="active"><a data-toggle="tab" href="#">I want to buy</a></li>-->
            </ul>
</div>

<div class="tab-content">
<div id="reg_form" class="formpanel tab-pane fade in active">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-register" role="form" id="signupForm">
                          
              <div class="formrow">
                <input type="text" name="username" id="username" class="form-control" placeholder="Name">
              </div>
			  <div class="formrow">
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Mobile Number"  maxlength="10">
              </div>
              <div class="formrow">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
              </div>
              <div class="formrow">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
              </div>
              <div class="formrow">
                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
              </div>
			  <div class="formrow"> 
            
			  <b style="font-weight:bold;">Please choose verification types</b><br/>
			 <div class="radio">
              <label><input type="radio" name="otp" id="otp" value="otp">Mobile OTP</label>
             </div>
             <div class="radio">
             <label><input type="radio" name="otp" id="otp" value="email">Gmail Verification Link</label>
             </div>
			 
              </div>			  
              <div class="formrow">
			  <label>
                <input type="checkbox" value="1" name="agree" id="agree"/>
                I Confirm the above detail are given correct
             </label>				
			  </div>
			  			
              <input type="submit" class="btn" value="Register">
            
</form>
</div>


            <!--<div id="wbuy" class="formpanel tab-pane fade in">
              <div class="formrow">
                <input type="text" name="cname" class="form-control" placeholder="Full Name">
              </div>
              <div class="formrow">
                <input type="text" name="cusername" class="form-control" placeholder="Username">
              </div>
              <div class="formrow">
                <input type="text" name="cemail" class="form-control" placeholder="Email">
              </div>
              <div class="formrow">
                <input type="text" name="cpass" class="form-control" placeholder="Password">
              </div>
              <div class="formrow">
                <input type="text" name="cpass" class="form-control" placeholder="Confirm Password">
              </div>
              <div class="formrow">
                <input type="checkbox" value="agree text c" name="cagree" />
                I confirm that I am 18 years or older</div>
              <input type="submit" class="btn" value="Register">
            </div>-->


          </div>
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Already a Member? <a href="userlogin.php">Login Here</a></div>
          
          <!--<div class="socialLogin">
            <h5>Login Or Register with Social</h5>
            <a href="#." class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#." class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#." class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>-->
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
ob_end_flush();
include_once('footer.php');
?>

