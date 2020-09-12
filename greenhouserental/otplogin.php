<?php 
include_once('header.php');
?>
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Login with phone &amp; OTP</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Login with phone &amp; OTP</span></div>
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
          <h5>Login with phone &amp; OTP</h5>
          <!-- login form -->
		  <form id="otplogin-form" method="post" class="form-signin" role="form" action="">
          <div class="formpanel">
            <div class="formrow">
              <input type="tel" name="phone" id="phone" class="form-control" placeholder="Mobile Number"  maxlength="10">
            </div>
            
            <input type="submit" class="btn" value="Login" id="otppass1" name="otppass1">			
			
          </div>
		  </form>
                    
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
include_once('footer.php');
?>