<?php
/**
 * This User will have functions that hadles user registeration,
 * login and forget password functionality
 */
class Cl_User
{
	/**
	 * @var will going contain database connection
	 */
	protected $_con;
	
	/**
	 * it will initalize DBclass
	 */
	public function __construct()
	{
		$db = new Cl_DBclass();
		$this->_con = $db->con;
	}
	
	/**
	 * this will handles user registration process
	 * @param array $data
	 * @return boolean true or false based success 
	 */
	public function registration( array $data )
	{
		if( !empty( $data ) ){
			
			// Trim all the incoming data:
			$trimmed_data = array_map('trim', $data);
			
			
			
			// escape variables for security
			$name = mysqli_real_escape_string( $this->_con, $trimmed_data['username'] );
			$password = mysqli_real_escape_string( $this->_con, $trimmed_data['password'] );
			$cpassword = mysqli_real_escape_string( $this->_con, $trimmed_data['confirm_password'] );
			$tearms = mysqli_real_escape_string( $this->_con, $trimmed_data['agree'] );
			$phone = mysqli_real_escape_string( $this->_con, $trimmed_data['phone'] );
			
			
			// Check for an email address:
			if (filter_var( $trimmed_data['email'], FILTER_VALIDATE_EMAIL)) {
				$email = mysqli_real_escape_string( $this->_con, $trimmed_data['email']);
			} else {
				throw new Exception( "Please enter a valid email address!" );
			}
			
			
			if((!$name) || (!$email) || (!$password) || (!$cpassword) ) {
				throw new Exception( FIELDS_MISSING );
			}
			if ($password !== $cpassword) {
				throw new Exception( PASSWORD_NOT_MATCH );
			}
			$password = md5( $password );
			$hash_code=substr(md5(mt_rand()),0,15);
			
			$query = "INSERT INTO user (user_id, name, email, password, created, tearms, mobile, user_status,hash_code,acc_activate) VALUES (NULL, '$name', '$email', '$password', CURRENT_TIMESTAMP, '$tearms', '$phone', '1', '$hash_code', '1')";
			if(mysqli_query($this->_con, $query))
			{
			
			$link_txt ="Hi,<br/><br/>We need to make sure you are human. Please verify your email and get started using your website account.<br/><br/>";
			
			$link_txt1 ="http://www.e-soft.in/ads/email-verification.php?activate_code=$hash_code";
			
 $email_from = "elayaraja@e-soft.in"; // Who the email is from 
 $email_subject =  "Account Activation Link"; // The Subject of the email 
 $email_txt = $link_txt.$link_txt1; // Message that the email has in it  
 $email_to = $email; // Who the email is to

 $headers = "From: ".$email_from;
 $semi_rand = md5(time()); 
 $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";     
 $headers .= "\nMIME-Version: 1.0\n" . 
            "Content-Type: multipart/mixed;\n" . 
            " boundary=\"{$mime_boundary}\"";  
  $email_message .= "This is a multi-part message in MIME format.\n\n" . 
                "--{$mime_boundary}\n" . 
                "Content-Type:text/html; charset=\"iso-8859-1\"\n" . 
               "Content-Transfer-Encoding: 7bit\n\n" . 
     $email_txt . "\n\n"; 
$ok1 = @mail($email_to, $email_subject, $email_message, $headers);
			
			
			
			return true;
			}
		} else{
			throw new Exception( USER_REGISTRATION_FAIL );
		}
	}
	/**
	 * This method will handle user login process
	 * @param array $data
	 * @return boolean true or false based on success or failure
	 */
	public function login( array $data )
	{
		$_SESSION['logged_in'] = false;
		if( !empty( $data ) ){
			
			// Trim all the incoming data:
			$trimmed_data = array_map('trim', $data);
			
			// escape variables for security
			$email = mysqli_real_escape_string( $this->_con,  $trimmed_data['email'] );
			$password = mysqli_real_escape_string( $this->_con,  $trimmed_data['password'] );
				
			if((!$email) || (!$password) ) {
				throw new Exception( LOGIN_FIELDS_MISSING );
			}
			$password = md5( $password );
			$query = "SELECT user_id, name, email, created, mobile, user_status FROM user where email = '$email' and password = '$password' ";
			$result = mysqli_query($this->_con, $query);
			$data = mysqli_fetch_assoc($result);
			
			$count = mysqli_num_rows($result);
			if( $count >= 1){
				$row1 = $data;
				if($row1['acc_activate'] == 2)
				{
				if($row1['user_status'] == 2)
				{
				throw new Exception( USER_BLOCK );
				}
				else
				{
				$_SESSION = $data;
				$_SESSION['logged_in'] = true;
				return true;
				}
				}
            else
			{
			throw new Exception( USER_VERIFY );	
			}
				
			}else{
				throw new Exception( LOGIN_FAIL );
			}
		} else{
			throw new Exception( LOGIN_FIELDS_MISSING );
		}
	}
	
