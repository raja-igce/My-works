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

<div class="removeMessages"></div>

<button type="submit" name="sub-1" value="Submit" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addMember" data-backdrop="false" id="addMemberModalBtn"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add New</button>


<h3 class="w3_inner_tittle two pull-left"><i class="fa fa-server" aria-hidden="true"></i>&nbsp;&nbsp;CRC Training</h3>
</div>

<div style="clear:both;"></div>
<div class="line1"></div>

</div>

<!-- table -->
<table id="manageMemberTable" class="display nowrap" style="width:100%">
<thead>
		<tr>
		<th>S No</th>
			<th>Std Name</th>
			<th>ContactNo</th>
			<th>Sex</th>
			<th>TrainingFees</th>
			<th>Training</th>
			<th>Action</th>
		</tr>
</thead>
	
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


	
	<!-- add modal -->
	<div class="modal fade" role="dialog" id="addMember">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span>	&nbsp;&nbsp;Add CRC Training</h4>
	      </div>
	      
	      <form action="php_action/create.php" method="POST" id="createMemberForm" class="valida1" enctype="multipart/form-data">
		  
	      <div class="modal-body">
	      	<div class="messages"></div>

<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Student Name <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="s_name" id="s_name" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												
												<label for="field-1-2">Father Name <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="f_name" id="f_name" required="true" class="form-control">
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
  <input type="radio" name="gender" id="gender" value="Male">
  <span class="checkround"></span>
</label>
</div>

<div class="checkbox-inline">					
<label class="radio">Female
  <input type="radio" name="gender" id="gender" value="Female"> 
  <span class="checkround"></span>
</label>
</div>

</div>
</div>

<div class="col-xs-12 col-sm-6">


												<label for="field-1-2">Mother Name <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="m_name" id="m_name" required="true" class="form-control">
										      </div>



</div>

</div>	

<!-- box1 -->
									<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Religion </label>
												<div class="form-group">
											    <input type="text" name="religion" id="religion" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Community </label>
												<div class="form-group">
<input type="text" name="community" id="community" required="true" class="form-control">
												</div>

											</div>

								</div>	
<!-- box1 -->									

											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Qualification </label>
												<div class="form-group">
											    <input type="text" name="qualification" id="qualification" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

																								
												<label for="field-1-2">Date Of Birth </label>
												<div class="form-group">
<input type="text" name="dob" id="dob" class="form-control" data-toggle="datepicker">
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
                        <input type="file" accept="image/png, image/jpeg" name="fileToUpload" id="fileToUpload"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]-->
												
											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Permanent Address <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="p_address" id="p_address" required="true" class="form-control">
												</div>

											</div>

								</div>
<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Aadhaar No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="aadhaar_no" id="aadhaar_no" required="true" class="form-control  only_number1">&nbsp;<span id="errmsg1"></span>
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Pan No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="pan_no" id="pan_no" required="true" class="form-control only_number2">&nbsp;<span id="errmsg2"></span>
												</div>

											</div>

								</div>
<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Bank A/C No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="bank_no" id="bank_no" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Contact No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="contact_no" id="contact_no" required="true" class="form-control only_number3" maxlength="10">&nbsp;<span id="errmsg3"></span>
												</div>

											</div>

								</div>
								<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Training Name</label>

												<div class="form-group">
											    <select name="training_name" id="training_name" required="true" class="form-control" style="padding: 5px;">
												<option value="">Select options</option>
												<option value="Tailoring">Tailoring</option>
												<option value="Computer">Computer</option>
												<option value="Greetings Card">Greetings Card</option>
												<option value="Typewriting">Typewriting</option>
												<option value="Book Binding">Book Binding</option>
											</select>
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Month<span class="at-required-highlight">*</span></label>
												<div class="form-group">
												
                                            <select name="d_month" id="d_month" required="true" class="form-control" style="padding: 5px;">
                                               <option value="">Select options</option>
												
											</select>
											
												</div>

											</div>

								</div>
								<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Training Fees Details <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="t_fees" id="t_fees" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Training Joining Date/month <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="t_join" id="t_join" required="true" class="form-control" data-toggle="datepicker">
												</div>

											</div>

								</div>
								<!-- box1 -->		
																		<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Note Book Quantity price <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="q_price" id="q_price" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Certificate Issuing Date <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="c_issue" id="c_issue" required="true" class="form-control" data-toggle="datepicker">
												</div>

											</div>

								</div>
								<!-- box1 -->
							<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Family Member Details <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="f_member" id="f_member" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">
