<?php
include 'usercrud.php';
$object = new Crud();
if(isset($_POST["action"]))
{
 if($_POST["action"] == "Load")
 {
  $record_per_page = 10;
  $page = '';

  if(isset($_POST["page"]))
  {
   $page = $_POST["page"];
  }
  else
  {
   $page = 1;
  }
  $start_from = ($page - 1) * $record_per_page;

  echo $object->get_data_in_table("SELECT * FROM user ORDER BY user_id DESC LIMIT $start_from, $record_per_page");
  echo '<br /><div align="center">';
  echo $object->make_pagination_link("SELECT * FROM user ORDER by user_id", $record_per_page);
  echo '</div><br />';

 }
 
 if($_POST["action"] == "set_user_status")
 { 
$a = $_POST["user_id1"];

$query = "UPDATE  user SET user_status = '".$a."' WHERE user_id = '".$_POST["user_id"]."'";
  $object->execute_query($query);
 }
 
 
 
 if($_POST["action"] == "Delete")
 {
  $query = "DELETE FROM user WHERE user_id = '".$_POST["user_id"]."'";
  $object->execute_query($query);
  
  $query1 = "DELETE FROM post_ads WHERE user_id = '".$_POST["user_id"]."'";
  $object->execute_query($query1);
 // echo "Data Deleted";
 }
 
 if($_POST["action"] == "Search")
 {
  $search = mysqli_real_escape_string($object->connect, $_POST["query"]);
  $query = "
  SELECT * FROM user 
  WHERE name LIKE '%".$search."%' 
  OR mobile LIKE '%".$search."%' 
  OR email LIKE '%".$search."%' 
  ORDER BY user_id DESC
  ";
  //echo $query;
  echo $object->get_data_in_table($query);  
 }
 
}
?>

