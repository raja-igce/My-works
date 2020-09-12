<?php 

require_once '../config.php';

$output = array('data' => array());

$sql = "SELECT * FROM crc_training  order by Id Desc";
$query = $connect->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
	$active = '';
		
		$actionButton = '
		
		<a type="button" data-toggle="modal" data-target="#viewMemberModal" onclick="viewmember('.$row['Id'].')" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp;
		
		<a type="button" data-toggle="modal" data-target="#editMemberModal" onclick="editMember('.$row['Id'].')" class="btn btn-primary"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>&nbsp;
		
		<a type="button" data-toggle="modal" data-target="#removeMemberModal" onclick="removeMember('.$row['Id'].')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp;
	';
		
	
	$output['data'][] = array(
		$x,
		$row['StudentName'],
		$row['ContactNo'],
		$row['Sex'],
		$row['TrainingFees'],
		$row['TrainingName'],

		$actionButton
	);

	$x++;
}

// database connection close
$connect->close();

echo json_encode($output);