<label for="field-1-2">Blood Group </label>
<div class="form-group">
<input type="text" name="b_group" id="b_group" required="true" class="form-control">
</div>
		</div>

								</div>
								<!-- box1 -->

	      </div>
	      <div class="modal-footer">
	      
		  <center>
		  <p>
		
		<button type="submit" name="sub-1" value="Submit" class="btn btn-primary"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Submit</button>&nbsp;&nbsp;
											
	<button type="reset" name="res-1" id="res-1" value="Reset" class="btn btn-danger"><i class="fa fa-repeat" aria-hidden="true"></i>&nbsp;Reset</button>

										</p></center>
		  
		  
		  
		  </div>
	      </form> 
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /add modal -->

	<!-- remove modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Remove CRC Training</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to remove ?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-danger" id="removeBtn">Delete</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /remove modal -->
	
	
	<!-- view modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="viewMemberModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-eye" aria-hidden="true"></i> CRC Training Details</h4>
	      </div>
	      <div class="modal-body">
		  <!-- abc -->
		  <div class="row">
                            
                  <div class=" col-md-7 col-lg-7"> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>StudentName:</td>
                        <td><p id="s1"></p></td>
                   </tr>
				   <tr>
                        <td>FatherName:</td>
                        <td><p id="s2"></p></td>
                   </tr>
                    <tr>
                        <td>Sex:</td>
                        <td><p id="s3"></p></td>
                   </tr>
<tr>
                        <td>Mothername:</td>
                        <td><p id="s4"></p></td>
                   </tr>				  
<tr>
                        <td>Religion:</td>
                        <td><p id="s5"></p></td>
                   </tr>				  				   
<tr>
                        <td>Community:</td>
                        <td><p id="s6"></p></td>
                   </tr>
<tr>
                        <td>Qualification:</td>
                        <td><p id="s7"></p></td>
                   </tr>
 	 	 	<tr>
                        <td>Date Of Birth:</td>
                        <td><p id="s8"></p></td>
                   </tr>
 	 	 	<tr>
                        <td>Address:</td>
                        <td><p id="s9"></p></td>
                   </tr>
 	 	 	<tr>
                        <td>AadhaarNo:</td>
                        <td><p id="s10"></p></td>
                   </tr>
 	 	 	<tr>
                        <td>PanNo:</td>
                        <td><p id="s11"></p></td>
                   </tr>
	 	 	<tr>
                        <td>BankAc:</td>
                        <td><p id="s12"></p></td>
                   </tr>
 			 	 	<tr>
                        <td>ContactNo:</td>
                        <td><p id="s13"></p></td>
                   </tr>
 			 	 	<tr>
                        <td>TrainingName:</td>
                        <td><p id="s14"></p></td>
                   </tr>
				    	
					<tr>
                        <td>Month:</td>
                        <td><p id="s15"></p></td>
                   </tr>
				   
				   					<tr>
                        <td>TrainingFees:</td>
                        <td><p id="s16"></p></td>
                   </tr>
				   					<tr>
                        <td>TrainingJoining:</td>
                        <td><p id="s17"></p></td>
                   </tr>
				   
				   				   					<tr>
                        <td>Notebook:</td>
                        <td><p id="s18"></p></td>
                   </tr>
				   
				   				<tr>
                        <td>CertificateDate:</td>
                        <td><p id="s19"></p></td>
                   </tr>
				   
				   				   				<tr>
                        <td>FamilyMemberDetails:</td>
                        <td><p id="s20"></p></td>
                   </tr>

				   <tr>
                        <td>BloodGroup:</td>
                        <td><p id="s21"></p></td>
                   </tr>
			                     
                    </tbody>
                  </table>

                </div>
				
				<div class="col-md-5 col-lg-5 " align="center"> 
				<img alt="User Pic" src="" class="img-circle img-responsive" id="user_pro"></div>
				
				
              </div>		  
				  
	      <!-- abc -->
	      </div>
	      <div class="modal-footer">
	         <button type="button" class="btn btn-danger" id="removeBtn">Print</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /view modal -->
	
	

	<!-- edit modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="editMemberModal">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit CRC Training</h4>
	      </div>

		<form action="php_action/update.php" method="POST" id="updateMemberForm" class="valida1" enctype="multipart/form-data">	      

	      <div class="modal-body">
	        	
	        <div class="edit-messages"></div>

			  <div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Student Name <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="es_name" id="es_name" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												
												<label for="field-1-2">Father Name <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="ef_name" id="ef_name" required="true" class="form-control">
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
  <input type="radio" name="egender" id="egender" value="Male">
  <span class="checkround"></span>
