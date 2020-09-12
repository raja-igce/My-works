<?php 

require_once '../config.php';

//if form is submitted
if($_POST) {	

$validator = array('success' => false, 'messages' => array());

$StudentName = $_POST['s_name'];  	 	 		 			 	 	 	
$FatherName  = $_POST['f_name'];
$Sex  = $_POST['gender'];
$Mothername  = $_POST['m_name']; 	 	 	
$Religion = $_POST['religion'];	 	
$Community = $_POST['community']; 	 	 	
$Qualification = $_POST['qualification']; 	 	 	
$DOB = date("Y-m-d", strtotime($_POST['dob'])); 	 		

$file_name = $_FILES['fileToUpload']['name'];

if(!empty($file_name))
{
$rename = rand(0,99999);
$file_type = explode(".", $file_name);
$new_filename = $rename. "." . end($file_type);
$target = "upload/".$new_filename;

$temp = $_FILES['fileToUpload']['tmp_name'];

move_uploaded_file($temp,$target);
}
else
{
$file_name ="no-user.png";
}
	 	 	
$Address = $_POST['p_address']; 	 	 	
$AadhaarNo = $_POST['aadhaar_no']; 	 		
$PanNo = $_POST['pan_no']; 	 		
$BankAc = $_POST['bank_no']; 	 		
$ContactNo = $_POST['contact_no']; 	 	 	
$TrainingName = $_POST['training_name']; 	 	 	
$Month = $_POST['d_month']; 	 	 	
$TrainingFees = $_POST['t_fees']; 	 	 	
$TrainingJoining = date("Y-m-d", strtotime($_POST['t_join'])); 	 		
$Notebook = $_POST['q_price']; 	 	 	
$CertificateDate = date("Y-m-d", strtotime($_POST['c_issue'])); 	 		
$FamilyMemberDetails = $_POST['f_member']; 	 	 	
$BloodGroup = $_POST['b_group']; 	 	 	
$Status = 1;


	$sql = "INSERT INTO crc_training (StudentName, FatherName, Sex, Mothername, Religion, Community, Qualification, DOB, ProfilePhoto, Address, AadhaarNo,PanNo, BankAc,ContactNo, TrainingName, Month, TrainingFees, TrainingJoining,Notebook, CertificateDate, FamilyMemberDetails, BloodGroup,Status,DateTime) VALUES ('$StudentName', '$FatherName', '$Sex', '$Mothername', '$Religion', '$Community', '$Qualification', '$DOB', '$new_filename', '$Address', '$AadhaarNo', '$PanNo', '$BankAc', '$ContactNo', '$TrainingName', '$Month', '$TrainingFees', '$TrainingJoining', '$Notebook', '$CertificateDate', '$FamilyMemberDetails', '$BloodGroup' , '$Status' ,now())";
	
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