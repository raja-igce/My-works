<?php 

require_once '../config.php';

$memberId = $_POST['member_id'];

$sql = "SELECT * FROM crc_training WHERE Id = {$memberId}";
$query = $connect->query($sql);
$result = $query->fetch_assoc();

$connect->close();

echo json_encode($result);

