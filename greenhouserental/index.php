<?php 
include_once('header.php');
?>

<!-- Search start -->
<div class="searchwrap">
  <div class="container">
    <h3>World's Largest Classifieds Site</h3>
    <p>Search from over 99,00,000 Active ads &amp; Post free unlimited classifieds ads!</p>
    <div class="searchbar row">
		<form method="post" action="adlisting.php" class="form-search" role="form" id="form-search">
      <div class="col-md-8">
        <input type="text" name="search" id="search" class="form-control" placeholder="What are you looking for" />
      </div>
      <div class="col-md-2">
        <select class="form-control" name="scity" id="scity">
            <option value="Chennai">Chennai</option>
        </select>
      </div>
      <div class="col-md-2">
        <input type="submit" class="btn" value="Search Ad">
      </div>
	  </form>
	  
    </div>
  </div>
</div>
<!-- Search End --> 

<?php
require_once 'config.php';
$db = new Cl_DBclass();

$query = "SELECT COUNT( * ) AS count1 FROM post_ads where property_type = 'Room for Rent'";
$result1 = mysqli_query($db->con, $query);
$data1 = mysqli_fetch_assoc($result1);

$query1 = "SELECT COUNT( * ) AS count2 FROM post_ads where property_type = 'Sale Property'";
$result2 = mysqli_query($db->con, $query1);
$data2 = mysqli_fetch_assoc($result2);

$query4 = "SELECT COUNT( * ) AS count4 FROM post_ads where property_type = 'Buy used Car/Vehicle'";
$result5 = mysqli_query($db->con, $query4);
$data5 = mysqli_fetch_assoc($result5);

$query2 = "SELECT COUNT( * ) AS count3 FROM post_ads where property_type = 'Sell used Car/Vehicle'";
$result3 = mysqli_query($db->con, $query2);
$data3 = mysqli_fetch_assoc($result3);

$query6 = "SELECT COUNT( * ) AS count6 FROM classified_ads";
$result6 = mysqli_query($db->con, $query6);
$data6 = mysqli_fetch_assoc($result6);


//ads delete
$qry = "select * from post_ads where datediff(now(), post_ads.post_date) > 30";
$res = mysqli_query($db->con, $qry);
if(mysqli_num_rows($res) > 0)
{
while($data = mysqli_fetch_assoc($res))
{
/*	
if($data['cover_image'] != 'ad-img2.jpg')	
{
unlink("ads_images/".$data['cover_image']);	
}
if($data['sub_img1'] != 'ad-img2.jpg')	
{
unlink("ads_images/".$data['sub_img1']);	
}
if($data['sub_img2'] != 'ad-img2.jpg')	
{
unlink("ads_images/".$data['sub_img2']);	
}
if($data['sub_img3'] != 'ad-img2.jpg')	
{
unlink("ads_images/".$data['sub_img3']);	
}
*/
$id = $data['id'];
$qry1 = "UPDATE post_ads SET ads_delete = 2 WHERE id = $id";
//$qry1 = "DELETE FROM post_ads WHERE id = $id";
mysqli_query($db->con, $qry1);
}
}
?>

<?php
$qry2 = "select * from client_msg where datediff(now(), client_msg.msg_date) > 15";
$res2 = mysqli_query($db->con, $qry2);
if(mysqli_num_rows($res2) > 0)
{
while($data1 = mysqli_fetch_assoc($res2))
{
$id = $data1['id'];	
$qry1 = "DELETE FROM client_msg WHERE id = $id";
mysqli_query($db->con, $qry1);	
}
}	
?>
<!-- Categories start -->
<div class="section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <h3>Browse <span>Categories</span></h3>
      <p>We pick the best sellers for you who are best in class in various aspects.</p>
    </div>
    <ul class="categoryList row">
    <li class="col-md-3 col-sm-3 col-xs-6"><a href="adlisting.php?property=<?php echo urlencode(base64_encode("Room for Rent")); ?>"><img src="images/category/06.png" alt="Cate Img" /> <span>Property for Rent <i>(<?php echo $data1['count1'];  ?>)</i></span></a></li>
           
      <li class="col-md-3 col-sm-3 col-xs-6"><a href="adlisting.php?property=<?php echo urlencode(base64_encode("Sale Property")); ?>"><img src="images/category/03.png" alt="Cate Img" /> <span>Property for Sale <i>(<?php echo $data2['count2'];  ?>)</i></span></a></li>
      <li class="col-md-3 col-sm-3 col-xs-6"><a href="adlisting.php?motors=<?php echo urlencode(base64_encode("Vehicle")); ?>"><img src="images/category/01.png" alt="Cate Img" /> <span>Motor Sale/Buy <i>(<?php echo $data3['count3']+$data5['count4'];  ?>)</i></span></a></li>
      <li class="col-md-3 col-sm-3 col-xs-6"><a href="classified_ads.php"><img src="images/category/04.png" alt="Cate Img" /> <span>Classified Ads <i>(<?php echo $data6['count6'];  ?>)</i></span></a></li>
            
    </ul>
  </div>
