<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Read</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">

				<!-- //nav_agile_w3l -->
                <li class="second logo admin"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Read </a></h1></li>
					
				
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					

							<div class="registration admin_agile">
								
												<div class="signin-form profile admin">
													<h2>Admin Login</h2>
													<div class="login-form">
														<form action="login.php" method="post" id="form1" >
															<input type="text" name="username" id="username" value="" required="" placeholder="Username">
															<input type="password" name="password" id="password" required="" placeholder="Password">
															<div class="tp">
																<input type="submit" value="LOGIN" id="login" name="login">
															</div>
															
														</form>
													</div>
													<h5>

													<h5> 
													<?php

if($_GET['error'] == 1)
{
echo login;	
}
?>
												</div>

					

				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2018 All Rights Reserved | Design by  <a href="http://e-soft.in/" target="_blank">e-soft</a></p>
</div>	


<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/gnmenu.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
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

		
<script>
$(document).ready(function(){
    
        $(".error").hide(4000);
    
});
</script>		
		
</body>
</html>