<?php
require_once 'config.php';
$db = new Cl_DBclass();
$mob_no = "";
$mobileno ="";
$mob_no = $_POST['phone'];

$passcode5 =	substr(mt_rand(10,9999999999),0,6);

$query = "UPDATE user SET otpsigin = '$passcode5' WHERE mobile = ".$mob_no."";
mysqli_query($db->con, $query);	

$msg1 = "Login with phone & OTP. Your OTP Code is"." ".$passcode5.".";	
	
$msg = urlencode($msg1);
		
$mobileno = $mob_no;



	$url = "http://198.15.103.106/API/pushsms.aspx?loginID=elayaraja106&password=123456&mobile=".$mobileno.""."&text=".$msg."&senderid=SRCNCS&route_id=1&Unicode=1";
		
	
		
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $buffer = curl_exec($ch);
		if(empty ($buffer))
		{ 
echo '<div class="alert alert-danger">
		<p class="text-center">Not Send OTP.</p>
	</div>';	

        }
		else
		{ 
echo '<div class="alert alert-success">
		<p class="text-center">Successful send OTP.</p>
	</div>';
	
echo '<script>
    window.setTimeout(function(){
        window.location.href = "userotplogin.php";
    }, 2000); </script>';
	
        } 
		curl_close($ch);
	
exit;
		