<?php
require_once 'config.php';
$db = new Cl_DBclass();

$eadtitle = htmlspecialchars($_POST['eadtitle']);
$eadtype = htmlspecialchars($_POST['eadtype']);
$eitemtype = htmlspecialchars($_POST['eitemtype']);
$epropertytype = htmlspecialchars($_POST['epropertytype']);
$emaincatgory = htmlspecialchars($_POST['emaincatgory']);
$esubcatgory = htmlspecialchars($_POST['esubcatgory']);
$eadprice = htmlspecialchars($_POST['eadprice']);
$ecity = htmlspecialchars($_POST['ecity']);
$eadlocation = htmlspecialchars($_POST['adlocation']);
$eaddetail = htmlspecialchars($_POST['eaddetail']);
$euser_id = htmlspecialchars($_POST['euser_id']);
$euser_name = htmlspecialchars($_POST['euser_name']);

$ead_status = htmlspecialchars($_POST['ead_status']);
$efeatured = htmlspecialchars($_POST['efeatured']);

$epreprice = htmlspecialchars($_POST['epreprice']);;
$eadaddress = htmlspecialchars($_POST['eadaddress']);;



$ecover_img = htmlspecialchars($_POST['ecover_img']);
$esub_img1 = htmlspecialchars($_POST['esub_img1']);
$esub_img2 = htmlspecialchars($_POST['esub_img2']);
$esub_img3 = htmlspecialchars($_POST['esub_img3']);

if(!empty($ecover_img)) 
{
$query = "SELECT cover_image FROM post_ads where id = ".$euser_id."";
$result = mysqli_query($db->con, $query);
$row = mysqli_fetch_assoc($result);	

unlink("ads_images/".$row['cover_image']);
	
$query = "UPDATE post_ads SET cover_image = '$ecover_img'  WHERE id = ".$euser_id."";
mysqli_query($db->con, $query);	
}	

if(!empty($esub_img1)) 
{
 $query = "SELECT sub_img1 FROM post_ads where id = ".$euser_id."";
$result = mysqli_query($db->con, $query);
$row = mysqli_fetch_assoc($result);	

unlink("ads_images/".$row['sub_img1']);
	
$query = "UPDATE post_ads SET sub_img1 = '$esub_img1'  WHERE id = ".$euser_id."";
mysqli_query($db->con, $query);	
}	

if(!empty($esub_img2)) 
{
$query = "SELECT sub_img2 FROM post_ads where id = ".$euser_id."";
$result = mysqli_query($db->con, $query);
$row = mysqli_fetch_assoc($result);	
if($row['sub_img2'] !=  'ad-img2.jpg')

unlink("ads_images/".$row['sub_img2']);
	
$query = "UPDATE post_ads SET sub_img2 = '$esub_img2'  WHERE id = ".$euser_id."";
mysqli_query($db->con, $query);	
}	

if(!empty($esub_img3)) 
{
$query = "SELECT sub_img3 FROM post_ads where id = ".$euser_id."";
$result = mysqli_query($db->con, $query);
$row = mysqli_fetch_assoc($result);	

unlink("ads_images/".$row['sub_img3']);
	
$query = "UPDATE post_ads SET sub_img3 = '$esub_img3'  WHERE id = ".$euser_id."";
mysqli_query($db->con, $query);	
}	



/*$img1 = $_FILES['image-file1']['name'];
$img2 = $_FILES['image-file2']['name'];
$img3 = $_FILES['image-file3']['name'];
$img4 = $_FILES['image-file4']['name'];
*/
//image1
if(!empty($_FILES['eimage-file1']['name'])) 
{
 $name = $_FILES["eimage-file1"]["name"];
 $size = $_FILES["eimage-file1"]["size"];
 $ext = end(explode(".", $name));
 $allowed_ext = array("png", "jpg", "jpeg");
 if(in_array($ext, $allowed_ext))
 {
  
   $new_image = '';
   $new_name1 = md5(rand()) . '.' . $ext;
   $path = 'ads_images/' . $new_name1;
   list($width, $height) = getimagesize($_FILES["eimage-file1"]["tmp_name"]);
   if($ext == 'png')
   {
    $new_image = imagecreatefrompng($_FILES["eimage-file1"]["tmp_name"]);
   }
   if($ext == 'jpg' || $ext == 'jpeg')  
            {  
               $new_image = imagecreatefromjpeg($_FILES["eimage-file1"]["tmp_name"]);  
            }
            $new_width=1000;
            //$new_height = ($height/$width)*200;
            $new_height = 600;
            $tmp_image = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($tmp_image, $path, 100);
            imagedestroy($new_image);
            imagedestroy($tmp_image);
            //echo '<img src="'.$path.'" />';
  }
 else
 {
  //echo 'Invalid Image File';
 }
 
$query = "SELECT cover_image FROM post_ads where id = ".$euser_id."";
$result = mysqli_query($db->con, $query);
$row = mysqli_fetch_assoc($result);	

if($row['cover_image'] !=  'ad-img2.jpg')
{
unlink("ads_images/".$row['cover_image']);
} 
$query = "UPDATE post_ads SET cover_image = '$new_name1'  WHERE id = ".$euser_id."";
mysqli_query($db->con, $query);

}


