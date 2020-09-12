<div class="copyrights">
	 <p>© 2018. All Rights Reserved | Developed by  <a href="http://e-soft.in/" target="_blank">e-soft</a></p>
</div>	

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>


<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
<script type="text/javascript" >
$(document).ready(function() {

				$('#version').valida( 'version' );
				$('.valida').valida();

				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/


				//$('#partial-1').on('click', function( ev ) {
					//ev.preventDefault();
					//$('#res-1').click(); 
					//$('form').valida('partial', '#field-1'); 
					//$('form').valida('partial', '#field-1-3'); 
				//}); //

			});

		</script>



<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>


<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>
<script type="text/javascript" src="jquery_ui/jquery-ui.js"></script>



<script>
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close1 pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:100,
            height:100
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
</script>

<!-- Loader Script-->
		<script src="loader/jquery.easing.1.3.js"></script>
        <script src="loader/spin.min.js"></script>
        <script src="loader/jquery.introLoader.js"></script>
        <script src="data_picker/datepicker.js"></script>
        
		
<script src="custom/js/index.js"></script>

<script>
    $(function() {
      $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
		format: 'dd-mm-yyyy'
      });
    });
  </script>

<script>
			$(document).on('ready', function() {
    $("#element").introLoader({
        animation: {
            name: 'cssLoader',
            options: {
                ease: "easeOutSine",
                style: 'dark',
                delayBefore: 500,
                delayAfter: 0,
                exitTime: 300
            }
        }
    });
});
</script>

<script>
$(document).ready(function () {

  $(".only_number1").keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#errmsg1").html("Only Type Number").show().fadeOut("slow");
               return false;
    }
   });
   
   $(".only_number2").keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#errmsg2").html("Only Type Number").show().fadeOut("slow");
               return false;
    }
   });
   
      $(".only_number3").keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#errmsg3").html("Only Type Number").show().fadeOut("slow");
               return false;
    }
   });
   
         $(".only_number4").keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#errmsg4").html("Only Type Number").show().fadeOut("slow");
               return false;
    }
   });
   
            $(".only_number5").keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#errmsg5").html("Only Type Number").show().fadeOut("slow");
               return false;
    }
   });
   
    $(".only_number6").keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#errmsg6").html("Only Type Number").show().fadeOut("slow");
               return false;
    }
   });
   
   
   
   
});
</script>


<script>
$(document).ready(function () {

$('#training_name').on('change', function() {
   var sel = this.value;
  if(sel == 'Tailoring')
  {
  $("#d_month").empty();
  $('#d_month').append('<option value="">Select options</option>');
  $('#d_month').append('<option value="6 month">6 month</option>');
  $('#d_month').append('<option value="1 month">1 month</option>');
  }
  else if(sel == 'Computer')
  {
    $("#d_month").empty();
	  $('#d_month').append('<option value="">Select options</option>');
  $('#d_month').append('<option value="1 month">1 month</option>');
  $('#d_month').append('<option value="3 month">3 month</option>');
  $('#d_month').append('<option value="6 month">6 month</option>');
  
  }
  else if(sel == 'Greetings Card')
  {
    $("#d_month").empty();
	  $('#d_month').append('<option value="">Select options</option>');
   $('#d_month').append('<option value="1 month">1 month</option>');
  }
  else if(sel == 'Typewriting')
  {
    $("#d_month").empty();
	  $('#d_month').append('<option value="">Select options</option>');
     $('#d_month').append('<option value="Basic">Basic</option>');
     $('#d_month').append('<option value="6 month T/E">6 month T/E</option>');
  
  }
   else if(sel == 'Book Binding')
  {
    $("#d_month").empty();
	  $('#d_month').append('<option value="">Select options</option>');
     $('#d_month').append('<option value="1 month">1 month</option>');
  }
  
});

});

</script>


<script>
$(document).ready(function () {

$('#etraining_name').on('change', function() {
   var sel = this.value;
  if(sel == 'Tailoring')
  {
  $("#ed_month").empty();
  $('#ed_month').append('<option value="">Select options</option>');
  $('#ed_month').append('<option value="6 month">6 month</option>');
  $('#ed_month').append('<option value="1 month">1 month</option>');
  }
  else if(sel == 'Computer')
  {
    $("#ed_month").empty();
	  $('#ed_month').append('<option value="">Select options</option>');
  $('#ed_month').append('<option value="1 month">1 month</option>');
  $('#ed_month').append('<option value="3 month">3 month</option>');
  $('#ed_month').append('<option value="6 month">6 month</option>');
  
  }
  else if(sel == 'Greetings Card')
  {
    $("#ed_month").empty();
	  $('#ed_month').append('<option value="">Select options</option>');
   $('#ed_month').append('<option value="1 month">1 month</option>');
  }
  else if(sel == 'Typewriting')
  {
    $("#ed_month").empty();
	  $('#ed_month').append('<option value="">Select options</option>');
     $('#ed_month').append('<option value="Basic">Basic</option>');
     $('#ed_month').append('<option value="6 month T/E">6 month T/E</option>');
  
  }
   else if(sel == 'Book Binding')
  {
    $("#ed_month").empty();
	  $('#ed_month').append('<option value="">Select options</option>');
     $('#ed_month').append('<option value="1 month">1 month</option>');
  }
  
});

});

</script>

<script>
		$(document).ready(function(){
			$('.alert').delay(5000).slideUp();
		});
</script>


												
</body>
</html>