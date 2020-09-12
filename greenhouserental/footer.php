<!--Footer-->
<div class="footerWrap">
  <div class="container">
    <div class="row"> 
      <!--About Us-->
      <div class="col-md-3 col-sm-12">
        <h5>About us</h5>
		<p>Widely known as India’s no. 1 online classifieds platform, is all about you. Our aim is to empower every person in the country to independently connect with buyers and sellers online.</p>

      </div>
      <!--About us End--> 
      
      <!--Quick Links-->
      <div class="col-md-2 col-sm-6">
        <h5>Quick Links</h5>
        <!--Quick Links menu Start-->
        <ul class="quicklinks">
          <li><a href="about_us.php">About Us </a></li>
          <li><a href="contact_us.php">Contact Us</a></li>
          <li><a href="ad-post.php">Post an Ad</a></li>
        </ul>
      </div>
      <!--Quick Links menu end--> 
      
      <!--Jobs By Industry-->
      <div class="col-md-3 col-sm-6">
        <h5>Help Center</h5>
        <!--Industry menu Start-->
        <ul class="quicklinks">
          <li><a href="contact_us.php">Help &amp; Support</a></li>
          <li><a href="faq.php">FAQs</a></li>
          <li><a href="term.php">Terms of Use</a></li>
        </ul>
        <!--Industry menu End-->
        <div class="clear"></div>
      </div>
      
      <!--Latest Articles-->
      <div class="col-md-4 col-sm-12">
        <h5>Contact Us</h5>
       <!-- <div class="address"> 197/5-1 wireless main road<br>
         airport, trichy - 620 007</div>-->
        <div class="email"> <a href="mailto:raman.kandasami@gmail.com">raman.kandasami@gmail.com</a> </div>
        <div class="phone"> <a href="tel:001234567890">+971 55 914 9071</a></div>
        
        <!-- Social Icons -->
        <div class="social"> <a href="#." target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a> </div>
        <!-- Social Icons end --> 
        
      </div>
    </div>
  </div>
</div>
<!--Footer end--> 
<!--Copyright-->
<div class="copyright">
  <div class="container">
    <div class="bttxt">Copyright &copy; 2017. All Rights Reserved. Design by: <a href="http://e-soft.in" target="_blank">e-soft.in</a></div>
  </div>
</div>
<!-- Bootstrap's JavaScript --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.flexslider.js"></script>  
<!-- Custom js --> 
<script src="js/script.js"></script>
<script src="js/jquery.immybox.js"></script>
<script src="js/bootstrap-imageupload.js"></script>

<script src="js/goodshare.min.js"></script>



<script src="js/jquery.validate.js"></script>
<script>
$(document).ready( function () {
	$("#login-form").validate();
	$("#otp-form").validate();

$("#signupForm").validate( {
				rules: {
					
					username: {
						required: true,
						minlength: 2
					},
					phone: {
						remote:"check-reg-email.php",
						number: true,
						required: true,
						minlength: 10,
						maxlength:10
							
					},
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true,
						remote:"check-reg-email.php"
					},
					otp: "required",
						
					agree: "required"
				},
				messages: {
					username: {
						required: "Please enter the Name",
						minlength: "Your username must consist of at least 2 characters"
					},
					phone: {
						required: "Please enter the Mobile Number",
						minlength: "Your Mobile number must consist of at least 10 digit",
						remote : "This Mobile number already exists"
					},
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email : {
				    required : "Please enter email",
				    remote : "This Email already exists"
			        },
					otp: "",
						
						
					agree: "Please accept our policy"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop("type") === "checkbox" ) {
						
						//alert("fddfssdfd");
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".formrow" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".formrow" ).addClass( "has-success" ).removeClass( "has-error" );
				}

} );

});		
</script>

<script>
		$(document).ready(function(){
			$('.alert').delay(5000).slideUp();
		});
</script>

