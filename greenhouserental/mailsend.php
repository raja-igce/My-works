<?php

/*function box($out1,$out2,$out3)
{
$semi_rand = md5(time()); 
$FROM = "info@christelmart.in";
$TO      = $out1;
$SUBJECT = $out2;
$MESSAGE =$out3;
send_simple_mail($FROM, $TO, $SUBJECT,$MESSAGE);
}
function send_simple_mail($from , $to, $subject, $message)
{
*/
    
 $email_from = "elayaraja@e-soft.in"; // Who the email is from 
 $email_subject =  "hai"; // The Subject of the email 
 $email_txt = "welcome to"; // Message that the email has in it  
 $email_to = "rajasekarigce@gmail.com"; // Who the email is to

 $headers = "From: ".$email_from;
 $semi_rand = md5(time()); 
 $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";     
 $headers .= "\nMIME-Version: 1.0\n" . 
            "Content-Type: multipart/mixed;\n" . 
            " boundary=\"{$mime_boundary}\"";  
  $email_message .= "This is a multi-part message in MIME format.\n\n" . 
                "--{$mime_boundary}\n" . 
                "Content-Type:text/html; charset=\"iso-8859-1\"\n" . 
               "Content-Transfer-Encoding: 7bit\n\n" . 
     $email_txt . "\n\n"; 
 $ok = @mail($email_to, $email_subject, $email_message, $headers); 

 if($ok) 
 { 
echo "send";
 } 
else 
{ 
echo "not send";
 }
 
?>