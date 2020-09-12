<?php 

require_once '../config.php';

$output = array('success' => false, 'messages' => array());

$memberId = $_POST['member_id'];

$sql = "SELECT * FROM crc_training WHERE Id = {$memberId}";
$query = $connect->query($sql);
$result = $query->fetch_assoc();
//$connect->close();
if($result['ProfilePhoto'] != 'no-user.png')
{
$photo ='upload/'.$result['ProfilePhoto'];
unlink($photo);
}




$sql = "DELETE FROM crc_training WHERE Id = {$memberId}";
$query = $connect->query($sql);
if($query === TRUE) {
	$output['success'] = true;
	$output['messages'] = 'Successfully removed';
} else {
	$output['success'] = false;
	$output['messages'] = 'Error while removing the member information';
}

// close database connection
$connect->close();

echo json_encode($output);