//image2
if(!empty($_FILES['eimage-file2']['name'])) 
{
 $name = $_FILES["eimage-file2"]["name"];
 $size = $_FILES["eimage-file2"]["size"];
 $ext = end(explode(".", $name));
 $allowed_ext = array("png", "jpg", "jpeg");
 if(in_array($ext, $allowed_ext))
 {
  
   $new_image = '';
   $new_name2 = md5(rand()) . '.' . $ext;
   $path = 'ads_images/' . $new_name2;
   list($width, $height) = getimagesize($_FILES["eimage-file2"]["tmp_name"]);
   if($ext == 'png')
   {
    $new_image = imagecreatefrompng($_FILES["eimage-file2"]["tmp_name"]);
   }
   if($ext == 'jpg' || $ext == 'jpeg')  
            {  
               $new_image = imagecreatefromjpeg($_FILES["eimage-file2"]["tmp_name"]);  
            }
            $new_width=1000;
            //$new_height = ($height/$width)*200;
            $new_height = 600;
            $tmp_image = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($tmp_image, $path, 100);
            imagedestroy($new_image);
            imagedestroy($tmp_image);
            //echo '<img src="'.$path.'" />';
  }
 else
 {
  //echo 'Invalid Image File';
 }
 $query = "SELECT sub_img1 FROM post_ads where id = ".$euser_id."";
$result = mysqli_query($db->con, $query);
$row = mysqli_fetch_assoc($result);	
if($row['sub_img1'] !=  'ad-img2.jpg')
{
unlink("ads_images/".$row['sub_img1']);
}
$query = "UPDATE post_ads SET sub_img1 = '$new_name2'  WHERE id = ".$euser_id."";
mysqli_query($db->con, $query);
 
 
}

//image3
if(!empty($_FILES['eimage-file3']['name'])) 
{
 $name = $_FILES["eimage-file3"]["name"];
 $size = $_FILES["eimage-file3"]["size"];
 $ext = end(explode(".", $name));
 $allowed_ext = array("png", "jpg", "jpeg");
 if(in_array($ext, $allowed_ext))
 {
  
   $new_image = '';
   $new_name3 = md5(rand()) . '.' . $ext;
   $path = 'ads_images/' . $new_name3;
   list($width, $height) = getimagesize($_FILES["eimage-file3"]["tmp_name"]);
   if($ext == 'png')
   {
    $new_image = imagecreatefrompng($_FILES["eimage-file3"]["tmp_name"]);
   }
   if($ext == 'jpg' || $ext == 'jpeg')  
            {  
               $new_image = imagecreatefromjpeg($_FILES["eimage-file3"]["tmp_name"]);  
            }
            $new_width=1000;
            //$new_height = ($height/$width)*200;
            $new_height = 600;
            $tmp_image = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($tmp_image, $path, 100);
            imagedestroy($new_image);
            imagedestroy($tmp_image);
            //echo '<img src="'.$path.'" />';
  }
 else
 {
  //echo 'Invalid Image File';
 }

$query = "SELECT sub_img2 FROM post_ads where id = ".$euser_id."";
$result = mysqli_query($db->con, $query);
$row = mysqli_fetch_assoc($result);	
if($row['sub_img2'] !=  'ad-img2.jpg')
{
unlink("ads_images/".$row['sub_img2']);
}
$query = "UPDATE post_ads SET sub_img2 = '$new_name3'  WHERE id = ".$euser_id."";
mysqli_query($db->con, $query);
 
}

//image4
if(!empty($_FILES['eimage-file4']['name'])) 
{
 $name = $_FILES["eimage-file4"]["name"];
 $size = $_FILES["eimage-file4"]["size"];
 $ext = end(explode(".", $name));
 $allowed_ext = array("png", "jpg", "jpeg");
 if(in_array($ext, $allowed_ext))
 {
  
   $new_image = '';
   $new_name4 = md5(rand()) . '.' . $ext;
   $path = 'ads_images/' . $new_name4;
   list($width, $height) = getimagesize($_FILES["eimage-file4"]["tmp_name"]);
   if($ext == 'png')
   {
    $new_image = imagecreatefrompng($_FILES["eimage-file4"]["tmp_name"]);
   }
   if($ext == 'jpg' || $ext == 'jpeg')  
            {  
               $new_image = imagecreatefromjpeg($_FILES["eimage-file4"]["tmp_name"]);  
            }
            $new_width=1000;
            //$new_height = ($height/$width)*200;
            $new_height = 600;
            $tmp_image = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($tmp_image, $path, 100);
            imagedestroy($new_image);
            imagedestroy($tmp_image);
            //echo '<img src="'.$path.'" />';
  }
 else
 {
  //echo 'Invalid Image File';
 }
  $query = "SELECT sub_img3 FROM post_ads where id = ".$euser_id."";
$result = mysqli_query($db->con, $query);
$row = mysqli_fetch_assoc($result);	
if($row['sub_img3'] !=  'ad-img2.jpg')
{
unlink("ads_images/".$row['sub_img3']);
} 
$query = "UPDATE post_ads SET sub_img3 = '$new_name4'  WHERE id = ".$euser_id."";
mysqli_query($db->con, $query);
 
 
}

$query = "UPDATE post_ads SET ad_title = '$eadtitle', ad_type = '$eadtype', item_type = '$eitemtype', property_type = '$epropertytype', main_catgory = '$emaincatgory', sub_catgory = '$esubcatgory', ad_price = '$eadprice', ad_location = '$eadlocation', ad_city = '$ecity', ad_des = '$eaddetail', price_duration = '$epreprice', ad_address ='$eadaddress'  WHERE id = '$euser_id'";

$result = mysqli_query($db->con, $query);

if($result)
{
echo '<div class="alert alert-success">
		<p class="text-center">Edit Ad Posted Successful.</p>
	</div>';
	
echo '<script>
    window.setTimeout(function(){
        window.location.href = "dashboard.php";
    }, 3000); </script>';
}
else
{
echo '<div class="alert alert-danger">
		<p class="text-center"> Ad Not Posted.</p>
	</div>';
}

exit;