</label>
</div>
<div class="checkbox-inline">					
<label class="radio">Female
  <input type="radio" name="egender" id="egender" value="Female"> 
  <span class="checkround"></span>
</label>
</div>

</div>
</div>

<div class="col-xs-12 col-sm-6">


												<label for="field-1-2">Mother Name <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="em_name" id="em_name" required="true" class="form-control">
										      </div>



</div>

</div>	

<!-- box1 -->
									<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Religion </label>
												<div class="form-group">
											    <input type="text" name="ereligion" id="ereligion" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Community </label>
												<div class="form-group">
<input type="text" name="ecommunity" id="ecommunity" required="true" class="form-control">
												</div>

											</div>

								</div>	
<!-- box1 -->									

											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Qualification </label>
												<div class="form-group">
											    <input type="text" name="equalification" id="equalification" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

																								
												<label for="field-1-2">Date Of Birth </label>
												<div class="form-group">
<input type="text" name="edob" id="edob" class="form-control" data-toggle="datepicker">
												</div>

											</div>

								</div>						
<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

				<label for="field-1-2">Profile Photo <span class="at-required-highlight">*</span></label>
							<!-- image-preview-filename input [CUT FROM HERE]--><img src="" id="my_image" class="img-thumbnail" style="width:50px; height:50px;">
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
                        <input type="file" accept="image/png, image/jpeg" name="efileToUpload" id="efileToUpload"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]-->
<input type="hidden" name="up_img" id="up_img" value="">
											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Permanent Address <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="ep_address" id="ep_address" required="true" class="form-control">
												</div>

											</div>

								</div>
<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Aadhaar No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="eaadhaar_no" id="eaadhaar_no" required="true" class="form-control only_number4">&nbsp;<span id="errmsg4"></span>
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Pan No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="epan_no" id="epan_no" required="true" class="form-control only_number5">&nbsp;<span id="errmsg5"></span>
												</div>

											</div>

								</div>
<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Bank A/C No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="ebank_no" id="ebank_no" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Contact No <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="econtact_no" id="econtact_no" required="true" class="form-control only_number6" maxlength="10">&nbsp;<span id="errmsg6"></span>
												</div>

											</div>

								</div>
								<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Training Name</label>

												<div class="form-group">
											    <select name="etraining_name" id="etraining_name" required="true" class="form-control" style="padding: 5px;">
												<option value="">Select options</option>
												<option value="Tailoring">Tailoring</option>
												<option value="Computer">Computer</option>
												<option value="Greetings Card">Greetings Card</option>
												<option value="Typewriting">Typewriting</option>
												<option value="Book Binding">Book Binding</option>
											</select>
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Month<span class="at-required-highlight">*</span></label>
												<div class="form-group">
<select name="ed_month" id="ed_month" required="true" class="form-control" style="padding: 5px;">

											</select>
												</div>

											</div>

								</div>
								<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Training Fees Details <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="et_fees" id="et_fees" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Training Joining Date/month <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="et_join" id="et_join" required="true" class="form-control" data-toggle="datepicker">
												</div>

											</div>

								</div>
								<!-- box1 -->		
																		<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Note Book Quantity price <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="eq_price" id="eq_price" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Certificate Issuing Date <span class="at-required-highlight">*</span></label>
												<div class="form-group">
<input type="text" name="ec_issue" id="ec_issue" required="true" class="form-control" data-toggle="datepicker">
												</div>

											</div>

								</div>
								<!-- box1 -->
							<!-- box1 -->						
											<div class="row">

											<div class="col-xs-12 col-sm-6">

												<label for="field-1-2">Family Member Details <span class="at-required-highlight">*</span></label>
												<div class="form-group">
											    <input type="text" name="ef_member" id="ef_member" required="true" class="form-control">
										      </div>

											</div>

											<div class="col-xs-12 col-sm-6">
<label for="field-1-2">Blood Group </label>
<div class="form-group">
<input type="text" name="eb_group" id="eb_group" required="true" class="form-control">
</div>
												

											</div>

								</div>
								<!-- box1 -->
			  			  	
	      </div>
	      <div class="modal-footer editMemberModal">
		
			<center><p>
		
		<button type="submit" name="sub-1" value="Submit" class="btn btn-primary"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Save changes</button>&nbsp;&nbsp;
											
	<button type="reset" name="res-1" id="res-1" value="Reset" class="btn btn-danger"><i class="fa fa-repeat" aria-hidden="true"></i>&nbsp;Reset</button>
       
	   </p></center>
			
			
			
			
	      </div>
	      </form>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /edit modal -->	
	
	
	
<?php include "footer.php"; ?>	
