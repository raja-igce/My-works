<?php

$EmailFrom = $_POST['contactemail'];
$EmailTo = 'admin@e-soft.in';
$Subject = $_POST['contactsubject'];
$Name = Trim(stripslashes($_POST['contactname']));
$Email = Trim(stripslashes($_POST['contactemail']));
$Message = Trim(stripslashes($_POST['contactcomments'])); 
$mobile = Trim(stripslashes($_POST['contactphone'])); 



$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Mobile No: ";
$Body .= $mobile;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
 $success = @mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
?>
<?php	
if($success)
{
?>
<br/>
<div class="alert alert-info">
<strong>Info!</strong> Mail successfull sent.
</div> 
<?php }
else
{
?>
<br/>
<div class="alert  alert-danger">
<strong>Info!</strong> Mail not sent.
</div> 
<?php 
} 
?>