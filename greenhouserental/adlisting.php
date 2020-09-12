<?php
require_once 'config.php';
$db = new Cl_DBclass();

?>
<?php 
include_once('header.php');
?>
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Listing</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Search Result</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->
<?php
$query = "SELECT * FROM post_ads where ad_status = 2";
$adtitle =$_POST['search'];
$scity =$_POST['scity'];

if(!empty($adtitle))
{
	$query.=" and ad_title LIKE '%".$adtitle."%'";
}
if(!empty($scity))
{
	$query.=" and ad_city = '".$scity."'";
}

if(!empty($_GET['property']))
{
$query.=" and property_type  = '".base64_decode(urldecode($_GET['property']))."'";
}

if(!empty($_GET['ad_loc']))
{
	$query.=" and ad_location = '".base64_decode(urldecode($_GET['ad_loc']))."'";
}

if(!empty($_GET['motors']))
{
	$query.=" and main_catgory = '".base64_decode(urldecode($_GET['motors']))."'";
}

    
if(isset($_POST['SubmitButton']))
{ 
$subsearch = $_POST['subsearch']; 
$adlocation = $_POST['adlocation']; 
$s_city = $_POST['s_city']; 

if(!empty($subsearch))
{
	$query.=" and ad_title LIKE '%".$subsearch."%'";
}
if(!empty($adlocation))
{
	$query.=" and ad_location = '".$adlocation."'";
}
if(!empty($s_city))
{
	$query.=" and ad_city = '".$s_city."'";
}
  
}    

if(isset($_POST['updateresult']))
{ 
$adtype = $_POST['adtype'];
$itemtype = $_POST['itemtype'];
$propertytype = $_POST['propertytype'];
$maincatgory = $_POST['maincatgory'];
$subcatgory = $_POST['subcatgory'];
$pricestart = $_POST['pricestart'];
$priceend = $_POST['priceend'];

if(!empty($adtype))
{
	$query.=" and ad_type = '".$adtype."'";
}
if(!empty($itemtype))
{
	$query.=" and item_type  = '".$itemtype."'";
}
if(!empty($propertytype))
{
	$query.=" and property_type  = '".$propertytype."'";
}
if(!empty($maincatgory))
{
	$query.=" and main_catgory  = '".$maincatgory."'";
}
if(!empty($subcatgory))
{
	$query.=" and sub_catgory  = '".$subcatgory."'";
}
if(!empty($pricestart))
{
	$query.=" and ad_price  >= ".$pricestart."";
}
if(!empty($priceend))
{
	$query.=" and ad_price  <= ".$priceend."";
}


}

if(isset($_POST['priceorder']))
{ 

$priceorder =$_POST['priceorder'];

if($priceorder == '1')
{
	$query.=" ORDER BY ad_price ASC";
}
else
{
	$query.=" ORDER BY ad_price DESC";
}

}
else
{
	$query.=" ORDER BY id DESC";
}

?>



<div class="listpgWraper">
  <div class="container"> 
    <form action="" method="post">
    <!-- Page Title start -->
    <div class="pageSearch">
      <div class="row">
        <div class="col-md-3"><a href="ad-post.php" class="btn"><i class="fa fa-file-text" aria-hidden="true"></i> Post a Free Ad</a></div>
        <div class="col-md-9">
          <div class="searchform">
            <div class="row">
              <div class="col-md-5 col-sm-4">
                <input type="text" class="form-control" placeholder="Search" name="subsearch" id="subsearch" />
              </div>
              <div class="col-md-3 col-sm-3">
                <select class="form-control" name="s_city" id="s_city">
                  <option value="Chennai">Chennai</option>
                </select>
              </div>
              <div class="col-md-3 col-sm-3">
                <input type="text" name="adlocation" id="adlocation" class="form-control" placeholder="Ad Location">
              </div>
              <div class="col-md-1 col-sm-2">
                <button class="btn" type="submit" name="SubmitButton" id="SubmitButton"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Title end --> 
    </form>
    <!-- Search Result and sidebar start -->
    <div class="row">
      <div class="col-md-3 col-sm-5"> 
        <!-- Side Bar start -->
        <div class="sidebar"> 
  <form action="" method="post">     
		<!-- type -->
          <div class="widget">
            <h4 class="widget-title">Ad Type</h4>
            <select class="form-control" name="adtype" id="adtype">
              <option value="">Ad type</option>
			   <option value="Property Rental">Property Rental</option>
              <option value="Sell">I want to Sell</option>
              <option value="Buy">I want to Buy</option>
            </select>
          </div>
          <!-- type end -->		   
		<!-- type -->
          <div class="widget">
            <h4 class="widget-title">Item Type</h4>
            <select class="form-control" name="itemtype" id="itemtype">
              <option value="">Item type</option>
                    <option value="New">New</option>
                    <option value="Used">Used</option>
            </select>
          </div>
          <!-- type end -->
<!-- type -->
          <div class="widget">
            <h4 class="widget-title">Property Type</h4>
            <select class="form-control" name="propertytype" id="propertytype">
              <option value="">Property type</option>
			  <option value="Room for rent">Room for Rent</option>
                    <option value="Apartment for Rent">Apartment for Rent</option>
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
          </div>
          <!-- type end -->