	/**
	 * This method will handle Facebook login
	 * @param array $data
	 * @throws Exception
	 * @return boolean true or false based on success or failure
	 */
	
	public function fb_login( array $data )
	{
		if( !empty( $data ) ){
			// Trim all the incoming data:
			$trimmed_data = array_map('trim', $data);
		}	
		
		// escape variables for security
		$name = mysqli_real_escape_string( $this->_con, $trimmed_data['name'] );
		$email = mysqli_real_escape_string( $this->_con, $trimmed_data['email'] );
		$social_id = mysqli_real_escape_string( $this->_con, $trimmed_data['id'] );
		
		
		$query = "SELECT user_id, name, email, created FROM user where email = '$email' and social_id = '$social_id' ";
		$result = mysqli_query($this->_con, $query);
		$data = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);
		if( $count >= 1){
			$_SESSION = $data;
			$_SESSION['logged_in'] = true;
			return true;
		}else{
			
			$password = $this->randomPassword();
			$password1 = md5( $password );			
			$query = "INSERT INTO user (user_id, password, name, email, social_id, created) VALUES (NULL, '$password1', '$name', '$email', '$social_id', CURRENT_TIMESTAMP)";
			
			if(mysqli_query($this->_con, $query)){
				$to = $email;
				$subject = "Account Create - SmartTutorials.net";
				$txt = "Your Email ".$email;
				$txt .= "<br/>Your New Password ".$password;
				$headers = "From: admin@smarttutorials.net" . "\r\n" .
						"CC: admin@smarttutorials.net";
					
				mail($to,$subject,$txt,$headers);
			}
			
			$query = "SELECT user_id, name, email, created FROM user where email = '$email' and social_id = '$social_id' ";
			$result = mysqli_query($this->_con, $query);
			$data = mysqli_fetch_assoc($result);
			$count = mysqli_num_rows($result);
			if( $count >= 1){
				$_SESSION = $data;
				$_SESSION['logged_in'] = true;
				return true;
			}else{
				throw new Exception( LOGIN_FAIL );
			}
		}
			
		
	}
	
	/**
	 * This method will handle google login
	 * @param array $data
	 * @throws Exception
	 * @return boolean true or false based on success or failure
	 */
	
