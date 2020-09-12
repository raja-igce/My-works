<?php
require_once 'config.php';
$db = new Cl_DBclass();

if( isset( $_GET['phone'] ) && !empty($_GET['phone'])){
	$phone = $_GET['phone'];
	$query = " SELECT count(mobile) cnt FROM user where mobile = '$phone' ";
	$result = mysqli_query($db->con, $query);
	$data = mysqli_fetch_assoc($result);
	if($data['cnt'] > 0){
		
		echo 'true';
	}
	else{
		echo 'false';
	}
	exit;
}