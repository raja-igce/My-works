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
<title>Read</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" " />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/data-table-style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/data_table_style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
<link href="jquery_ui/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />
<link href="loader/introLoader.css" rel="stylesheet">
<link href="data_picker/datepicker.css" rel="stylesheet">

</head>
<body>

<!-- banner -->
<div id="element" class="introLoading"></div>
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
									
				<li><div class="dash_btn"><a href="main-page.php" class=""><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;Dashboard</a></div></li>
				
				
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>

			</ul>

			
		</div>
		<div class="clearfix"></div>
</div>		
