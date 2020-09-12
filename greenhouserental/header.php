<?php
session_start();
#70952d
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Classified Ads</title>
<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">
<!-- Owl carousel -->
<link href="css/owl.carousel.css" rel="stylesheet">

<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Style -->
<link href="css/main.css" rel="stylesheet">
<link href="css/immybox.css" rel="stylesheet">
<link href="css/bootstrap-imageupload.css" rel="stylesheet">
<link href="css/richtext.min.css" rel="stylesheet">
<link href="css/pagination.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Header start -->
<?php
$act = basename($_SERVER['REQUEST_URI']);
if($act == "index.php")
{
$home = "active";	
}
elseif($act == "about_us.php")
{
$home1 = "active";	
}
elseif($act == "ad-post.php")
{
	$home2 = "active";
}
elseif($act == "contact_us.php")
{
	$home3 = "active";
}

?>

<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12"> <a href="index.php" class="logo"><img src="images/logo.png" alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-9 col-sm-9 col-xs-12"> 
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav">
			
              <li class="dropdown back1 <?php echo $home; ?>"><a href="index.php">Home </a></li>
              <li class="back1 <?php echo $home1; ?>"><a href="about_us.php">About us</a></li>
			  
              <li class="dropdown back1 <?php echo $home2; ?>"><a href="ad-post.php">Post an Ad</a> 
               
              </li>
            
              </li>
              <li class="back1 <?php echo $home3; ?>"><a href="contact_us.php">Contact</a></li>
<!-- login -->
<?php if($_SESSION['logged_in']) { ?>
<li class="dropdown"><a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $_SESSION['name']; ?> <span class="caret"></span></a> 
                <!-- dropdown start -->
                <ul class="dropdown-menu">
                  <li><a href="dashboard.php">Dashboard</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
                <!-- dropdown end --> 
</li>
<?php 
}
else
{
?>
<li class="postad"><a href="userlogin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
 Login</a></li>
<li class="register"><a href="register.php"><i class="fa fa-user" aria-hidden="true"></i>
 Register</a></li>
<?php
}
?>
</ul>
            <!-- Nav collapes end --> 
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- Nav end --> 
      </div>
    </div>
    <!-- row end --> 
  </div>
  <!-- Header container end --> 
</div>
<!-- Header end -->