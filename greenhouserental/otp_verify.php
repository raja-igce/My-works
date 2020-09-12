<?php
require_once 'config.php';
$db = new Cl_DBclass();

$userotp = htmlspecialchars($_POST['userotp']);
$mb_no = htmlspecialchars(base64_decode(urldecode($_POST['mb_no'])));
	
 $query = "SELECT * FROM user where mobile = '".$mb_no."' and otpcode = '".$userotp."'";
$result = mysqli_query($db->con, $query);
$count = mysqli_num_rows($result);		
	
if($count > 0)	
{
$query = "UPDATE user SET  acc_activate = '2'  WHERE mobile = '".$mb_no."'";
$result1 = mysqli_query($db->con, $query);

if($result1)
{
echo '<div class="alert alert-success">
		<p class="text-center">Your Account Activated Please Login.</p>
	</div>';
	
echo '<script>
    window.setTimeout(function(){
        window.location.href = "userlogin.php";
    }, 3000); </script>';
}

}
else
{

echo '<div class="alert alert-danger">
		<p class="text-center">Invalid OTP Password.</p>
	</div>';
}	

exit;