<script>
$(document).ready(function(){
$("#otplogin-form").validate( {
				rules: {
					
					phone: {
						remote:"check-mobile.php",
						number: true,
						required: true,
						minlength: 10,
						maxlength:10
							
					},
				},
				
				messages: {
				phone: {
						required: "Please enter a Mobile Number",
						minlength: "Your Mobile number must consist of at least 10 digit",
						remote : "This Mobile number doesn't exists. Please register."
					},
	},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop("type") === "checkbox" ) {
						
						//alert("fddfssdfd");
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".formrow" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".formrow" ).addClass( "has-success" ).removeClass( "has-error" );
				}
				
				
				
});
});
</script>

<script>
$(document).ready(function(){
$("#userotp-form").validate( {
				rules: {
					
					phone: {
						remote:"check-mobile.php",
						number: true,
						required: true,
						minlength: 10,
						maxlength:10
							
					},
				otppass: {
						required: true
						},

				},
				
				messages: {
				phone: {
						required: "Please enter a Mobile Number",
						minlength: "Your Mobile number must consist of at least 10 digit",
						remote : "This Mobile number doesn't exists. Please register."
					},
				otppass: {
						required: "Please enter a otp code."
					},	
	},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop("type") === "checkbox" ) {
						
						//alert("fddfssdfd");
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".formrow" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".formrow" ).addClass( "has-success" ).removeClass( "has-error" );
				}
				
				
				
});
});
</script>