public function google_login( array $data )
	{
		
		
		if( !empty( $data ) ){
			// Trim all the incoming data:
			$trimmed_data = array_map('trim', $data);
		}
		
		// escape variables for security
		$name = mysqli_real_escape_string( $this->_con, $trimmed_data['name'] );
		$email = mysqli_real_escape_string( $this->_con, $trimmed_data['email'] );
		$social_id = mysqli_real_escape_string( $this->_con, $trimmed_data['id'] );
		$picture = mysqli_real_escape_string( $this->_con, $trimmed_data['picture'] );
		
		
		$query = "SELECT user_id, name, email, created, user_status FROM user where email = '$email' and social_id = '$social_id' ";
		$result = mysqli_query($this->_con, $query);
		$data = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);
		if( $count == 1){
			/*$row2 = $data;
				if($row2['user_status'] == 2)
				{
				throw new Exception( USER_BLOCK );
				}
				else
				{
				$_SESSION = $data;
				$_SESSION['logged_in'] = true;
				return true;
				}*/
			
			
			
			$_SESSION = $data;
			$_SESSION['logged_in'] = true;
			return true;
		}else{
				
			$query = "INSERT INTO user (name, email, social_id, picture, created, user_status) VALUES ('$name', '$email', '$social_id', '$picture', CURRENT_TIMESTAMP,'1')";
			if(mysqli_query($this->_con, $query));
			$query = "SELECT user_id, name, email, created FROM users where email = '$email' and social_id = '$social_id' ";
			$result = mysqli_query($this->_con, $query);
			$data = mysqli_fetch_assoc($result);
			$count = mysqli_num_rows($result);
			if( $count == 1){
				$_SESSION = $data;
				$_SESSION['logged_in'] = true;
				return true;
			}else{
				throw new Exception( LOGIN_FAIL );
			}
		}
	}
	/**
	 * This will handle twitter login
	 * @param array $data
	 * @throws Exception
	 * @return boolean
	 */
	
	public function twitter_login( array $data )
	{
		if( !empty( $data ) ){
			// Trim all the incoming data:
			$trimmed_data = array_map('trim', $data);
		}
		
		// escape variables for security
		$social_id = mysqli_real_escape_string( $this->_con, $trimmed_data['id'] );
		$name = mysqli_real_escape_string( $this->_con, $trimmed_data['name'] );
		$screen_name = mysqli_real_escape_string( $this->_con, $trimmed_data['screen_name'] );
		$picture = mysqli_real_escape_string( $this->_con, $trimmed_data['picture'] );
		
		
		$query = "SELECT user_id, name, email, created FROM user where social_id = '$social_id' ";
		$result = mysqli_query($this->_con, $query);
		$data = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);
		if( $count == 1){
			$_SESSION = $data;
			$_SESSION['logged_in'] = true;
			return true;
		}else{
			$password = $this->randomPassword();
			$password1 = md5( $password );			
			
			$query = "INSERT INTO user (user_id, password, name, social_id, picture, created) VALUES (NULL, '$password1', '$name', '$social_id', '$picture', CURRENT_TIMESTAMP)";
			if(mysqli_query($this->_con, $query));
			$query = "SELECT user_id, name, email, created FROM user where social_id = '$social_id' ";
			$result = mysqli_query($this->_con, $query);
			$data = mysqli_fetch_assoc($result);
			$count = mysqli_num_rows($result);
			if( $count == 1){
				$_SESSION = $data;
				$_SESSION['logged_in'] = true;
				return true;
			}else{
				throw new Exception( LOGIN_FAIL );
			}
		}
	}
	
	
	/**
	 * This will shows account information and handles password change
	 * @param array $data
	 * @throws Exception
	 * @return boolean
	 */
	
	public function account( array $data )
	{
		if( !empty( $data ) ){
			// Trim all the incoming data:
			$trimmed_data = array_map('trim', $data);
			
			// escape variables for security
			$c_username = mysqli_real_escape_string( $this->_con, $trimmed_data['c_username'] );
			$c_phone = mysqli_real_escape_string( $this->_con, $trimmed_data['c_phone'] );
			$c_email = mysqli_real_escape_string( $this->_con, $trimmed_data['c_email'] );
			$c_password = mysqli_real_escape_string( $this->_con, $trimmed_data['c_password'] );
			//$cpassword = $trimmed_data['confirm_password'];
			$user_id = mysqli_real_escape_string( $this->_con, $trimmed_data['user_id'] );
			
			if((!$c_password) || (!$c_username) || (!$c_phone)) {
				throw new Exception( FIELDS_MISSING );
			}
			
			$c_password = md5( $c_password );
			$query = "UPDATE user SET name = '$c_username', mobile = '$c_phone', password = '$c_password' WHERE user_id = '$user_id'";
			if(mysqli_query($this->_con, $query))
			{
            	self::logout();			
			return true;
			}
		} else{
			throw new Exception( FIELDS_MISSING );
		}
	}
	
	/**
	 * This handle sign out process
	 */
	public function logout()
	{
		/*session_unset();
		session_destroy();
		unset($_SESSION['oauth_token']);
		unset($_SESSION['oauth_token_secret']);
		header('Location: index.php');*/
		ob_start();
session_start();
unset($_SESSION['oauth_token']);
unset($_SESSION['oauth_token_secret']);
session_unset();
session_destroy();
header('Location: index.php');
ob_end_flush();
	}
	
	/**
	 * This reset the current password and send new password to mail
	 * @param array $data
	 * @throws Exception
	 * @return boolean
	 */
	public function forgetPassword( array $data )
	{
		if( !empty( $data ) ){
			
			// escape variables for security
			$email = mysqli_real_escape_string( $this->_con, trim( $data['email'] ) );
			
			if((!$email) ) {
				throw new Exception( FIELDS_MISSING );
			}
			$password = $this->randomPassword();
			$password1 = md5( $password );
			$query = "UPDATE user SET password = '$password1' WHERE email = '$email'";
			if(mysqli_query($this->_con, $query)){
				
				$to = $email;
				$subject = "New Password Request";
				$txt = "Your New Password ".$password;
				/*$headers = "From: admin@e-soft.in" . "\r\n" .
						"CC: admin@e-soft.in";
					
				mail($to,$subject,$txt,$headers);*/
				
				
 $email_from = "elayaraja@e-soft.in"; // Who the email is from 
 $email_subject =  $subject; // The Subject of the email 
 $email_txt = $txt; // Message that the email has in it  
 $email_to = $to; // Who the email is to

 $headers = "From: ".$email_from;
 $semi_rand = md5(time()); 
 $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";     
 $headers .= "\nMIME-Version: 1.0\n" . 
            "Content-Type: multipart/mixed;\n" . 
            " boundary=\"{$mime_boundary}\"";  
  $email_message .= "This is a multi-part message in MIME format.\n\n" . 
                "--{$mime_boundary}\n" . 
                "Content-Type:text/html; charset=\"iso-8859-1\"\n" . 
               "Content-Transfer-Encoding: 7bit\n\n" . 
     $email_txt . "\n\n"; 
       $ok = @mail($email_to, $email_subject, $email_message, $headers); 
		if($ok)
		{
        return true;
        }	
		else
		{
		throw new Exception( FIELDS_MISSING );	
		}		
				
			}
		} 
		else
		{
		throw new Exception( FIELDS_MISSING );	
		}
	}
	
	/**
	 * This will generate random password
	 * @return string
	 */
	
	private function randomPassword() {
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}

	
    /*
	 * 
	 * this will handles user postads process
	 * @param array $data
	 * @return boolean true or false based success 
	 */
	/*public function postads( array $data )
	{
		if(!empty( $data ))
		{
			// Trim all the incoming data:
			$trimmed_data = array_map('trim', $data);
			// escape variables for security
			//$adtitle = mysqli_real_escape_string($this->_con, $trimmed_data['image-file1']['name']);
			//$adtitle = $trimmed_data['image-file1']['name'];
			$adtitle = $_FILES['image-file1']['name'];
						
			//$_FILES['files']['name']
			/*if((!$adtitle) || (!$email) || (!$password) || (!$cpassword) ) {
				throw new Exception( FIELDS_MISSING );
			}
         
			$query = "INSERT INTO post_ads (ad_title) VALUES ('$adtitle')";
			if(mysqli_query($this->_con, $query))return true;
		} else{
			throw new Exception(POST_ADS_FAIL);
		}
	}
*/
	
	
	
	public function pr($data = ''){
		echo "<pre>"; print_r( $data ); echo "</pre>";
	}
}