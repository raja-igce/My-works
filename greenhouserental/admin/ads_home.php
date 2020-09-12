<?php session_start();
if(empty($_SESSION['uname']))
{
header("location:index.php");
}	
?>

<?php
include 'ads_crud.php';
$object = new Crud();
include "header.php";
?>
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<h2 class="page-header">Ads list</h2>
</div>
<!-- /.col-lg-12 -->
</div>
 
<div class="col-md-8">
</div>
<div class="col-md-4">
<input type="text" name="search" id="search" placeholder="Search" class="form-control" />
</div>

<br/>
<br/>
<br/>
<div id="user_table" class="table-responsive user_table1">
</div>


<div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog modal-md">
<!-- Modal content-->
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View Ads</h4>
        </div>
        <div class="modal-body">
<div id="history1"></div>
		
        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
</div>
</div>
</div>




</div>
</div>  


<?php
include "footer.php";
?>
<script>
$(document).on('click', '.hpass', function(){
//$('.hpass').each(function(index) {
    //$(this).on("click", function(){
    var view_his = $(this).attr('data-fullText');
	//alert(view_his);
	  $.ajax({
		type: "POST",
		url: "ads_details.php",
		data: "view_his="+view_his,
		cache: false,
		success: function(response)
			{
			//alert(response);return false;
			$("#history1").html(response);
			}
			});
	  	  
    //});
//});
});
</script>
  
<script type="text/javascript">
 $(document).ready(function(){

  load_data();

  
  function load_data(page)
  {
   var action = "Load";
   $.ajax({
    url:"ads_action.php",
    method:"POST",
    data:{action:action, page:page},
    success:function(data)
    {
     $('#user_table').html(data);
    }
   });
  }

  $(document).on('click', '.pagination_link', function(){
   var page = $(this).attr("id");
   load_data(page);
  });
  

$(document).on('click', '.hotel_satus', function(){
   var user_id = $(this).attr("id");
   var user_id1 = $(this).val();
   
   var action = "hotel_satus";
   $.ajax({
     url:"ads_action.php",
     method:"POST",
     data:{user_id:user_id, action:action, user_id1:user_id1},
     success:function(data)
     {
      //alert(data);
      load_data();
     }
    });
});

$(document).on('click', '.hotel_satus_1', function(){
   var user_id = $(this).attr("id");
   var user_id1 = $(this).val();
      
   var action = "set_featured";
   $.ajax({
     url:"ads_action.php",
     method:"POST",
     data:{user_id:user_id, action:action, user_id1:user_id1},
     success:function(data)
     {
      //alert(data);
      load_data();
     }
    });
});

  
  
  $(document).on('click', '.delete', function(){
   var user_id = $(this).attr("id");
   var action = "Delete";
   if(confirm("Are you sure you want to delete this?"))
   {
    $.ajax({
     url:"ads_action.php",
     method:"POST",
     data:{user_id:user_id, action:action},
     success:function(data)
     {
      //alert(data);
      load_data();
     }
    });
   }
   else
   {
    return false;
   }
  });
  
  $('#search').keyup(function(){
   var query = $('#search').val();
   var action = "Search";
   if(query != '')
   {
    $.ajax({
     url:"ads_action.php",
     method:"POST",
     data:{query:query, action:action},
     success:function(data)
     {
      $('#user_table').html(data);
     }
    });
   }
   else
   {
    load_data();
   }
  });
  
 });
</script>
