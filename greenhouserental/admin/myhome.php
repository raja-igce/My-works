<?php session_start();
if(empty($_SESSION['uname']))
{
header("location:index.php");
}	
?>
<?php include "header.php"; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <i class="fa fa-user-circle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php 
									
include "connect.php";
$result = mysqli_query($con,"select count(*) as total from  user");
$data=mysqli_fetch_assoc($result);
echo $data['total'];
 ?></div>
                                    <div>users</div>
                                </div>
                            </div>
                        </div>
                        <a href="user_index.php">
                            <div class="panel-footer">
                                <span class="pull-left">View users</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				<!-- box1-->
<div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <i class="fa fa-address-card fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php 
									

$result = mysqli_query($con,"select count(*) as total1 from  post_ads");
$data=mysqli_fetch_assoc($result);
echo $data['total1'];
 ?></div>
                                    <div>Total Ads</div>
                                </div>
                            </div>
                        </div>
                        <a href="ads_home.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Ads</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>



				<!-- box1-->
				<!-- box1-->
<div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <i class="fa fa-thumbs-up fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php 
									

$result = mysqli_query($con,"select count(*) as total2 from  post_ads where ad_status = 2");
$data=mysqli_fetch_assoc($result);
echo $data['total2'];
 ?></div>
                                    <div>Total Approved Ads</div>
                                </div>
                            </div>
                        </div>
                        <a href="ads_home.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Approved Ads</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>



				<!-- box1-->
				<!-- box1-->
<div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <i class="fa fa-thumbs-down fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php 
									

$result = mysqli_query($con,"select count(*) as total3 from  post_ads where ad_status = 1");
$data=mysqli_fetch_assoc($result);
echo $data['total3'];
 ?></div>
                                    <div>Total Unapproved Ads</div>
                                </div>
                            </div>
                        </div>
                        <a href="ads_home.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Unapproved Ads</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>



				<!-- box1-->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "footer.php"; ?>

