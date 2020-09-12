<?php 
include "header.php"; 
?>	
	
				<div class="inner_content">

					<div class="inner_content_w3_agile_info two_in">
									<div class="agile-grids">	
				<!-- validation -->
				<div class="grids">
					
					<div class="forms-grids">
						<div class="w3agile-validation">
						<div class="agile-validation agile_info_shadow">
								<div class="my-div">

<div>
								
<div class="input-info">

<button type="submit" name="sub-1" value="Submit" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addMember" data-backdrop="false"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add New</button>


<h3 class="w3_inner_tittle two pull-left"><i class="fa fa-server" aria-hidden="true"></i>&nbsp;&nbsp;CRC Training</h3>
</div>
<div style="clear:both;"></div>
<div class="line1"></div>

</div>

<!-- table -->
<table id="manageMember" class="display nowrap" style="width:100%">
	<thead>
		<tr>
		<th>S No</th>
			<th>Std Name</th>
			<th>DOB</th>
			<th>Sex</th>
			<th>Address</th>
			<th>Training</th>
			<th>Action</th>
		</tr>
	</thead>
	
<tbody>


</tbody>
</table>								
<!-- table -->

<!-- table -->
								</div>
							</div>
						</div>
		
						
		<div class="clearfix"> </div>
					</div>
				</div>
					
				    </div>
				</div>
	</div>
	


	
  <!-- Modal -->
  <div class="modal fade" id="addMember" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-server" aria-hidden="true"></i>&nbsp;&nbsp;CRC Training</h4>
        </div>
        <div class="modal-body">
		

<div class="spacer">		
		
<!-- form -->

	      <form class="form-horizontal valida" action="php_action/create.php" method="POST" id="createMemberForm" autocomplete="off" novalidate="novalidate">
		  
		  <div class="messages"></div>
										<!-- box1 -->
									<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Student Name <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="field-1" id="field-1" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												
												<label for="field-1-2">Father Name <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="field-1" id="field-1" required="true" class="form-control">
												</div>
												

											</div>

								</div>	
<!-- box1 -->

<div class="row">

<div class="col-xs-12 col-sm-6">
<label for="field-1-2">Sex <span class="at-required-highlight">*</span></label>
<br/>
<div class="border_line">												
<div class="checkbox-inline">					
<label class="radio">Male
  <input type="radio" checked="checked" name="is_company">
  <span class="checkround"></span>
</label>
</div>
<div class="checkbox-inline">					
<label class="radio checkbox-inline">Female
  <input type="radio" name="is_company">
  <span class="checkround"></span>
</label>
</div>

</div>
</div>

<div class="col-xs-12 col-sm-6">


												<label for="field-1-2">Mother Name <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="field-1" id="field-1" required="true" class="form-control">
										      </div>



</div>

</div>	

<!-- box1 -->
									<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Religion </label>
												<div class="form-group">
											    <input type="text" name="field-1" id="field-1" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Community </label>
												<div class="form-group">
<input type="text" name="field-1" id="field-1" required="true" class="form-control">
												</div>

											</div>

								</div>	
<!-- box1 -->									

											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Qualification </label>
												<div class="form-group">
											    <input type="text" name="field-1" id="field-1" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

																								
												<label for="field-1-2">Date Of Birth </label>
												<div class="form-group">
<input type="text" name="bookingdate" id="bookingdate1" class="form-control">
												</div>

											</div>

								</div>						
<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Profile Photo <span class="at-required-highlight">*</span></label>
												<!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]-->

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Permanent Address <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="field-1" id="field-1" required="true" class="form-control">
												</div>

											</div>

								</div>
<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Aadhaar No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="field-1" id="field-1" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Pan No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="field-1" id="field-1" required="true" class="form-control">
												</div>

											</div>

								</div>
<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Bank A/C No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="field-1" id="field-1" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Contact No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="field-1" id="field-1" required="true" class="form-control">
												</div>

											</div>

								</div>
								<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Training Name</label>

												<div class="form-group">
											    <select name="field-2" id="field-2" required="true" class="form-control" style="padding: 5px;">
												<option value="">Select options</option>
												<option value="val-1">Tailoring</option>
												<option value="val-2">Computer</option>
												<option value="val-2">Greetings Card</option>
												<option value="val-2">Typewriting</option>
												<option value="val-2">Book Binding</option>
											</select>
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Month<span class="at-required-highlight">*</span></label>
												<div class="form-group">
<select name="field-2" id="field-2" required="true" class="form-control" style="padding: 5px;">
<option value="">Select options</option>
												<option value="">6 month or 1 month</option>
												<option value="val-1">1,3,6 month</option>
												<option value="val-2">1 month</option>
												<option value="val-2">Basic, 6 month T/E</option>
												<option value="val-2">1 month</option>
											</select>
												</div>

											</div>

								</div>
								<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Training Fees Details <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="field-1" id="field-1" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Training Joining Date/month <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="field-1" id="field-1" required="true" class="form-control">
												</div>

											</div>

								</div>
								<!-- box1 -->		
																		<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Note Book Quantity price <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="field-1" id="field-1" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Certificate Issuing Date <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="field-1" id="field-1" required="true" class="form-control">
												</div>

											</div>

								</div>
								<!-- box1 -->
							<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Family Member Details <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="field-1" id="field-1" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">
<label for="field-1-2">Blood Group </label>
<div class="form-group">
<input type="text" name="field-1" id="field-1" required="true" class="form-control">
</div>
												

											</div>

								</div>
								<!-- box1 -->								
								
								
								
										<hr>

<center>										<p>
											<button type="submit" name="sub-1" value="Submit" class="btn btn-primary"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Submit</button>&nbsp;&nbsp;
											<button type="reset" name="res-1" id="res-1" value="Reset" class="btn btn-danger"><i class="fa fa-repeat" aria-hidden="true"></i>&nbsp;Reset</button>

										</p></center>
									</form>       

<!-- form -->
</div>


 </div>
</div>
      
    </div>
  </div>
  <!-- Modal -->

<?php include "footer.php"; ?>	
