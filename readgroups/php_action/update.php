<?php 
require_once '../config.php';

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

$id = $_POST['member_id'];

$StudentName = $_POST['es_name'];  	 	 		 			 	 	 	
$FatherName  = $_POST['ef_name'];
$Sex  = $_POST['egender'];
$Mothername  = $_POST['em_name']; 	 	 	
$Religion = $_POST['ereligion'];	 	
$Community = $_POST['ecommunity']; 	 	 	
$Qualification = $_POST['equalification']; 	 	 	
$up_img = $_POST['up_img']; 	 	 	
$DOB = date("Y-m-d", strtotime($_POST['edob'])); 
	 		
$file_name = $_FILES['efileToUpload']['name']; 

if(!empty($file_name))
{

$photo ='upload/'.$up_img;
unlink($photo);

$rename = rand(0,99999);
$file_type = explode(".", $file_name);
$new_filename = $rename. "." . end($file_type);
$target = "upload/".$new_filename;

$temp = $_FILES['efileToUpload']['tmp_name'];

move_uploaded_file($temp,$target);
}
 	 	
$Address = $_POST['ep_address']; 	
$AadhaarNo = $_POST['eaadhaar_no']; 	 		
$PanNo = $_POST['epan_no']; 	 		
$BankAc = $_POST['ebank_no']; 	 		
$ContactNo = $_POST['econtact_no']; 	 	 	
$TrainingName = $_POST['etraining_name']; 	 	 	
$Month = $_POST['ed_month']; 	 	 	
$TrainingFees = $_POST['et_fees']; 	 	 	
$TrainingJoining = date("Y-m-d", strtotime($_POST['et_join'])); 	 		
$Notebook = $_POST['eq_price']; 	 	 	
$CertificateDate = date("Y-m-d", strtotime($_POST['ec_issue'])); 	 		
$FamilyMemberDetails = $_POST['ef_member']; 	 	 	
$BloodGroup = $_POST['eb_group']; 	 	 	


if(!empty($file_name))
{

	$sql = "UPDATE crc_training SET StudentName ='$StudentName', FatherName = '$FatherName', Sex ='$Sex', Mothername = '$Mothername', Religion = '$Religion', Community = '$Community', Qualification = '$Qualification', DOB ='$DOB', ProfilePhoto = '$new_filename', Address = '$Address', AadhaarNo = '$AadhaarNo',PanNo = '$PanNo', BankAc = '$BankAc', ContactNo = '$ContactNo', TrainingName ='$TrainingName', Month = '$Month', TrainingFees = '$TrainingFees', TrainingJoining = '$TrainingJoining',Notebook ='$Notebook', CertificateDate = '$CertificateDate', FamilyMemberDetails = '$FamilyMemberDetails', BloodGroup = '$BloodGroup', DateTime =now() WHERE Id = $id";
}
else
{
$sql = "UPDATE crc_training SET StudentName ='$StudentName', FatherName = '$FatherName', Sex ='$Sex', Mothername = '$Mothername', Religion = '$Religion', Community = '$Community', Qualification = '$Qualification', DOB ='$DOB', Address = '$Address', AadhaarNo = '$AadhaarNo',PanNo = '$PanNo', BankAc = '$BankAc', ContactNo = '$ContactNo', TrainingName ='$TrainingName', Month = '$Month', TrainingFees = '$TrainingFees', TrainingJoining = '$TrainingJoining',Notebook ='$Notebook', CertificateDate = '$CertificateDate', FamilyMemberDetails = '$FamilyMemberDetails', BloodGroup = '$BloodGroup', DateTime =now() WHERE Id = $id";

}

	
$query = $connect->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Successfully Added";		
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Error while adding the member information";
	}

	// close the database connection
	$connect->close();

	echo json_encode($validator);

}