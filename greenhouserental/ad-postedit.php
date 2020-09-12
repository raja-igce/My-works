<?php 
ob_start();
include_once('header.php');
if(!isset($_SESSION['logged_in'])){
	header('Location: userlogin.php');
}
?>

<?php
require_once 'config.php';
$db = new Cl_DBclass();

$id = base64_decode(urldecode($_GET['edit']));

$query = "SELECT * FROM post_ads where id = ".$id."";
$result = mysqli_query($db->con, $query);

if(mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_assoc($result);	
}
else
{
 header('location:dashboard.php');
}
?>


<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Post Ads</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Post Ads</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="userccount">
		  <div id="preview"></div>
		<form method="post" action="" class="form-postads" role="form" id="editads-post">  
		  
		  <div class="formpanel"> 
           <!-- Ad Information -->
            <h5>Edit Ad Information</h5>
            <div class="row">
			 <div class="col-md-12">
                <div class="formrow">
                  <input type="text" name="eadtitle" id="eadtitle" class="form-control" placeholder="Ad Title" value="<?php echo $row['ad_title'];?>">
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
<select class="form-control" name="eadtype" id="eadtype">
<option value="<?php echo $row['ad_type'];?>">I want to <?php echo $row['ad_type'];?></option>
<option value="Sell">I want to Sell</option>
<option value="Buy">I want to Buy</option>
</select>
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="eitemtype" id="eitemtype">
                    <option value="<?php echo $row['item_type'];?>"><?php echo $row['item_type'];?></option>
                    <option value="New">New</option>
                    <option value="Used">Used</option>
                  </select>
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="epropertytype" id="epropertytype">
                    <option value="<?php echo $row['property_type'];?>"><?php echo $row['property_type'];?></option>
                    <option value="Room for rent">Room for Rent</option>
                    <option value="Room for Apartment">Room for Apartment</option>
                    <option value="Buy Property">Buy Property</option>
                    <option value="Sale Property">Sale Property</option>
                    <option value="Buy used car/Vehicle">Buy used Car/Vehicle</option>
                    <option value="Sell used Car/Vehicle">Sell used Car/Vehicle</option>
					
					<!--<option value="Rent">For Rent</option>
                    <option value="Sale">For Sale</option>
                    <option value="Buy">For Buy</option>
					<option value="Car For Buy">Car For Buy</option>
                    <option value="Car For Sale">Car For Sale</option>-->
					
                  </select>
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="emaincatgory" id="emaincatgory">
                    <option value="<?php echo $row['main_catgory'];?>"><?php echo $row['main_catgory'];?></option>
                    <option value="Vehicles">Vehicles</option>
                    <option value="Real Estates">Real Estates</option>
                  </select>
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="esubcatgory" id="esubcatgory">
                    <option value="<?php echo $row['sub_catgory'];?>"><?php echo $row['sub_catgory'];?></option>
                    
                  </select>
				  <span class="help-block"></span>
                </div>
              </div>
			  
<div class="col-md-12">
   
   <div class="panel panel-success">
      <div class="panel-heading"><b>Instruction:</b></div>
	<div class="panel-body">
	  1. First image cover image.<br/><br/>
	  2. Only allow <span class="label label-warning">jpg and png</span> not allowed <span class="label label-warning">gif</span> Images.<br/><br/>
	  3. Upload image size less than <span class="label label-warning">2MB(2048kb)</span>.<br/><br/>
	  4. Image width and height <span class="label label-warning">1000px</span> to <span class="label label-warning">600px</span>.<br/>
	  </div>
	  
    </div>
</div>			  
			  
			  <!-- upload box -->
              <div class="col-md-12">

                <div class="col-md-3">
<?php if($row['cover_image'] != 'ad-img2.jpg')
{
	
$st ="fmblock";	
?>				
<!-- img-wrapper -->			
<div class="img-wrapper old_ads">
    <span class="close">&times;</span>
    <img src="ads_images/<?php echo $row['cover_image'];?>" alt="image" class="img_high">
</div>

<!-- img-wrapper -->
<?php
}
?>
				
			<div class="formrow <?php echo $st; ?>">
				<!-- baaaa -->
				<div class="imageupload uploadphotobx">
                <div class="file-tab uploadBox">
                    <label class="btn1 btn-file">
                        <span></span>
                        <!-- The file is stored here. -->
                        <input type="file" name="eimage-file1" id="eimage-file1" accept="image/x-png,image/jpeg">
                    </label>
                    <span class="glyphicon glyphicon-trash btn1 btn-danger"></span>
                </div>
            </div>
				<!-- aaaa -->
			</div>
			<input type="hidden" id="ecover_img" name="ecover_img" value="">
			
