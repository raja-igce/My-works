<?php 
include_once('header.php');
?>
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Classified Ads</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Classified Ads</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="about-wraper"> 
  <!-- About -->
  <div class="container">
    <div class="section">
      <div class="row">
<?php 
require_once 'config.php';
$db = new Cl_DBclass();

$query = "SELECT *FROM classified_ads";
$result = mysqli_query($db->con, $query);

if(mysqli_num_rows($result) > 0)
{

while($data = mysqli_fetch_assoc($result))
{
?> 
<div class="col-md-6">
           <div class="polaroid"><img src="admin/classifiedimage/<?php echo $data['ad_image']; ?>" alt="ad_image" class="img_responsive" />
		   <div class="containerpolaroid">
		   <p><i class="fa fa-map-signs icon_g" aria-hidden="true"></i><strong>Address:</strong> 
<?php echo $data['ad_address']; ?></p>
		   <p><i class="fa fa-link icon_g" aria-hidden="true"></i> <strong>Website:</strong> <a href="<?php echo $data['web_url']; ?>" target="_blank"><?php echo $data['web_url']; ?></a></p>
		   </div>
		   </div>
</div>
<?php
}
}
else
{
echo '<div class="alert alert-danger">
		<p class="text-center"> No Record Found.</p>
	</div>';
}
?>		
		
		
      </div>
    </div>
  </div>
  

</div>
<?php
include_once('footer.php');
?>