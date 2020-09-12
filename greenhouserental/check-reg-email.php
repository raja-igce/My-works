<?php
require_once 'config.php';
$db = new Cl_DBclass();


if( isset( $_GET['email'] ) && !empty($_GET['email'])){
	$email = $_GET['email'];
	$query = " SELECT count(email) cnt FROM user where email = '$email' ";
	$result = mysqli_query($db->con, $query);
	$data = mysqli_fetch_assoc($result);
	if($data['cnt'] > 0){
		echo 'false';
	}
	else{
		echo 'true';
	}
	exit;
}

if( isset( $_GET['phone'] ) && !empty($_GET['phone'])){
	$phone = $_GET['phone'];
	$query = " SELECT count(mobile) cnt FROM user where mobile = '$phone' ";
	$result = mysqli_query($db->con, $query);
	$data = mysqli_fetch_assoc($result);
	if($data['cnt'] > 0){
		echo 'false';
	}
	else{
		echo 'true';
	}
	exit;
}