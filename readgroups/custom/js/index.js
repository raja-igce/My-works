// global the manage memeber table 
var manageMemberTable;

$(document).ready(function() {
	manageMemberTable = $("#manageMemberTable").DataTable({
		"ajax": "php_action/retrieve.php",
		"order": [],
		
		rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
		
	});

	$("#addMemberModalBtn").on('click', function() {
		// reset the form 
		$("#createMemberForm")[0].reset();
		
		$('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse");
		// remove the error 
		$(".form-group").removeClass('has-error').removeClass('has-success');
		$(".text-danger").remove();
		// empty the message div
		$(".messages").html("");

		// submit form
		$("#createMemberForm").unbind('submit').bind('submit', function() {

			$(".text-danger").remove();

			var form = $(this);

			// validation
			var s_name = $("#s_name").val();
			var f_name = $("#f_name").val();

			if(s_name && f_name ) {
				//submi the form to server
				$.ajax({
					url : form.attr('action'),
					type : form.attr('method'),
					data: new FormData(this),
                    contentType: false,  
                    processData:false,
					dataType: 'json',
					success:function(response) {

						// remove the error 
						$(".form-group").removeClass('has-error').removeClass('has-success');

						if(response.success == true) {
							$(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
							  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							  '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
							'</div>');

							// reset the form
							$("#createMemberForm")[0].reset();		
$('#addMember').delay(5000).modal('hide');
							// reload the datatables
							manageMemberTable.ajax.reload(null, false);
							// this function is built in function of datatables;

						} else {
							$(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
							  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
							'</div>');
						}  // /else
					} // success  
				}); // ajax subit 				
			} // if


			return false;
		}); // /submit form for create member
	}); // /add modal

});

function removeMember(id = null) {
	if(id) {
		// click on remove button
		$("#removeBtn").unbind('click').bind('click', function() {
			$.ajax({
				url: 'php_action/remove.php',
				type: 'post',
				data: {member_id : id},
				dataType: 'json',
				success:function(response) {
					if(response.success == true) {						
						$(".removeMessages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
							  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							  '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
							'</div>');

						// refresh the table
						manageMemberTable.ajax.reload(null, false);

						// close the modal
						$("#removeMemberModal").modal('hide');

					} else {
						$(".removeMessages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
							  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
							'</div>');
					}
				}
			});
		}); // click remove btn
	} else {
		alert('Error: Refresh the page again');
	}
}

function viewmember(id = null) {
	if(id) {
	
	$.ajax({
			url: 'php_action/getSelectedMember.php',
			type: 'post',
			data: {member_id : id},
			dataType: 'json',
			success:function(response) {
				
				$("#s1").text(response.StudentName);
				$("#s2").text(response.FatherName);
				$("#s3").text(response.Sex);
								
				$("#s4").text(response.Mothername);
				$("#s5").text(response.Religion);
				$("#s6").text(response.Community);
				$("#s7").text(response.Qualification);
				
				var db = response.DOB;
				var db1 = db.split('-');
				var db2 = db1[2]+'/'+db1[1]+'/'+db1[0];
				$("#s8").text(db2);
			
			
				$('#user_pro').attr('src','php_action/upload/'+response.ProfilePhoto);
								
				$("#s9").text(response.Address);
				$("#s10").text(response.AadhaarNo);
				$("#s11").text(response.PanNo);
				$("#s12").text(response.BankAc);
				$("#s13").text(response.ContactNo);
				$("#s14").text(response.TrainingName);
				$("#s15").text(response.Month);
				       
				$("#s16").text(response.TrainingFees);
								
				var tj= response.TrainingJoining;
				var tj1 = tj.split('-');
				var tj2 = tj1[2]+'/'+tj1[1]+'/'+tj1[0];
				$("#s17").text(tj2);
				
				
				$("#s18").text(response.Notebook);
								
				var cd= response.CertificateDate;
				var cd1 = cd.split('-');
				var cd2 = cd1[2]+'/'+cd1[1]+'/'+cd1[0];
				$("#s19").text(cd2);
				
				
				$("#s20").text(response.FamilyMemberDetails);
				$("#s21").text(response.BloodGroup);
	}

	});
}

}
function editMember(id = null) {
	if(id) {

		// remove the error 
		$(".form-group").removeClass('has-error').removeClass('has-success');
		$(".text-danger").remove();
		// empty the message div
		$(".edit-messages").html("");

		$('#updateMemberForm')[0].reset();
		
		$('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse");
		
		
		// remove the id
		$("#member_id").remove();
	
		// fetch the member data
		$.ajax({
			url: 'php_action/getSelectedMember.php',
			type: 'post',
			data: {member_id : id},
			dataType: 'json',
			success:function(response) {
				
				$("#es_name").val(response.StudentName);
				$("#ef_name").val(response.FatherName);
				
				var v1 = response.Sex;
				
				$("input[name=egender][value=" + v1 + "]").attr('checked', 'checked');
								
				$("#em_name").val(response.Mothername);
				$("#ereligion").val(response.Religion);
				$("#ecommunity").val(response.Community);
				$("#equalification").val(response.Qualification);
				
				var db = response.DOB;
				var db1 = db.split('-');
				var db2 = db1[2]+'/'+db1[1]+'/'+db1[0];
				$("#edob").val(db2);
				
				$("#up_img").val(response.ProfilePhoto);
				
				$('#my_image').attr('src','php_action/upload/'+response.ProfilePhoto);
								
				$("#ep_address").val(response.Address);
				$("#eaadhaar_no").val(response.AadhaarNo);
				$("#epan_no").val(response.PanNo);
				$("#ebank_no").val(response.BankAc);
				$("#econtact_no").val(response.ContactNo);
				$("#etraining_name").val(response.TrainingName);
				$("#ed_month").val(response.Month);
				$('#ed_month').append('<option value='+ response.Month +'>'+ response.Month +'</option>');
                    
				$("#et_fees").val(response.TrainingFees);
								
				var tj= response.TrainingJoining;
				var tj1 = tj.split('-');
				var tj2 = tj1[2]+'/'+tj1[1]+'/'+tj1[0];
				$("#et_join").val(tj2);
				
				
				$("#eq_price").val(response.Notebook);
								
				var cd= response.CertificateDate;
				var cd1 = cd.split('-');
				var cd2 = cd1[2]+'/'+cd1[1]+'/'+cd1[0];
				$("#ec_issue").val(cd2);
				
				
				$("#ef_member").val(response.FamilyMemberDetails);
				$("#eb_group").val(response.BloodGroup);

				// mmeber id 
				$(".editMemberModal").append('<input type="hidden" name="member_id" id="member_id" value="'+response.Id+'"/>');

				// here update the member data
				$("#updateMemberForm").unbind('submit').bind('submit', function() {
					// remove error messages
					$(".text-danger").remove();

					var form = $(this);

					// validation
          var es_name = $("#es_name").val();
			var ef_name = $("#ef_name").val();					
									
					if(es_name && ef_name) {
						$.ajax({
							url: form.attr('action'),
							type: form.attr('method'),
							data: new FormData(this),
                            contentType: false,  
                            processData:false,
							dataType: 'json',
							success:function(response) {
							
								if(response.success == true) {
									$(".edit-messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
									  '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
									'</div>');

									// reload the datatables
									$('#editMemberModal').delay(5000).modal('hide');
									
									manageMemberTable.ajax.reload(null, false);
									// this function is built in function of datatables;

									// remove the error 
									$(".form-group").removeClass('has-success').removeClass('has-error');
									$(".text-danger").remove();
								} else {
									$(".edit-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
									  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
									'</div>')
								}
							} // /success
						}); // /ajax
					} // /if

					return false;
				});

			} // /success
		}); // /fetch selected member info

	} else {
		alert("Error : Refresh the page again");
	}
}