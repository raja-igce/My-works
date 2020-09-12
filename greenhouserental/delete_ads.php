<?php
require_once 'config.php';
$db = new Cl_DBclass();

$euser_id =$_POST['id'];

$query = "SELECT *FROM post_ads where id = ".$euser_id."";
$result = mysqli_query($db->con, $query);
$row = mysqli_fetch_assoc($result);	


if($row['cover_image'] !=  'ad-img2.jpg')
{
	unlink("ads_images/".$row['cover_image']);
}
if($row['sub_img1'] !=  'ad-img2.jpg')
{
  unlink("ads_images/".$row['sub_img1']);
}
if($row['sub_img2'] !=  'ad-img2.jpg')
{
  unlink("ads_images/".$row['sub_img2']);
}
if($row['sub_img3'] !=  'ad-img2.jpg')
{
unlink("ads_images/".$row['sub_img3']);
}

$query = "DELETE FROM  post_ads  WHERE id = ".$euser_id."";
mysqli_query($db->con, $query);	


exit;