</div>
<!-- Categories ends --> 

<!-- Featured Ads start -->
<div class="section  catewrap">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <h3>Featured <span>Ads</span></h3>
      <p>Featured projects are handpicked by our trusted sellers for you!</p>
    </div>
    <!-- title end -->
	<ul class="gridlist itemgrid">
<?php

$query = "SELECT *FROM post_ads where featured = 2 and ad_status = 2 and ads_delete = 1";
$result = mysqli_query($db->con, $query);

if(mysqli_num_rows($result) > 0)
{

while($data = mysqli_fetch_assoc($result))
{	
?>

      <li class="item">
        <div class="adimg container_5"><a class="ads_counter" href="ads_view.php?id=<?php echo urlencode(base64_encode($data['id'])); ?>" data-fullText="<?php echo $data['id'];?>"><img src="ads_images/<?php echo $data['cover_image']; ?>" alt=""></a>
	<div class="overlay_1">
    <div class="text_2">
</div>
    </div>
		
		
		</div>
        <div class="innerad">
          <h3><a class="ads_counter" href="ads_view.php?id=<?php echo urlencode(base64_encode($data['id'])); ?>" data-fullText="<?php echo $data['id'];?>"><?php
if(strlen($data['ad_title']) > 20)
{
    echo substr($data['ad_title'],0,20)."...";
}
else
{
    echo $data['ad_title'];
}
?></a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i><?php 
			
if(strlen($data['ad_location']) > 9)
{
    echo substr($data['ad_location'],0,7)."...";
}
else
{
    echo $data['ad_location'];
}
		
			?></div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo date("h:i a", strtotime($data['post_date'])); ?></div>
          </div>
          <div class="price"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $data['ad_price']; ?></div>
        </div>
      </li>
<?php
}
}
else
{
?>

      <li class="item">
        <div class="adimg"><a href="#"><img src="images/ads/a1.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="#">Canon House For Sale</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;206.90</div>
        </div>
      </li>
    
	<li class="item">
        <div class="adimg"><a href="#"><img src="images/ads/a2.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="#">Glaxy House For Rent</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;206.90</div>
        </div>
      </li>
     
	 <li class="item">
        <div class="adimg"><a href="#"><img src="images/ads/a6.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="#">BMW Car For Sale</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;206.90</div>
        </div>
      </li>

      <li class="item">
        <div class="adimg"><a href="#"><img src="images/ads/a4.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="#">JJ House For Sale</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;206.90</div>
        </div>
      </li>

      <li class="item">
        <div class="adimg"><a href="#"><img src="images/ads/a5.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="#">Canon House For Rent</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;206.90</div>
        </div>
      </li>

<?php	
}
?>
</ul>
	
</div>
</div>
<!-- Featured Ads end --> 


<!-- Latest Ads start -->
<div class="section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <h3>Latest <span>Ads</span></h3>
      <p>We ensure you find your dream home, by connecting with top rated sellers measured on their performance.</p>
    </div>
    <!-- title end -->
 <ul class="row gridlist">
<?php 
$query = "SELECT *FROM post_ads where ad_type = 'Sell' and ad_status = 2 and ads_delete = 1 order by id desc LIMIT 4";
$result = mysqli_query($db->con, $query);

while($row = mysqli_fetch_assoc($result))
{	
?>

      <li class="col-md-3 col-sm-6">
	  <div class="shadow_box">
        <div class="adimg"><a class="ads_counter" href="ads_view.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>" data-fullText="<?php echo $row['id'];?>"><img src="ads_images/<?php echo $row['cover_image']; ?>" alt=""></a>
		</div>
        <div class="innerad">
          <h3><a class="ads_counter" href="ads_view.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>" data-fullText="<?php echo $row['id'];?>"><?php 
if(strlen($row['ad_title']) > 20)
{
    echo substr($row['ad_title'],0,20)."...";
}
else
{
    echo $row['ad_title'];
}		  

		  ?></a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i><?php 
		
if(strlen($row['ad_location']) > 9)
{
    echo substr($row['ad_location'],0,7)."...";
}
else
{
    echo $row['ad_location'];
}			
?></div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo date("h:i a", strtotime($row['post_date'])); ?></div>
          </div>
          <div class="price"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $row['ad_price']; ?></div>
        </div>
	</div>	
      </li>
<?php
}
?>

</ul>      
      
 <ul class="row gridlist">
