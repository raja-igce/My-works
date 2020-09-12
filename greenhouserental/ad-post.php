<?php 
ob_start();
include_once('header.php');
if(!isset($_SESSION['logged_in'])){
	header('Location: userlogin.php');
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
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Post Ads</span></div>
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
		<form method="post" action="" class="form-postads" role="form" id="ads-post">  
		  
		  <div class="formpanel"> 
           <!-- Ad Information -->
            <h5>Ad Information</h5>
            <div class="row">
			 <div class="col-md-12">
                <div class="formrow">
                  <input type="text" name="adtitle" id="adtitle" class="form-control" placeholder="Ad Title">
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="adtype" id="adtype">
                    <option value="">Ad type</option>
                    <option value="Rental room apartment">Rental Room/Apartment</option>
                    <option value="Sell">I want to Sell</option>
                    <option value="Buy">I want to Buy</option>
                  </select>
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="itemtype" id="itemtype">
                    <option value="">Item type</option>
                    <option value="New">New</option>
                    <option value="Used">Used</option>
                  </select>
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="propertytype" id="propertytype">
                    <option value="">Choose type</option>
                    
					
					
					
                   <!-- <option value="Rent">For Rent</option>
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
                  <select class="form-control" name="maincatgory" id="maincatgory">
                    <option value="">Select Main Category</option>
                    <option value="Vehicle">Vehicle</option>
                    <option value="Real Estate">Property/Real Estate</option>
                  </select>
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="subcatgory" id="subcatgory">
                    <option value="">Select Sub Category</option>
                    
                  </select>
				  <span class="help-block"></span>
                </div>
              </div>
			  <div class="col-md-12">
   
   <div class="col-md-12">
   
   <div class="panel panel-success">
      <div class="panel-heading"><b>Instruction:</b></div>
	  <div class="panel-body">
	  <strong style="font-weight:bold;">1. First image cover image.<br/><br/>
	  2. Only allow <span class="label label-warning">jpg and png</span> not allowed <span class="label label-warning">gif</span> Images.<br/><br/>
	  3. Upload image size less than <span class="label label-warning">2MB(2048kb)</span>.<br/><br/>
	  4. Image width and height <span class="label label-warning">1000px</span> to <span class="label label-warning">600px</span>.<br/><br/>
	  5. After Admin approval your ad will be displayed. 
	  </strong>
	  
	  </div>
	  
    </div>
		  </div>
		  </div>
			  <!-- upload box -->
              <div class="col-md-12">          
                 <div class="col-md-3">
				 <div class="formrow">
				<!-- baaaa -->
				<div class="imageupload uploadphotobx">
                <div class="file-tab uploadBox">
                    <label class="btn1 btn-file">
                        <span></span>
                        <!-- The file is stored here. -->
                        <input type="file" name="image-file1" id="image-file1" accept="image/x-png,image/jpeg">
                    </label>
                    <span class="glyphicon glyphicon-trash btn1 btn-danger"></span>
                </div>
            </div>
				<!-- aaaa -->
			 
				 </div> 
				</div>
				
				
				<div class="col-md-3">
				<div class="formrow">
				<!-- baaaa -->
				<div class="imageupload uploadphotobx">
                <div class="file-tab uploadBox">
                    <label class="btn1 btn-file">
                        <span></span>
                        <!-- The file is stored here. -->
                        <input type="file" name="image-file2" id="image-file2" accept="image/x-png,image/jpeg">
                    </label>
                    <span class="glyphicon glyphicon-trash btn1 btn-danger"></span>
                </div>
            </div>
				<!-- aaaa -->
                  </div>
				</div>
				 <div class="col-md-3">
				 <div class="formrow">
				 <!-- baaaa -->
				<div class="imageupload uploadphotobx">
                <div class="file-tab uploadBox">
                    <label class="btn1 btn-file">
                        <span></span>
                        <!-- The file is stored here. -->
                        <input type="file" name="image-file3" id="image-file3" accept="image/x-png,image/jpeg">
                    </label>
                    <span class="glyphicon glyphicon-trash btn1  btn-danger"></span>
                </div>
            </div>
				<!-- aaaa -->
                  </div>
				 </div>
				 <div class="col-md-3">
				 <div class="formrow">
				 
				 <!-- baaaa -->
				<div class="imageupload uploadphotobx">
                <div class="file-tab uploadBox">
                    <label class="btn1 btn-file">
                        <span></span>
                        <!-- The file is stored here. -->
                        <input type="file" name="image-file4" id="image-file4" accept="image/x-png,image/jpeg">
                    </label>
                    <span class="glyphicon glyphicon-trash btn1 btn-danger"></span>
                </div>
            </div>
				<!-- aaaa -->
				  
                  </div>
				 </div>
				 
		</div>	 
			  <!-- upload box -->
              <div class="col-md-3">
                <div class="formrow">
                  <input type="text" name="adprice" id="adprice" class="form-control" placeholder="Ad Price">
				  <span class="help-block"></span>
                </div>
              </div>
			  <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="preprice" id="preprice">
                    
					<option value="per Month">Per Month</option>
                    <option value="per Year">Per Year</option>
                    <option value="sale price">Sale Price</option>
                  </select>
				  
                </div>
              </div>
			  <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="city" id="city">
                    <option value="">Select City</option>
                    <option value="Chennai">Chennai</option>
                  </select>
				  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-3">
                <div class="formrow">
                  <input type="text" name="adlocation" id="adlocation" class="form-control" placeholder="Enter Location">
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
                  <textarea class="form-control" name="adaddress" id="adaddress" placeholder="Ad Address"></textarea>
				  <span class="help-block"></span>
                </div>
              </div>
			  
              <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="addetail" id="addetail" placeholder="Ad Detail"></textarea>
				  <span class="help-block"></span>
                </div>
              </div>
			 </div>
			 <input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
			 <input type="hidden" id="user_name" name="user_name" value="<?php echo $_SESSION['name']; ?>">
			 <input type="hidden" id="user_mobile" name="user_mobile" value="<?php echo $_SESSION['mobile']; ?>">
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