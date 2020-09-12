<?php
require_once 'config.php';
$db = new Cl_DBclass();

$s = $_POST['ads_counter'];
$ip = $_SERVER['REMOTE_ADDR'];

	$query = "SELECT ads_count FROM post_ads where id = '$s'";
	$result = mysqli_query($db->con, $query);
	$data = mysqli_fetch_assoc($result);
	$k = $data['ads_count']; 
    $k = $k+1;

$query = "UPDATE post_ads SET ads_count = '$k' where id = '$s'";
	mysqli_query($db->con, $query);
	
exit;	