<!-- type -->
          <div class="widget">
            <h4 class="widget-title">Select Main Category</h4>
            <select class="form-control" name="maincatgory" id="maincatgory">
              <option value="">Select Main Category</option>
              <option value="Vehicle">Vehicle</option>
              <option value="Real Estate">Property/Real Estate</option>
            </select>
          </div>
          <!-- type end -->	
<!-- type -->
          <div class="widget">
            <h4 class="widget-title">Select Sub Category</h4>
            <select class="form-control" name="subcatgory" id="subcatgory">
              <option value="">Select Sub Category</option>
                    
            </select>
          </div>
          <!-- type end -->	
		  
				   
          <!-- Price -->
          <div class="widget">
            <h4 class="widget-title">Price Range</h4>
            
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="pricestart" id="pricestart" class="form-control" placeholder="500">
              </div>
              <div class="col-md-6">
               <input type="text" name="priceend" id="priceend" class="form-control" placeholder="2000">
              </div>
            </div>
          </div>
          <!-- Price end --> 
                 
          <!-- button -->
          <div class="searchnt">
            <button class="btn" type="submit" name="updateresult" id="updateresult"><i class="fa fa-search" aria-hidden="true"></i> Update Results</button>
			
          </div>
          <!-- button end-->
</form>		  
        </div>
        <!-- Side Bar end --> 
      </div>
      <div class="col-md-9 col-sm-7">
        <div class="sortbybar">
          <div class="row">
		    <form action="" method="post">   
            <div class="col-sm-2"> 
			<a href="adlisting.php" data-toggle="tooltip" data-placement="top" title="" class="listby" data-original-title="Result by List View"><i class="fa fa-th-list" aria-hidden="true"></i></a> 
			<!--<a href="grid.html" data-toggle="tooltip" data-placement="top" title="" class="listby" data-original-title="Result by Gallery View"><i class="fa fa-th-large" aria-hidden="true"></i></a>--> </div>
            <div class="col-sm-8">
              <div class="input-group"> <span class="input-group-addon" id="basic-addon3">Sort By</span>
                <select class="form-control" name="priceorder" name="priceorder" onchange="this.form.submit()">
                  <option value="">Most recent</option>
                  <option value="1">Price: Rs Low to High</option>
                  <option value="2">Price: Rs High to Low</option>
                </select>
              </div>
            </div>
            <div class="col-sm-2">
			<div class="searchnt">
			<!--<button class="btn" type="submit" name="updatefilter" id="updatefilter"><i class="fa fa-search" aria-hidden="true"></i> Filter</button>-->
              <!--<div class="found"> 235 results for Mathematic Tutors <strong> Profile showing 1 to 10 out of 711 </strong> </div>-->
			  </div>
            </div>
		</form>	
          </div>
        </div>
        
        <!-- Search List -->
        <ul class="searchList" id="gallery_1">
          <!-- ad start -->
		  
<?php			

			$result = mysqli_query($db->con, $query);
			$rowcount=mysqli_num_rows($result);
			if($rowcount > 0)
			{
			$pagers = 2;	
			while($row = mysqli_fetch_assoc($result))			
			{			
?>		  
	    <li>
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="adimg"><img src="ads_images/<?php echo $row['cover_image']; ?>" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a class="ads_counter" href="ads_view.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>"  data-fullText="<?php echo $row['id'];?>"><?php echo substr($row['ad_title'],0,60); ?></a></h3>
                      <div class="cateName"> <a href="#."><?php echo $row['main_catgory']; ?></a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#."><?php echo $row['sub_catgory']; ?></a> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span><?php echo $row['ad_location']; ?></span></div>
                      <div class="clearfix"></div>
                      <p><?php echo substr($row['ad_des'],0,120); ?> ...</p>
                      <div class="listbtn"><a class="ads_counter" href="ads_view.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>" data-fullText="<?php echo $row['id'];?>">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['ad_price'].'/<span class="ad_pricecol">'.$row['price_duration'].'</span>'; ?></div>
                      <div class="adverify"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verified Seller</div>
					  <br>
					  <br>
					   <div class="adverify"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("d-m-y h:i a", strtotime($row['post_date'])); ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- ad end --> 
          
<?php
			}
			
}
else
{
echo '<div class="alert alert-danger">
		<p class="text-center"> No Record Found.</p>
	</div>';
$pagers = 1;		
}
?>			
          
          
          
          <!-- ad end -->
        </ul>
        
        <!-- Pagination Start -->
		<!-- pagination -->


		<!-- pagination -->
<?php		
if($pagers == 2)
{
?>		
        <div class="pagiWrap">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <button class="prev btn btn-primary">prev</button>
<button class="next btn btn-primary">next</button>
<span>Page: <span class="counter"> </span></span>
            </div>
            <div class="col-md-8 col-sm-8 text-right">
              <span class="paging-nav"></span>
            </div>
          </div>
        </div>
<?php
}
?>		
        <!-- Pagination end --> 
      </div>
    </div>
  </div>
</div>



<?php
include_once('footer.php');
?>