<script>
$(document).ready(function(){
	$("#forgetpassword-form").validate({
		submitHandler : function(e) {
		    $(form).submit();
			
		},
		rules : {
			email : {
				required : true,
				email: true,
				remote:"check-email.php"
			}
		},
		messages : {
			email : {
				required : "Please enter email",
				remote : "Email not exists"
			}
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
	
});

</script>

<script>
$(document).ready(function(){
	$("#contactform1").validate({
		rules : {
			contactname : {
				required : true
					},
			contactcomments : {
				required : true
					},
			contactsubject : {
				required : true
					},
			contactemail : {
				required : true,
				email: true
			},
			contactphone: {
						number: true,
						required: true,
						minlength: 10,
						maxlength:10
							
					}
		},
		messages : {
			contactname : {
				required : "Please enter Your Name"
				},
			contactcomments : {
				required : "Please enter Your Comments"
				},
			contactsubject : {
				required : "Please enter Your Subject"
				},	
			contactemail : {
				required : "Please enter email"
				},
				
				contactphone: {
						required: "Please enter a Mobile Number",
						minlength: "Your Mobile number must consist of at least 10 digit"
						},
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
	
});

</script>




<script>
$(document).ready(function(){
	$("#ads-post").validate({
		rules : {
			adtitle : {
				required : true
				},
			adtype : {
				required : true
				},
            itemtype : {
				required : true
				},
            propertytype : {
				required : true
				},
            maincatgory : {
				required : true
				},
			subcatgory : {
				required : true
				},
			adprice : {
				required : true
				},
            city : {
				required : true
				},
			adlocation : {
				required : true
				},
			adaddress : {
                required : true
			},			
			addetail : {
				required : true
				}				
		},
		messages : {
			adtitle : {
				required : "Please enter Ad Title"
				
			},
			adtype : {
				required : "Please select Ad Type"
			},
			itemtype : {
				required : "Please select Item Type"
			},
			propertytype : {
				required : "Please select Property Type"
			},
			maincatgory : {
				required : "Please select Item Type"
			},
			subcatgory : {
				required : "Please select Item Type"
			},
			adprice : {
				required : "Please Enter Ad Price"
			},
			city : {
				required : "Please Enter your City"
			},
			adlocation : {
				required : "Please Enter your Location"
			},
			adaddress : {
				required : "Please Enter your Ad Address"
			},
			addetail : {
				required : "Please Enter your Description"
			}
			
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
	
});

</script>

<script>
$(document).ready(function(){
	$("#send-message-form").validate({
		rules : {
			client_msg : {
				required : true
				},
},
		messages : {
			client_msg : {
				required : "Please enter Message"
				
			},
},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
	
});

</script>

<script>
$(document).ready(function(){
	$("#cutomer_commands").validate({
		rules : {
			customer_msg : {
				required : true
				},
},
		messages : {
			customer_msg : {
				required : "Please enter Message"
				
			},
},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
	
});

</script>


			

</script>
<script>
$(document).ready(function(){
	$("#editads-post").validate({
		rules : {
			eadtitle : {
				required : true
				},
			eadtype : {
				required : true
				},
            eitemtype : {
				required : true
				},
            epropertytype : {
				required : true
				},
            emaincatgory : {
				required : true
				},
			esubcatgory : {
				required : true
				},
			eadprice : {
				required : true
				},
            ecity : {
				required : true
				},
			adlocation : {
				required : true
				},
			eadaddress : {
				required : true
				},	
			eaddetail : {
				required : true
				}				
		},
		messages : {
			eadtitle : {
				required : "Please enter Ad Title"
				
			},
			eadtype : {
				required : "Please select Ad Type"
			},
			eitemtype : {
				required : "Please select Item Type"
			},
			epropertytype : {
				required : "Please select Property Type"
			},
			emaincatgory : {
				required : "Please select Item Type"
			},
			esubcatgory : {
				required : "Please select Item Type"
			},
			eadprice : {
				required : "Please Enter Ad Price"
			},
			ecity : {
				required : "Please Enter your City"
			},
			adlocation : {
				required : "Please Enter your Location"
			},
			eadaddress : {
				required : "Please Enter your Ad Address"
			},
			eaddetail : {
				required : "Please Enter your Description"
			}
			
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
	
});

</script>




<script>
$(document).ready(function(){
	
	$("#account-form").validate({
		submitHandler : function(e) {
		    $(form).submit();
		},
		rules : {
			
			old_password : {
				required : true,
				remote   : {
						url: "check-email.php",
						type: "post",
						data: {
							password: function() {
								return $( "#old_password" ).val();
							},
							email: function() {
								return $( "#email" ).val();
							}
						}
				}
			},
			
			c_password : {
				required : true,
				minlength: 5
			}
			
		},
		messages : {
			old_password : {
				required : "Please enter current password",
				remote : "Please enter correct current password"
			},
			
			c_password : {
				required : "Please enter password",
				minlength: "Your password must be at least 5 characters long"
			}
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
	
});
</script>

<script>
$(document).ready(function(){
	
	$("#profile-form").validate({
		submitHandler : function(e) {
		    $(form).submit();
		},
		rules : {
			c_username: {
						required: true,
						minlength: 5
					},
			c_phone: {
						number: true,
						required: true,
						minlength: 10,
						maxlength:10
							
					}
			
			
		},
		messages : {
			c_username: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 5 characters"
					},
					c_phone: {
						required: "Please enter a Mobile Number",
						minlength: "Your Mobile number must consist of at least 10 digit"
						
					}
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
	
});
</script>



<script type='text/javascript'>
$(function() {
$('#adlocation').immybox({
          choices: [
		  
{text: 'Adambakkam', value: 'Adambakkam'},
{text: 'Adyar', value: 'Adyar'},
{text: 'Alandur', value: 'Alandur'},
{text: 'Alapakkam', value: 'Alapakkam'},
{text: 'Alwarpet', value: 'Alwarpet'},
{text: 'Alwarthirunagar', value: 'Alwarthirunagar'},
{text: 'Ambattur', value: 'Ambattur'},
{text: 'Aminjikarai', value: 'Aminjikarai'},
{text: 'Anna Nagar', value: 'Anna Nagar'},
{text: 'Annanur', value: 'Annanur'},
{text: 'Arumbakkam', value: 'Arumbakkam'},
{text: 'Ashok Nagar', value: 'Ashok Nagar'},
{text: 'Avadi', value: 'Avadi'},
{text: 'Ayanavaram', value: 'Ayanavaram'},
{text: 'Besant Nagar', value: 'Besant Nagar'},
{text: 'Basin Bridge', value: 'Basin Bridge'},
{text: 'Chepauk', value: 'Chepauk'},
{text: 'Chetput', value: 'Chetput'},
{text: 'Chindadiripet', value: 'Chindadiripet'},
{text: 'Chitlapakkam', value: 'Chitlapakkam'},
{text: 'Choolai', value: 'Choolai'},
{text: 'Choolaimedu', value: 'Choolaimedu'},
{text: 'Chrompet', value: 'Chrompet'},
{text: 'Egmore', value: 'Egmore'},
{text: 'Ekkaduthangal', value: 'Ekkaduthangal'},
{text: 'Ennore', value: 'Ennore'},
{text: 'Foreshore Estate', value: 'Foreshore Estate'},
{text: 'Fort St. George', value: 'Fort St. George'},
{text: 'George Town', value: 'George Town'},
{text: 'Gopalapuram', value: 'Gopalapuram'},
{text: 'Government Estate', value: 'Government Estate'},
{text: 'Guindy', value: 'Guindy'},
{text: 'IIT Madras', value: 'IIT Madras'},
{text: 'Injambakkam', value: 'Injambakkam'},
{text: 'ICF', value: 'ICF'},
{text: 'Iyyapanthangal', value: 'Iyyapanthangal'},
{text: 'Jafferkhanpet', value: 'Jafferkhanpet'},
{text: 'Karapakkam', value: 'Karapakkam'},
{text: 'Kattivakkam', value: 'Kattivakkam'},
{text: 'Kazhipattur', value: 'Kazhipattur'},
{text: 'K.K. Nagar', value: 'K.K. Nagar'},
{text: 'Keelkattalai', value: 'Keelkattalai'},
{text: 'Kelambakkam', value: 'Kelambakkam'},
{text: 'Kilpauk', value: 'Kilpauk'},
{text: 'Kodambakkam', value: 'Kodambakkam'},
{text: 'Kodungaiyur', value: 'Kodungaiyur'},
{text: 'Kolathur', value: 'Kolathur'},
{text: 'Korattur', value: 'Korattur'},
{text: 'Korukkupet', value: 'Korukkupet'},
{text: 'Kottivakkam', value: 'Kottivakkam'},
{text: 'Kotturpuram', value: 'Kotturpuram'},
{text: 'Kottur', value: 'Kottur'},
{text: 'Kovalam', value: 'Kovalam'},
{text: 'Kovilambakkam', value: 'Kovilambakkam'},
{text: 'Koyambedu', value: 'Koyambedu'},
{text: 'Kundrathur', value: 'Kundrathur'},
{text: 'Madhavaram', value: 'Madhavaram'},
{text: 'Madhavaram Milk Colony', value: 'Madhavaram Milk Colony'},
{text: 'Madipakkam', value: 'Madipakkam'},
{text: 'Madambakkam', value: 'Madambakkam'},
{text: 'Maduravoyal', value: 'Maduravoyal'},
{text: 'Manali', value: 'Manali'},
{text: 'Manali New Town', value: 'Manali New Town'},
{text: 'Manapakkam', value: 'Manapakkam'},
{text: 'Mandaveli', value: 'Mandaveli'},
{text: 'Mangadu', value: 'Mangadu'},
{text: 'Mannady', value: 'Mannady'},
{text: 'Mathur', value: 'Mathur'},
{text: 'Medavakkam', value: 'Medavakkam'},
{text: 'Meenambakkam', value: 'Meenambakkam'},
{text: 'MGR Nagar', value: 'MGR Nagar'},
{text: 'Minjur', value: 'Minjur'},
{text: 'Mogappair', value: 'Mogappair'},
{text: 'MKB Nagar', value: 'MKB Nagar'},
{text: 'Mount Road', value: 'Mount Road'},
{text: 'Moolakadai', value: 'Moolakadai'},
{text: 'Moulivakkam', value: 'Moulivakkam'},
{text: 'Mugalivakkam', value: 'Mugalivakkam'},
{text: 'Mudichur', value: 'Mudichur'},
{text: 'Mylapore', value: 'Mylapore'},
{text: 'Nandanam', value: 'Nandanam'},
{text: 'Nanganallur', value: 'Nanganallur'},
{text: 'Navalur', value: 'Navalur'},
{text: 'Neelankarai', value: 'Neelankarai'},
{text: 'Nemilichery', value: 'Nemilichery'},
{text: 'Nesapakkam', value: 'Nesapakkam'},
{text: 'Nolambur', value: 'Nolambur'},
{text: 'Noombal', value: 'Noombal'},
{text: 'Nungambakkam', value: 'Nungambakkam'},
{text: 'Otteri', value: 'Otteri'},
{text: 'Padi', value: 'Padi'},
{text: 'Pakkam', value: 'Pakkam'},
{text: 'Palavakkam', value: 'Palavakkam'},
{text: 'Pallavaram', value: 'Pallavaram'},
{text: 'Pallikaranai', value: 'Pallikaranai'},
{text: 'Pammal', value: 'Pammal'},
{text: 'Park Town', value: 'Park Town'},
{text: 'Parrys Corner', value: 'Parrys Corner'},
{text: 'Pattabiram', value: 'Pattabiram'},
{text: 'Pattaravakkam', value: 'Pattaravakkam'},
{text: 'Pazhavanthangal', value: 'Pazhavanthangal'},
{text: 'Peerkankaranai', value: 'Peerkankaranai'},
{text: 'Perambur', value: 'Perambur'},
{text: 'Peravallur', value: 'Peravallur'},
{text: 'Perumbakkam', value: 'Perumbakkam'},
{text: 'Perungalathur', value: 'Perungalathur'},
{text: 'Perungudi', value: 'Perungudi'},
{text: 'Pozhichalur', value: 'Pozhichalur'},
{text: 'Poonamallee', value: 'Poonamallee'},
{text: 'Porur', value: 'Porur'},
{text: 'Pudupet', value: 'Pudupet'},
{text: 'Pulianthope', value: 'Pulianthope'},
{text: 'Purasaiwalkam', value: 'Purasaiwalkam'},
{text: 'Puthagaram', value: 'Puthagaram'},
{text: 'Puzhal', value: 'Puzhal'},
{text: 'Puzhuthivakkam', value: 'Puzhuthivakkam'},
{text: 'Raj Bhavan', value: 'Raj Bhavan'},
{text: 'Ramavaram', value: 'Ramavaram'},
{text: 'Red Hills', value: 'Red Hills'},
{text: 'Royapettah', value: 'Royapettah'},
{text: 'Royapuram', value: 'Royapuram'},
{text: 'Saidapet', value: 'Saidapet'},
{text: 'Saligramam', value: 'Saligramam'},
{text: 'Santhome', value: 'Santhome'},
{text: 'Sembakkam', value: 'Sembakkam'},
{text: 'Selaiyur', value: 'Selaiyur'},
{text: 'Shenoy Nagar', value: 'Shenoy Nagar'},
{text: 'Sholavaram', value: 'Sholavaram'},
{text: 'Sholinganallur', value: 'Sholinganallur'},
{text: 'Sithalapakkam', value: 'Sithalapakkam'},
{text: 'Sowcarpet', value: 'Sowcarpet'},
{text: 'St.Thomas Mount', value: 'St.Thomas Mount'},
{text: 'Tambaram', value: 'Tambaram'},
{text: 'Teynampet', value: 'Teynampet'},
{text: 'Tharamani', value: 'Tharamani'},
{text: 'T. Nagar', value: 'T. Nagar'},
{text: 'Thirumangalam', value: 'Thirumangalam'},
{text: 'Thirumullaivoyal', value: 'Thirumullaivoyal'},
{text: 'Thiruneermalai', value: 'Thiruneermalai'},
{text: 'Thiruninravur', value: 'Thiruninravur'},
{text: 'Thiruvanmiyur', value: 'Thiruvanmiyur'},
{text: 'Tiruverkadu', value: 'Tiruverkadu'},
{text: 'Thiruvotriyur', value: 'Thiruvotriyur'},
{text: 'Tirusulam', value: 'Tirusulam'},
{text: 'Tiruvallikeni', value: 'Tiruvallikeni'},
{text: 'Tiruvallur', value: 'Tiruvallur'},
{text: 'Tondiarpet', value: 'Tondiarpet'},
{text: 'Vandalur', value: 'Vandalur'},
{text: 'Vadapalani', value: 'Vadapalani'},
{text: 'Valasaravakkam', value: 'Valasaravakkam'},
{text: 'Vallalar Nagar', value: 'Vallalar Nagar'},
{text: 'Vanagaram', value: 'Vanagaram'},
{text: 'Velachery', value: 'Velachery'},
{text: 'Villivakkam', value: 'Villivakkam'},
{text: 'Virugambakkam', value: 'Virugambakkam'},
{text: 'Vyasarpadi', value: 'Vyasarpadi'},
{text: 'Washermanpet', value: 'Washermanpet'},
{text: 'West Mambalam', value: 'West Mambalam'},
{text: 'Others', value: 'Others'},
          ],
          defaultSelectedValue: 'LA'
        });

      });
</script>
<script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();
</script>
<script>
$(document).ready(function(){
    $("#ads-post").on('submit', function(e){
         e.preventDefault(); 
		 
	if($('#adtitle').val().trim() === "" || $('#adtype').val().trim() === "" || $('#itemtype').val().trim() === "" || $('#propertytype').val().trim() === "" || $('#maincatgory').val().trim() === "" || $('#subcatgory').val().trim() === "" || $('#adprice').val().trim() === ""  || $('#city').val().trim() === ""  || $('#adlocation').val().trim() === "" || $('#addetail').val().trim() === "" ) 
		{	 
		 
		}	 
	else	
	{		
 
$.ajax({  
             url: "ad_post.php",  
             type: "POST",  
            data: new FormData(this),
              contentType: false,  
               processData:false,  
              success: function(data)  
              {  
              //$("#verify_otppass").html(data);
//alert(data);	
$('#ads-post')[0].reset();
$imageupload.imageupload('reset');
$('#preview').html(data);

              }  
           });	
	}		   
});

});
</script>

<script>
$(document).ready(function(){
    $("#editads-post").on('submit', function(e){
         e.preventDefault(); 
		 
	if($('#eadtitle').val().trim() === "" || $('#eadtype').val().trim() === "" || $('#eitemtype').val().trim() === "" || $('#epropertytype').val().trim() === "" || $('#emaincatgory').val().trim() === "" || $('#esubcatgory').val().trim() === "" || $('#eadprice').val().trim() === ""  || $('#ecity').val().trim() === ""  || $('#adlocation').val().trim() === "" || $('#eaddetail').val().trim() === "" ) 
		{	 
		 
		}	 
	else	
	{		
 
$.ajax({  
             url: "editad_post.php",  
             type: "POST",  
            data: new FormData(this),
              contentType: false,  
               processData:false,  
              success: function(data)  
              {  
              //$("#verify_otppass").html(data);
//alert(data);	
$('#editads-post')[0].reset();
$imageupload.imageupload('reset');
$('#preview').html(data);

              }  
           });	
	}		   
});
});
</script>

<script>
$(document).ready(function(){
    $("#otp-form").on('submit', function(e){
         e.preventDefault(); 
		
	if($('#userotp').val().trim() === "") 
		{	 
		 
		}	 
	else	
	{		
 
$.ajax({  
             url: "otp_verify.php",  
             type: "POST",  
            data: new FormData(this),
              contentType: false,  
               processData:false,  
              success: function(data)  
              {  
              //$("#verify_otppass").html(data);
//alert(data);	
$('#otp-form')[0].reset();
$('#preview').html(data);

              }  
           });	
	}		   
});

$('#otpresent').each(function(index) {
    $(this).on("click", function(){
       var h = $(this).attr('data-fullText');
	   	   
	   $.ajax({
		type: "POST",
		url: "resend_otp.php",
		data: "country="+h,
		cache: false,
		success: function(response)
			{
			$("#preview").html(response);
			}
			}); 
	  
	  
    });
});


});
</script>



<script src="js/jquery.richtext.js"></script>
<script src="js/jquery.pagination.js"></script>
<script>
        $(document).ready(function() {
           // $('#addetail').richText();
		   
		     //alert("dsfasfd dfjsahfdjk");
			 
	$('.delete_button').each(function(index) {
        $(this).on("click", function(){
       var j = $(this).attr('data-fullText');
	   	$.ajax({
		type: "POST",
		url: "delete_ads.php",
		data: "id="+j,
		cache: false,
		success: function(response)
			{
			//$("#preview").html(response);
			//alert(response);
			location.reload();
			}
			});
    });
});
			 
				   	
		   
        });
</script>
<script>
$(document).ready(function(){
    $(".close").click(function(){
		$("#ecover_img").val("ad-img2.jpg");
		$(".formrow").removeClass("fmblock");
		$(".old_ads").hide();
		
    });
	$(".close1").click(function(){
$("#esub_img1").val("ad-img2.jpg");
		$(".formrow").removeClass("fmblock1");
		$(".old_ads1").hide();
    });
	$(".close2").click(function(){
$("#esub_img2").val("ad-img2.jpg");
		$(".formrow").removeClass("fmblock2");
		$(".old_ads2").hide();
    });
	$(".close3").click(function(){
		$("#esub_img3").val("ad-img2.jpg");
		$(".formrow").removeClass("fmblock3");
		$(".old_ads3").hide();
    });
});
</script>


<script>
    $(document).ready(function() {
      $('#gallery_1').Paginationwithhashchange2({
        nextSelector: '.next',
        prevSelector: '.prev',
        counterSelector: '.counter',
        pagingSelector: '.paging-nav',
        itemsPerPage: 4,
        initialPage: 1
      });
    });
</script>

<script>
$(document).ready(function(){
	$('.ads_counter').each(function(index) {
    $(this).on("click", function(){
       var ads_counter = $(this).attr('data-fullText');
	   //$('#hid1').val(h);
	  //alert(ads_counter);
	 $.ajax({
		type: "POST",
		url: "check_counter.php",
		data: "ads_counter="+ads_counter,
		cache: false,
		success: function(response)
			{
			//alert(response);
			//$("#history1").html(response);
			}
		});
	  	 
    });
});
});
</script>

<script>
$(document).ready(function(){
    $("#send-message-form").on('submit', function(e){
         e.preventDefault(); 
		 
if($('#client_msg').val().trim() === "")
{
}
else
{		 
$.ajax({  
             url: "client_msg.php",  
             type: "POST",  
              data: new FormData(this),
               contentType: false,  
               processData:false,  
              success: function(data)  
              { 
               //alert(data);			  
              $("#msg_user").html(data); 
			  $('#send-message-form')[0].reset();
			  $('.alert').delay(1000).slideUp();
              }  
           });
}		   
});
});
</script>


<script>
$(document).ready(function(){
    $("#cutomer_commands").on('submit', function(e){
         e.preventDefault(); 
		 
if($('#client_msg').val().trim() === "")
{
	
}
else
{	
 
$.ajax({  
             url: "client_msg.php",  
             type: "POST",  
              data: new FormData(this),
               contentType: false,  
               processData:false,  
              success: function(data)  
              { 
			  window.location.reload();
			  location.reload();
               //alert(data);			  
              //$("#msg_user").html(data); 
			  //$('#send-message-form')[0].reset();
			  //$('.alert').delay(1000).slideUp();
              }  
           });
}		   
});
});
</script>

<script>
$(document).ready(function(){
    $("#contactform1").on('submit', function(e){
         e.preventDefault(); 
		 	
$.ajax({  
             url: "contact.php",  
             type: "POST",  
              data: new FormData(this),
               contentType: false,  
               processData:false,  
              success: function(data)  
              { 
			  //alert(data);			  
              $("#message").html(data); 
			  $('#contactform1')[0].reset();
			  $('.alert').delay(1000).slideUp();
              }  
    });
		   
});
});
</script>

<script>
$(document).ready(function(){
    $("#otplogin-form").on('click', function(e){
         e.preventDefault(); 
		if($('#phone').val().trim() === "")
		{
		}			
  else{		 	
$.ajax({  
             url: "otpsigin1.php",  
             type: "POST",  
              data: new FormData(this),
               contentType: false,  
               processData:false,  
              success: function(data)  
              { 
			  //alert(data);			  
              $("#preview").html(data); 
			  $('#otplogin-form')[0].reset();
			  //window.location.href = "userotplogin.php";
              }  
    });
	
}	   
});
});
</script>




<script>
$(document).ready(function(){
   $('.hpass').each(function(index) {
    $(this).on("click", function(){
       var h = $(this).attr('data-fullText');
	   
	$.ajax({
		type: "POST",
		url: "repost_ads.php",
		data: "ads_id="+h,
		cache: false,
		success: function(response)
			{
			//alert(response);
			//$("#history1").html(response);
			window.location.reload();
			location.reload();
			
			}
		});
  
    });
});
});
</script>




<script>
$(document).ready(function(){
$('#maincatgory').on('change', function() {
    if (this.value == 'Vehicle') {
		$('#subcatgory').html('');
 
$('#subcatgory').append( '<option value="Car">'+'Car'+'</option>','<option value="Bike">'+'Bike'+'</option>' );

 $('#preprice').prop('disabled', true);
    } else {
$('#subcatgory').html('');
$('#subcatgory').append( '<option value="Apartment">'+'Apartment'+'</option>','<option value="House and Villa">'+'House &amp; Villa'+'</option>','<option value="Builder Floor">'+'Builder Floor'+'</option>','<option value="Land and Plot">'+'Land &amp; Plot'+'</option>','<option value="Shop and Office">'+'Shop &amp; Office'+'</option>','<option value="Farm House">'+'Farm House'+'</option>' );

	$('#preprice').prop('disabled', false);
    }
	
	
	
});
});
</script>

<script>
$(document).ready(function(){
$('#emaincatgory').on('change', function() {
    if (this.value == 'Vehicle') {
		$('#esubcatgory').html('');
 
$('#esubcatgory').append( '<option value="Car">'+'Car'+'</option>','<option value="Bike">'+'Bike'+'</option>' );
		
        $('#epreprice').prop('disabled', true);
    } else {
		$('#esubcatgory').html('');
$('#esubcatgory').append( '<option value="Apartments">'+'Apartments'+'</option>','<option value="Houses &amp; Villas">'+'Houses &amp; Villas'+'</option>','<option value="Builder Floors">'+'Builder Floors'+'</option>','<option value="Land &amp; Plots">'+'Land &amp; Plots'+'</option>','<option value="Shops &amp; Offices">'+'Shops &amp; Offices'+'</option>','<option value="Farm Houses">'+'Farm Houses'+'</option>' );
		
        $('#epreprice').prop('disabled', false);
    }
});
});
</script>

<script>
$(document).ready(function(){
$('#adtype').on('change', function() {
    if (this.value == 'Rental room apartment') {
		$('#propertytype').html('');
 
       $('#propertytype').append( '<option value="Room for Rent">'+'Room for Rent'+'</option>','<option value="Apartment for Rent">'+'Apartment for Rent'+'</option>' );
	 } 
	else if (this.value == 'Sell') {
		$('#propertytype').html('');
 
       $('#propertytype').append( '<option value="Sale Property">'+'Sale Property'+'</option>','<option value="Sell used Car/Vehicle">'+'Sell used Car/Vehicle'+'</option>' );
	 } 
	
	
	else {
		$('#propertytype').html('');
$('#propertytype').append( '<option value="Buy Property">'+'Buy Property'+'</option>','<option value="Buy used Car/Vehicle">'+'Buy used Car/Vehicle'+'</option>' );
	    
    }
});
});
</script>


<script>
$(document).ready(function() {
        $("#btnPrint").click(function(){
			var divContents = $("#dvContainer").html();
			var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
			printWindow.document.write('<link href="css/owl.carousel.css" rel="stylesheet">');
			printWindow.document.write('<link href="css/bootstrap.min.css" rel="stylesheet">');
printWindow.document.write('<link href="css/font-awesome.css" rel="stylesheet">');
printWindow.document.write('<link href="css/main.css" rel="stylesheet">');
printWindow.document.write('<link href="css/immybox.css" rel="stylesheet">');
printWindow.document.write('<link href="css/bootstrap-imageupload.css" rel="stylesheet">');
printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
	});	
</script>


</body>
</html>