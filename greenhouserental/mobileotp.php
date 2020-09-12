<?php 
include_once('header.php');

if(!empty($_GET['otp']))
{
	$m_no = $_GET['otp'];

}
else
{
	echo '<script> window.location.href = "userlogin.php"; </script>';
}
?>
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">OTP Verification</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#">Home</a> / <span>OTP Verification</span></div>
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
		<div id="preview"></div>
          <h5>OTP Verification</h5>
          <!-- login form -->
		  <form id="otp-form" name="otp-form" method="post" class="form-signin" role="form" action="">
          <div class="formpanel">
            <div class="formrow">
              <input type="text" class="form-control" name="userotp" id="userotp" placeholder="Enter Your OTP" autofocus  data-rule-required="true" data-msg-required="Please enter your OTP">
            </div>
<input type="hidden" id="mb_no" name="mb_no" value="<?php echo $m_no; ?>">
            <input type="submit" class="btn" value="Enter OTP">
			<!--<button class="btn" type="submit">Login</button>-->
          </div>
		  </form>
          <!-- login form  end--> 
          
          <!-- sign up form -->
          <div class="newuser"><i class="fa fa-refresh" aria-hidden="true"></i> <a href="#" id="otpresent" data-fullText="<?php echo $m_no; ?>">Resend OTP</a></div>
          <!-- sign up form end-->
          
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
include_once('footer.php');
?>