<?php
require_once 'config.php';
$db = new Cl_DBclass();

$client_msg = htmlspecialchars($_POST['client_msg']);
$user_id = $_POST['user_id'];
$ads_id = $_POST['ads_id'];
$adspost_id = $_POST['adspost_id'];

$query = "INSERT INTO client_msg (user_id,ads_id,user_msg,msg_date,adspost_id) VALUES ('$user_id','$ads_id','$client_msg',CURRENT_TIMESTAMP,'$adspost_id')";
$result = mysqli_query($db->con, $query);

if($result)
{
echo '<div class="alert alert-success">
		<p class="text-center">Message Successful send.</p>
	</div>';
}
else
{
echo '<div class="alert alert-danger">
		<p class="text-center">Message Not Send.</p>
	</div>';	
}	
exit;	
