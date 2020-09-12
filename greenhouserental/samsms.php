<?php

//echo(rand(10,1000));

echo $passcode =	substr(mt_rand(10,9999999999),0,6);

exit;
$a = "8825723630";
$b = "hai";


		//$mno = $_POST["mno"];
		//$message =  $_POST["message"];
		//if(preg_match( '/^[A-Z0-9]{10}$/', $mno) && !empty($message))
         if(!empty($a) && !empty($b))			
		{
	   $a = str_replace(' ', '', $a);
       $a = rtrim($a,',');		 
		
        $msg1 = $b."\n".'Mobile no: 7448550011'."\n".'Website: wedarts.in.';		
		$msg = urlencode($msg1);
		
        $mobileno = $a;
        
		/*$url = "http://198.15.98.50/API/pushsms.aspx?loginID=elayaraja106@gmail.com&password=123456&mobile=".$mobileno.""."&text=".$msg."&senderid=ELAYAA&route_id=2&Unicode=0";*/
		
		$url = "http://198.15.103.106/API/pushsms.aspx?loginID=elayaraja106&password=123456&mobile=".$mobileno.""."&text=".$msg."&senderid=WEDART&route_id=1&Unicode=1";
		
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $buffer = curl_exec($ch);
		if(empty ($buffer))
		{ 
	    echo '<div class="alert alert-danger">
  <strong>Danger!</strong> Message not Send..</div>'; 
        }
		else
		{ 
	    echo '<div class="alert alert-success">
  <strong>Success!</strong> Message Send.</div>'; 
        } 
		curl_close($ch);	
		}	  
			  
	

?>