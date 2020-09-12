<?php
//index.php
include 'classified_crud.php';
$object = new Crud();
?>
<?php include "header.php"; ?>
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<h2 class="page-header">Classified Ads</h2>
</div>
<!-- /.col-lg-12 -->
</div>  
<div class="panel panel-success">
<div class="panel-heading"><b>Image width:600 px and height:400 px;</b></div>
</div><br/>

                <button type="button" name="add" class="btn btn-success" data-toggle="collapse" data-target="#user_collapse">Add New Ads</button>  
                <br /><br />  
                <div id="user_collapse" class="collapse">  
                     <form method="post" id="user_form">  
                          <label>Website Url:</label>  
                          <input type="text" name="first_name" id="first_name" class="form-control" placeholder="http://google.com" />  
                          <br />  
                          <label>Address:</label>  

						  <textarea name="last_name" id="last_name" class="form-control"></textarea>
                          <br />  
                          <label>Select User Image</label>  
                          <input type="file" name="user_image" id="user_image" />  
                          <input type="hidden" name="hidden_user_image" id="hidden_user_image" />  
                          <span id="uploaded_image"></span>  
                          <br />  
                          <div align="center">  
                               <input type="hidden" name="action" id="action" />  
                               <input type="hidden" name="user_id" id="user_id" />  
                               <input type="submit" name="button_action" id="button_action" class="btn btn-default" value="Insert" />  
                          </div>  
                          <br />  
                     </form>  
                </div>  
                <br />  
                <div class="table-responsive" id="user_table">  
                </div>  
           </div>  
 </div>  
  <?php include "footer.php"; ?>       
 <script type="text/javascript">  
      $(document).ready(function(){  
           load_data();  
           $('#action').val("Insert");  
           $('#add').click(function(){  
                $('#user_form')[0].reset();  
                $('#uploaded_image').html('');  
                $('#button_action').val("Insert");  
           });  
           function load_data()  
           {  
                var action = "Load";  
                $.ajax({  
                     url:"classified_action.php",  
                     method:"POST",  
                     data:{action:action},  
                     success:function(data)  
                     {  
                          $('#user_table').html(data);  
                     }  
                });  
           }  
           $('#user_form').on('submit', function(event){  
                event.preventDefault();  
                var firstName = $('#first_name').val();  
                var lastName = $('#last_name').val();  
                var userimage = $('#user_image').val();  
                var extension = $('#user_image').val().split('.').pop().toLowerCase();  
                if(extension != '')  
                {  
                     if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)  
                     {  
                          alert("Invalid Image File");  
                          $('#user_image').val('');  
                          return false;  
                     }  
                }  
                if(firstName != '' && lastName != '' && userimage != '')  
                {  
                     $.ajax({  
                          url:"classified_action.php",  
                          method:'POST',  
                          data:new FormData(this),  
                          contentType:false,  
                          processData:false,  
                          success:function(data)  
                          {  
                               alert(data);  
                               $('#user_form')[0].reset();  
                               load_data();  
                               $("#action").val("Insert");  
                               $('#button_action').val("Insert");  
                               $('#uploaded_image').html('');  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Both Fields are Required");  
                }  
           });  
           $(document).on('click', '.update', function(){  
                var user_id = $(this).attr("id");  
                var action = "Fetch Single Data";  
                $.ajax({  
                     url:"classified_action.php",  
                     method:"POST",  
                     data:{user_id:user_id, action:action},  
                     dataType:"json",  
                     success:function(data)  
                     {  
                          $('.collapse').collapse("show");  
                          $('#first_name').val(data.first_name);  
                          $('#last_name').val(data.last_name);  
                          $('#uploaded_image').html(data.image);  
                          $('#hidden_user_image').val(data.user_image);  
                          $('#button_action').val("Edit");  
                          $('#action').val("Edit");  
                          $('#user_id').val(user_id);  
                     }  
                });  
           }); 

$(document).on('click', '.delete', function(){
  var user_id = $(this).attr("id");
  var action = "delete";
  if(confirm("Are you sure you want to remove this record from database?"))
  {
   $.ajax({
    url:"classified_action.php",
    method:"POST",
    data:{user_id:user_id, action:action},
    success:function(data)
    {
     alert(data);
     load_data();
    }
   })
  }
  else
  {
   return false;
  }
 });

		   
      });  
 </script>