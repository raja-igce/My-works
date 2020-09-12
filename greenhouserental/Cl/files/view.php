<?php
include('include/dbconnect.php');
$elaya = $_GET['coll'];
$sql= "select cover_photo,event_name,create_dt from collection where collection_id='$elaya' ";
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($result))
{
$photo=$row['cover_photo'];
$name=$row['event_name'];
$date=$row['create_dt'];

}
//$row = $result->fetch_assoc();

//print_r($row);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>WedArt Photography</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="esoft" />
  <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->

<style>
      a {color: #ffffff; width: 85px; margin: 0px auto; cursor: pointer;}
   
      a[data-type="fb"] {background: #3b5998;font-size: 14px;}
      a[data-type="gp"] {background: #dd4b39;font-size: 14px;}
      a[data-type="li"] {background: #0976b4;font-size: 14px;}
      a[data-type="tw"] {background: #55acee;font-size: 14px;}
      a[data-type="pt"] {background: #cc2127;font-size: 14px;}

</style>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<!--<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
--><!---//webfonts--->  



<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>


<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<style type="text/css">
#popupbox{
margin: 0; 
margin-left: 60%; 
margin-right: 40%;
margin-top: 50px; 
padding-top: 10px; 
width: 20%; 
position: absolute; 
background: #FAFAFA; 
border: solid #e7e7e7 1px; 
z-index: 9; 
font-family: arial; 
visibility: hidden; 
}
</style>
<script language="JavaScript" type="text/javascript">
function login(showhide){
if(showhide == "show"){
    document.getElementById('popupbox').style.visibility="visible";
}else if(showhide == "hide"){
    document.getElementById('popupbox').style.visibility="hidden"; 
}
}
</script>
</head>
<body>

<div id="wrapper">


<div>

<div class="graphs">


<div style="position:absolute; left:550px; top:350px; z-index:1; font-family:Arial, Helvetica, sans-serif; font-size:40px; font-weight:bold; text-transform:uppercase; color:#FFFFFF;"><? echo $name; ?></div>
<div style="position:absolute; left:650px; top:400px; z-index:1; font-family:Arial, Helvetica, sans-serif; font-size:30px;  color:#FFFFFF;"><? echo $date; ?></div>
<a href="#elaya"><div style="position:absolute; left:650px; top:480px; z-index:1; font-family:Arial, Helvetica, sans-serif; font-size:40px; font-weight:bold; text-transform:uppercase; color:#FFFFFF; border:1px solid #FFFFFF;">OPEN</div></a>



      <img src="collection/<?php echo $photo;?>"  width="100%"/>


     <div id="popupbox"> 
<form name="login" action="passwordcheck.php" method="post">

<center><input name="password" type="password" placeholder="Enter the password" required/></center><br>
<center><input type="submit" name="submit" value="Login" /></center>
<input type="hidden" name="pid" id="pid" value="<? echo $elaya;?>" />
</form>
<br />
<center><a href="javascript:login('hide');" style="color:#000000">close</a></center> 
</div> 
   
<div  style="padding-top:20px;float: right;class="goodshare-color">
      <a href="#" class="goodshare" data-type="fb">Facebook </a>&nbsp; 
      <a href="#" class="goodshare" data-type="li">LinkedIn</a> &nbsp;
      <a href="#" class="goodshare" data-type="tw">Twitter </a> &nbsp;
      <a href="#" class="goodshare" data-type="pt">Pinterest </a>&nbsp; 
    </div>
    <!--  <div align="right"><a id="elaya"></a><a href="collection/download.php?did=<?php echo $elaya; ?>" target="_blank">
<img src="images/zip.png" alt="Download" title="Download" style="margin:25px;"></a></div> -->


<div align="right"><a id="elaya"></a><a href="javascript:login('show');">
<img src="images/zip.png" alt="Download" title="Download" style="margin:25px;"></a></div>

<img src="images/logo.png" style="position:absolute; left:630px; top:570px; z-index:1;>

           
<div class="container">


<div id="main">
<?php 
/*
$col = $_GET['coll'];
$coll_sql		= "select * from collection where collection_id='$col' ";
$coll_result 	= mysqli_query($conn, $coll_sql);
$row 			= $coll_result->fetch_assoc();
date('d-M-Y', strtotime($row['event_dt'])); 
*/



$dir = "collection/server/php/files/".$_GET['coll']."/";

$dir1 = "collection/server/php/files/".$_GET['coll']."/thumbnail/";

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        $images = array();

        while (($file = readdir($dh)) !== false) {
            if (!is_dir($dir.$file)) {
?>
	<div class="box">
		<div class="pic template-download fade in">
			<span class="preview">
			<a data-gallery="" title="<?php echo $file;?>" href="<?php echo $dir.$file;?>">
			<img src="<?php echo $dir1.$file;?>" />
			</a>
			</span>
		</div>
	</div>
<?php 
			}
        }
	}
} ?>	
	<div class="cl"></div>
</div>

<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter="">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div> 
</div>
	      
	  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="js/load-image.all.min.js"></script>

<!-- blueimp Gallery script -->
<script src="js/jquery.blueimp-gallery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="goodshare.js"></script>
<!-- The main application script -->
<script src="js/main.js"></script>
</body>
</html>