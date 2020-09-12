<?php
require_once 'config.php';
$db = new Cl_DBclass();

$mb_no = htmlspecialchars(base64_decode(urldecode($_POST['country'])));


$passcode =	substr(md5(mt_rand()),0,4);

 $query = "SELECT * FROM user where mobile = '".$mb_no."'";
$result = mysqli_query($db->con, $query);
$count = mysqli_num_rows($result);		
	
if($count > 0)	
{

$query = "UPDATE user SET  otpcode = '$passcode'  WHERE mobile = '".$mb_no."'";
$result1 = mysqli_query($db->con, $query);

if($result1)
{

		
	$msg1 = "Please Verify Your Account. Your OTP Code is"." ".$passcode.".";		
		$msg = urlencode($msg1);
		
        $mobileno = $phone;
        
		/*$url = "http://198.15.98.50/API/pushsms.aspx?loginID=elayaraja106@gmail.com&password=123456&mobile=".$mobileno.""."&text=".$msg."&senderid=ELAYAA&route_id=2&Unicode=0";*/
		
		$url = "http://198.15.103.106/API/pushsms.aspx?loginID=elayaraja106&password=123456&mobile=".$mobileno.""."&text=".$msg."&senderid=SRCNCS&route_id=1&Unicode=1";
		
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $buffer = curl_exec($ch);
		if(empty ($buffer))
		{ 

        }
		else
		{ 
echo '<div class="alert alert-success">
		<p class="text-center">Successfull Resend OTP. Please Verify Your Account.</p>
	</div>';
        } 
		curl_close($ch);
}

}
else
{
	echo '<div class="alert alert-success">
		<p class="text-center">Invalid Access.</p>
	</div>';
}

exit;