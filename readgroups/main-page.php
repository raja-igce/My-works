<?php
session_start();
   if(!isset($_SESSION["username"]))
   {
    header("location: index.php");
   }
?>

<!DOCTYPE html>
<html>
<head>
<title>Read Groups</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" "/>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>

<!-- banner -->
<div class="wthree_agile_admin_info">
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">

				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							
							
							<ul class="gn-menu agile_menu_drop">
								<li><a href="main-page.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								
								<!--<li>
									<a href="#"> <i class="fa fa-file-text-o" aria-hidden="true"></i>CRC Training <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Inputs</a></li>
									</ul>
								</li> -->
								
							<li>
							<a href="crc_training.php"><i class="fa fa-book" aria-hidden="true"></i>CRC Training <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
							</li>	
								
							<li>
							<a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a> 
							</li>	
								
								
							</ul>
												
						</div>
					</nav>
				</li>

                <li class="second logo"><h1><a href="main-page.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>READ</a></h1></li>
					<!-- <li class="second admin-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/admin.png" alt=""> </span> 
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
									
						</ul>
				</li> -->
				
				
				
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>

			</ul>

			
		</div>
		</div>
<!-- banner -->
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					<!-- /agile_top_w3_grids-->
					   <div class="agile_top_w3_grids">
					   
					   
					          <!--<ul class="ca-menu">
									<li>
										<a href="read_staff.php">
										  <i class="fa fa-users" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main one"></h4>
												<h3 class="ca-sub one">Read Staff</h3>
											</div>
										</a>
									</li>
                                    
                                    
                                    <li>
										<a href="crc_training.php">
											
<i class="fa fa-book" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main"></h4>
												<h3 class="ca-sub">CRC Training</h3>
											</div>
										</a>
									</li>
                                    
                                    
									<li>
										<a href="#">
											<i class="fa fa-medkit" aria-hidden="true"></i>
											<div class="ca-content">
											<h4 class="ca-main two"></h4>
												<h3 class="ca-sub two">HIV</h3>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-gift" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main three"></h4>
												<h3 class="ca-sub three">Sponsership</h3>
											</div>
										</a>
									</li>
									
									<li>
										<a href="#">
											<i class="fa fa-globe" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main four"></h4>
												<h3 class="ca-sub four">Network Program</h3>
											</div>
										</a>
									</li>
									
									
									
									<li>
										<a href="#">
											
											<i class="fa fa-building-o" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main"></h4>
												<h3 class="ca-sub five">School</h3>
											</div>
										</a>
									</li>
									
										
									
									<li>
										<a href="#">
										  <i class="fa fa-check" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main one"></h4>
												<h3 class="ca-sub six">Attendance</h3>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-money" aria-hidden="true"></i>
											<div class="ca-content">
											<h4 class="ca-main two"></h4>
												<h3 class="ca-sub seven">Staff Salary</h3>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-user" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main three"></h4>
												<h3 class="ca-sub eight">Account</h3>
											</div>
										</a>
									</li>
									
									<li>
										<a href="#">
											<i class="fa fa-file" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main four"></h4>
												<h3 class="ca-sub nine">Reports</h3>
											</div>
										</a>
									</li>
									
									
									<div class="clearfix"></div>
								</ul> -->
								
<!-- tab -->								
<div class="row">
    
	<div class="col-lg-3">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-users fa-5x" aria-hidden="true"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">1</p>
                <p class="announcement-text">Read Staff</p>
              </div>
            </div>
          </div>
          <a href="read_staff.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
	  
	  
      <div class="col-lg-3">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-book fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">12</p>
                <p class="announcement-text"> CRC Training</p>
              </div>
            </div>
          </div>
          <a href="crc_training.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
	  
	  
      <div class="col-lg-3">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-medkit fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">18</p>
                <p class="announcement-text">HIV</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
	  
	  
      <div class="col-lg-3">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-gift fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">9000</p>
                <p class="announcement-text"> Sponsership</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

</div>

<!-- aaaa -->
<div class="row">
    
	<div class="col-lg-3">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">1</p>
                <p class="announcement-text">Network Program</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
	  
	  
      <div class="col-lg-3">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-building-o fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">12</p>
                <p class="announcement-text"> School</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
	  
	  
      <div class="col-lg-3">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-check fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">18</p>
                <p class="announcement-text">Attendance</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
	  
	  
      <div class="col-lg-3">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-money fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">9000</p>
                <p class="announcement-text"> Staff Salary</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

</div>

<!-- aaaa -->
<div class="row">
    
	<div class="col-lg-3">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-user fa-5x" aria-hidden="true"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">1</p>
                <p class="announcement-text">Account</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
	  
	  
      <div class="col-lg-3">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-file fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">12</p>
                <p class="announcement-text"> Reports</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
	  
	  
<!--      <div class="col-lg-3">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-check fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">18</p>
                <p class="announcement-text">Attendance</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
	  
	  
      <div class="col-lg-3">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-money fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">9000</p>
                <p class="announcement-text"> Staff Salary</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div> -->

</div>								
<!-- tab -->								
					   </div>
					   </div>
					   </div>

<?php include "footer.php"; ?>	


<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/classie.js"></script>
<script src="js/gnmenu.js"></script>
<script>
new gnMenu( document.getElementById( 'gn-menu' ) );
</script>

<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
</script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>