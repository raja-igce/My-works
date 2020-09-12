<?php
//action.php
include 'ads_crud.php';
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

  echo $object->get_data_in_table("SELECT * FROM  post_ads ORDER BY id DESC LIMIT $start_from, $record_per_page");
  echo '<br /><div align="center">';
  echo $object->make_pagination_link("SELECT * FROM  post_ads ORDER by id", $record_per_page);
  echo '</div><br />';
 }
  
 
if($_POST["action"] == "hotel_satus")
 { 
$a = $_POST["user_id1"];

$query = "UPDATE  post_ads SET ad_status = '".$a."' WHERE id = '".$_POST["user_id"]."'";
  $object->execute_query($query);
 }

if($_POST["action"] == "set_featured")
 { 
$a = $_POST["user_id1"];

$query = "UPDATE  post_ads SET featured = '".$a."' WHERE id = '".$_POST["user_id"]."'";
  $object->execute_query($query);
 }
 
 
 
 if($_POST["action"] == "Delete")
 {
  
  $query1 = "SELECT * FROM  post_ads WHERE id = '".$_POST["user_id"]."'";
  $result1 = $object->execute_query($query1);
  while($row = mysqli_fetch_array($result1))
  {
if($row['cover_image'] !=  'ad-img2.jpg')
{
	unlink("../ads_images/".$row['cover_image']);
}
if($row['sub_img1'] !=  'ad-img2.jpg')
{
  unlink("../ads_images/".$row['sub_img1']);
}
if($row['sub_img2'] !=  'ad-img2.jpg')
{
  unlink("../ads_images/".$row['sub_img2']);
}
if($row['sub_img3'] !=  'ad-img2.jpg')
{
unlink("../ads_images/".$row['sub_img3']);
}

  
  //echo $row['hotelimg'];
  }
  
  $query = "DELETE FROM  post_ads WHERE id = '".$_POST["user_id"]."'";
  $object->execute_query($query);
  echo "Data Deleted";
 }
 
 if($_POST["action"] == "Search")
 {
  $search = mysqli_real_escape_string($object->connect, $_POST["query"]);
  $query = "
  SELECT * FROM  post_ads 
  WHERE user_name LIKE '%".$search."%' 
  OR ad_title LIKE '%".$search."%' 
  OR ad_type LIKE '%".$search."%' 
  OR item_type LIKE '%".$search."%' 
  OR property_type LIKE '%".$search."%' 
  OR main_catgory LIKE '%".$search."%' 
  OR sub_catgory LIKE '%".$search."%' 
  OR ad_city LIKE '%".$search."%' ORDER BY id DESC
  ";
  //echo $query;
  echo $object->get_data_in_table($query);  
 }
 
}
?>