<?php 
$query = "SELECT *FROM post_ads where ad_type = 'Buy' and ad_status = 2 and ads_delete = 1 order by id desc LIMIT 4";
$result = mysqli_query($db->con, $query);

while($row = mysqli_fetch_assoc($result))
{	
?>

      <li class="col-md-3 col-sm-6">
	  <div class="shadow_box">
        <div class="adimg"><a class="ads_counter" href="ads_view.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>" data-fullText="<?php echo $row['id'];?>"><img src="ads_images/<?php echo $row['cover_image']; ?>" alt=""></a>
		</div>
        <div class="innerad">
          <h3><a class="ads_counter" href="ads_view.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>" data-fullText="<?php echo $row['id'];?>"><?php echo substr($row['ad_title'],0,20); ?></a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i><?php 
if(strlen($row['ad_location']) > 9)
{
    echo substr($row['ad_location'],0,7)."...";
}
else
{
    echo $row['ad_location'];
}				
			
			 ?>
			
			</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo date("h:i a", strtotime($row['post_date'])); ?></div>
          </div>
          <div class="price"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $row['ad_price']; ?></div>
        </div>
	</div>	
      </li>
<?php
}
?>    
    
    </ul>
    <div class="viewallbtn"><a href="adlisting.php">View All Latest Ads</a></div>
  </div>
</div>
<!-- Latest Ads end --> 

<!-- How it Works start -->
<div class="section whitebg howitwrap">
  <div class="container">
    <ul class="howlist row">
      <!--step 1-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle" id="zio"><i class="fa fa-user" aria-hidden="true"></i></div>
        <h4><a href="register.php">Create a Free Account</a></h4>
        <p>If you create an account, you can pick a user name provided it is available and unique. Edits you make while logged in will be assigned to that name, not to your IP address.</p>
      </li>
      <!--step 1 end--> 
      
      <!--step 2-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle" id="zio"><i class="fa fa-id-card" aria-hidden="true"></i></div>
        <h4><a href="ad-post.php">Post your Free Ad</a></h4>
        <p>Post your free ad today on classified ads. Free advertising in your local area! Our simple posting form allows you to create an excellent classified advert in a matter of moments.</p>
		  
      </li>
      <!--step 2 end--> 
      
      <!--step 3-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle" id="zio"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
        <h4><a href="userlogin.php">Sold or Buy</a></h4>
        <p>Advertise your room to rent; sell your secondhand bike, sell your car; everything from a yacht to a kitchen sink can be advertised for free.</p>
      </li>
      <!--step 3 end-->
    </ul>
  </div>
</div>
<!-- How it Works Ends --> 



<!-- App Start -->
<div class="appwraper">
  <div class="container"> 
    
    <!--app info Start-->
    <div class="titleTop">
      <h3>Download Our App</h3>
    </div>
    <div class="subtitle2">A world market in your hand</div>
    <p>All the best free apps you want on your Android. Uptodown's official app is your direct access to full app descriptions</p>
    <div class="appbtn"> 
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Download From Play Store"><i class="fa fa-android" aria-hidden="true"></i> Download</a> <!--<a href="#" data-toggle="tooltip" data-placement="bottom" title="Download From App Store"><i class="fa fa-apple" aria-hidden="true"></i> Download</a> 
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Download From Windows Store"><i class="fa fa-windows" aria-hidden="true"></i> Download</a>--> </div>
    <!--app info end--> 
    
  </div>
</div>
<!-- App End --> 

<!-- Ads By Cities start -->
<div class="section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <h3>Ads By <span>Cities</span></h3>
      <p>Check out the latest properties in Chennai</p>
    </div>
    <!-- title end -->
    <div class="topsearchwrap">
      <ul class="row catelist">

<?php
$query = "SELECT ad_location, COUNT( * ) AS count
FROM post_ads
GROUP BY ad_location
ORDER BY count DESC ";
$result = mysqli_query($db->con, $query);

while($data = mysqli_fetch_assoc($result))
{
?>
<li class="col-md-3 col-sm-6"><a href="adlisting.php?ad_loc=<?php echo urlencode(base64_encode($data['ad_location'])); ?>"><?php echo $data['ad_location']; ?> <span>(<?php echo $data['count']; ?> Ads)</span></a></li>
<?php	
}	
?>

      </ul>
    </div>
<?php	
$query = "SELECT *FROM footer_ads limit 1";
$result = mysqli_query($db->con, $query);
$data1 = mysqli_fetch_assoc($result);

 
?>	
	
    <div class="wideBanner margintop40"><img src="admin/footerimage/<?php echo $data1['ban_ads']; ?>" alt=""></div>
  </div>
</div>
<!-- Ads By Cities ends --> 

<?php 
include_once('footer.php');
?>