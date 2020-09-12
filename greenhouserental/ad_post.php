<?php
require_once 'config.php';
$db = new Cl_DBclass();


$adtitle = htmlspecialchars($_POST['adtitle']);
$adtype = htmlspecialchars($_POST['adtype']);
$itemtype = htmlspecialchars($_POST['itemtype']);
$propertytype = htmlspecialchars($_POST['propertytype']);
$maincatgory = htmlspecialchars($_POST['maincatgory']);
$subcatgory = htmlspecialchars($_POST['subcatgory']);
$adprice = htmlspecialchars($_POST['adprice']);
$city = htmlspecialchars($_POST['city']);
$adlocation = htmlspecialchars($_POST['adlocation']);
$addetail = htmlspecialchars($_POST['addetail']);
$user_id = htmlspecialchars($_POST['user_id']);
$user_name = htmlspecialchars($_POST['user_name']);

$user_mobile = htmlspecialchars($_POST['user_mobile']);


$preprice = htmlspecialchars($_POST['preprice']);
$adaddress = htmlspecialchars($_POST['adaddress']);

$ad_status = 1;
$ad_featured = 1;
$ads_count = 0;
$ads_delete = 1;
/*$img1 = $_FILES['image-file1']['name'];
$img2 = $_FILES['image-file2']['name'];
$img3 = $_FILES['image-file3']['name'];
$img4 = $_FILES['image-file4']['name'];
*/
//image1
if(!empty($_FILES['image-file1']['name'])) 
{
 $name = $_FILES["image-file1"]["name"];
 $size = $_FILES["image-file1"]["size"];
 $ext = end(explode(".", $name));
 $allowed_ext = array("png", "jpg", "jpeg");
 if(in_array($ext, $allowed_ext))
 {
  
   $new_image = '';
   $new_name1 = md5(rand()) . '.' . $ext;
   $path = 'ads_images/' . $new_name1;
   list($width, $height) = getimagesize($_FILES["image-file1"]["tmp_name"]);
   if($ext == 'png')
   {
    $new_image = imagecreatefrompng($_FILES["image-file1"]["tmp_name"]);
   }
   if($ext == 'jpg' || $ext == 'jpeg')  
            {  
               $new_image = imagecreatefromjpeg($_FILES["image-file1"]["tmp_name"]);  
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
}
else
{
$new_name1 = 'ad-img2.jpg';
}
//image2
if(!empty($_FILES['image-file2']['name'])) 
{
 $name = $_FILES["image-file2"]["name"];
 $size = $_FILES["image-file2"]["size"];
 $ext = end(explode(".", $name));
 $allowed_ext = array("png", "jpg", "jpeg");
 if(in_array($ext, $allowed_ext))
 {
  
   $new_image = '';
   $new_name2 = md5(rand()) . '.' . $ext;
   $path = 'ads_images/' . $new_name2;
   list($width, $height) = getimagesize($_FILES["image-file2"]["tmp_name"]);
   if($ext == 'png')
   {
    $new_image = imagecreatefrompng($_FILES["image-file2"]["tmp_name"]);
   }
   if($ext == 'jpg' || $ext == 'jpeg')  
            {  
               $new_image = imagecreatefromjpeg($_FILES["image-file2"]["tmp_name"]);  
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
}
else
{
$new_name2 = 'ad-img2.jpg';
}
//image3
if(!empty($_FILES['image-file3']['name'])) 
{
 $name = $_FILES["image-file3"]["name"];
 $size = $_FILES["image-file3"]["size"];
 $ext = end(explode(".", $name));
 $allowed_ext = array("png", "jpg", "jpeg");
 if(in_array($ext, $allowed_ext))
 {
  
   $new_image = '';
   $new_name3 = md5(rand()) . '.' . $ext;
   $path = 'ads_images/' . $new_name3;
   list($width, $height) = getimagesize($_FILES["image-file3"]["tmp_name"]);
   if($ext == 'png')
   {
    $new_image = imagecreatefrompng($_FILES["image-file3"]["tmp_name"]);
   }
   if($ext == 'jpg' || $ext == 'jpeg')  
            {  
               $new_image = imagecreatefromjpeg($_FILES["image-file3"]["tmp_name"]);  
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
}
else
{
$new_name3 = 'ad-img2.jpg';
}
//image4
if(!empty($_FILES['image-file4']['name'])) 
{
 $name = $_FILES["image-file4"]["name"];
 $size = $_FILES["image-file4"]["size"];
 $ext = end(explode(".", $name));
 $allowed_ext = array("png", "jpg", "jpeg");
 if(in_array($ext, $allowed_ext))
 {
  
   $new_image = '';
   $new_name4 = md5(rand()) . '.' . $ext;
   $path = 'ads_images/' . $new_name4;
   list($width, $height) = getimagesize($_FILES["image-file4"]["tmp_name"]);
   if($ext == 'png')
   {
    $new_image = imagecreatefrompng($_FILES["image-file4"]["tmp_name"]);
   }
   if($ext == 'jpg' || $ext == 'jpeg')  
            {  
               $new_image = imagecreatefromjpeg($_FILES["image-file4"]["tmp_name"]);  
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
}
else
{
$new_name4 = 'ad-img2.jpg';
}


$query = "INSERT INTO post_ads (user_id,user_name,ad_title, ad_type, item_type, property_type, main_catgory, sub_catgory, ad_price, ad_location, ad_city, ad_des, cover_image, sub_img1, sub_img2, sub_img3, ad_status, post_date,featured,ads_count,price_duration,ad_address,ads_delete) VALUES ('$user_id','$user_name','$adtitle', '$adtype', '$itemtype', '$propertytype', '$maincatgory', '$subcatgory', '$adprice', '$adlocation', '$city', '$addetail','$new_name1', '$new_name2', '$new_name3', '$new_name4', '$ad_status', CURRENT_TIMESTAMP,'$ad_featured','$ads_count','$preprice','$adaddress','$ads_delete')";
$result = mysqli_query($db->con, $query);

if($result)
{
echo '<div class="alert alert-success">
		<p class="text-center">Ad Posted Successful. After Admin approval your as will be displayed.</p>
	</div>';
	
	
	if(!empty($user_mobile))			
		{
		$b1 ="Dear"." ". ucfirst($user_name); 

        $msg1 = $b1."\n".'your ad posted successfully. Site administer approved within 30 mins.';		
		$msg = urlencode($msg1);
		
        $mobileno = $user_mobile;
        
		/*$url = "http://198.15.98.50/API/pushsms.aspx?loginID=elayaraja106@gmail.com&password=123456&mobile=".$mobileno.""."&text=".$msg."&senderid=ELAYAA&route_id=2&Unicode=0";*/
		
		$url = "http://198.15.103.106/API/pushsms.aspx?loginID=elayaraja106&password=123456&mobile=".$mobileno.""."&text=".$msg."&senderid=SRCNCS&route_id=1&Unicode=1";
		
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $buffer = curl_exec($ch);
		if(empty ($buffer))
		{ 

        }
		else
		{ 

        } 
		curl_close($ch);	
		}
	
	
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