</div>
				
				
<div class="col-md-3">
<?php if($row['sub_img1'] != 'ad-img2.jpg')
{
$st1 ="fmblock1";	
?>				
<!-- img-wrapper -->			
<div class="img-wrapper old_ads1">
    <span class="close1">&times;</span>
    <img src="ads_images/<?php echo $row['sub_img1'];?>" alt="image" class="img_high">
</div>

<!-- img-wrapper -->
<?php
}
?>
				
				<div class="formrow <?php echo $st1; ?>">
				<!-- baaaa -->
				<div class="imageupload uploadphotobx">
                <div class="file-tab uploadBox">
                    <label class="btn1 btn-file">
                        <span></span>
                        <!-- The file is stored here. -->
                        <input type="file" name="eimage-file2" id="eimage-file2" accept="image/x-png,image/jpeg">
                    </label>
                    <span class="glyphicon glyphicon-trash btn1 btn-danger"></span>
                </div>
            </div>
				<!-- aaaa -->
                  </div>
				  			<input type="hidden" id="esub_img1" name="esub_img1" value="">
				</div>
				 <div class="col-md-3">
				 
<?php if($row['sub_img2'] != 'ad-img2.jpg')
{
	
$st2 ="fmblock2";	
?>				
<!-- img-wrapper -->			
<div class="img-wrapper old_ads2">
    <span class="close2">&times;</span>
				 <img src="ads_images/<?php echo $row['sub_img2'];?>" alt="image" class="img_high">
</div>

<!-- img-wrapper -->
<?php
}
?>				 

				 <div class="formrow <?php echo $st2; ?>">
				 <!-- baaaa -->
				<div class="imageupload uploadphotobx">
                <div class="file-tab uploadBox">
                    <label class="btn1 btn-file">
                        <span></span>
                        <!-- The file is stored here. -->
                        <input type="file" name="eimage-file3" id="eimage-file3" accept="image/x-png,image/jpeg">
                    </label>
                    <span class="glyphicon glyphicon-trash btn1  btn-danger"></span>
                </div>
            </div>
				<!-- aaaa -->
                  </div>
			<input type="hidden" id="esub_img2" name="esub_img2" value="">	  
				 </div>
<div class="col-md-3">
<?php if($row['sub_img3'] != 'ad-img2.jpg')
{
$st3 ="fmblock3";	
?>				
<!-- img-wrapper -->			
<div class="img-wrapper old_ads3">
    <span class="close3">&times;</span>
				 <img src="ads_images/<?php echo $row['sub_img3'];?>" alt="image" class="img_high">
</div>

<!-- img-wrapper -->
<?php
}
?>				 
				 
				 <div class="formrow <?php echo $st3; ?>">
				 
				 <!-- baaaa -->
				<div class="imageupload uploadphotobx">
                <div class="file-tab uploadBox">
                    <label class="btn1 btn-file">
                        <span></span>
                        <!-- The file is stored here. -->
                        <input type="file" name="eimage-file4" id="eimage-file4" accept="image/x-png,image/jpeg">
                    </label>
                    <span class="glyphicon glyphicon-trash btn1 btn-danger"></span>
                </div>
            </div>
				<!-- aaaa -->
				  
                  </div>
				  <input type="hidden" id="esub_img3" name="esub_img3" value="">
				 </div>
				 
		</div>	 
			  <!-- upload box -->
              <div class="col-md-3">
                <div class="formrow">
                  <input type="text" name="eadprice" id="eadprice" class="form-control" placeholder="Ad Price" value="<?php echo $row['ad_price'];?>">
				  <span class="help-block"></span>
                </div>
              </div>
			  <div class="col-md-3">
                <div class="formrow">
				<?php
				if(!empty($row['price_duration']))
				{
				?>
				
                  <select class="form-control" name="epreprice" id="epreprice">
                    <option value="<?php echo $row['price_duration'];?>"><?php echo $row['price_duration'];?></option>
					<option value="per Month">per Month</option>
                    <option value="per Year">per Year</option>
                  </select>
				<?php } ?> 
                </div>
              </div>
			  <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="ecity" id="ecity">
                    <option value="<?php echo $row['ad_city'];?>"><?php echo $row['ad_city'];?></option>
                    <option value="Chennai">Chennai</option>
                  </select>
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-3">
                <div class="formrow">
                  <input type="text" name="adlocation" id="adlocation" class="form-control" placeholder="Ad Location" value="<?php echo $row['ad_location'];?>">
				  <span class="help-block"></span>
                </div>
              </div>
			  
			  
              <!--<div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="state" id="state">
                    <option value="">Select State</option>
                    <option value="1">Tamil nadu</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="country" id="country">
                    <option value="">Select Country</option>
                    <option value="1">India</option>
                  </select>
                </div>
              </div>-->
			  <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="eadaddress" id="eadaddress" placeholder="Ad Address"><?php echo $row['ad_address'];?></textarea>
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="eaddetail" id="eaddetail" placeholder="Ad Detail"><?php echo $row['ad_des'];?></textarea>
				  <span class="help-block"></span>
                </div>
              </div>
			 </div>
			 <input type="hidden" id="euser_id" name="euser_id" value="<?php echo $row['id'];?>">
			 <input type="hidden" id="ead_status" name="ead_status" value="<?php echo $row['ad_status'];?>">
			 <input type="hidden" id="efeatured" name="efeatured" value="<?php echo $row['featured'];?>">
			 
            <br>
            <input type="submit" class="btn" value="Post An Ad">

          </div>
		  
		</form>  
		  	  
        </div>
      </div>
    </div>
  </div>
</div>

<?php
ob_end_flush();
include_once('footer.php');
?>