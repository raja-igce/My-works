<?php
require_once 'config.php';
$db = new Cl_DBclass();

if(!empty($_POST['ads_id']))
{
$id = $_POST['ads_id'];

//$query = "SELECT * FROM post_ads where id = ".$id."";
$query = "UPDATE post_ads SET ads_delete = '1', ad_status = '1', post_date = CURRENT_TIMESTAMP WHERE id = '$id'";
$result = mysqli_query($db->con, $query);
}
else
{
 header('location:dashboard.php');
}
?>
