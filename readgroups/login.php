<?php
session_start();

include "config.php";



if(isset($_POST["username"]) && isset($_POST["password"]))
{
 $username = mysqli_real_escape_string($connect, $_POST["username"]);
 $password = md5(mysqli_real_escape_string($connect, $_POST["password"]));
  
 $sql = "SELECT * FROM user_login WHERE username = '".$username."' AND password = '".$password."'";   
 
 $result = mysqli_query($connect, $sql);
 $num_row = mysqli_num_rows($result);
 if($num_row > 0)
 {
  $data = mysqli_fetch_array($result);
  $_SESSION["username"] = $data["username"];
  //echo $data["username"];
  header('location:main-page.php');
  
 }
 
 else
 {
header('location:index.php?error=1');	 
 }
 
}
?>