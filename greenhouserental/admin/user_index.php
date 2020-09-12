<?php
//index.php
include 'usercrud.php';
$object = new Crud();
?>
<?php include "header.php"; ?>
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<h2 class="page-header">User list</h2>
</div>
<!-- /.col-lg-12 -->
</div>

   <div class="col-md-8">
   </div>
   <div class="col-md-4">
    <input type="text" name="search" id="search" placeholder="Search" class="form-control" />
	<br/>
   </div>
   <br />
  <br />
   <div id="user_table" class="table-responsive">
   </div>
   
   
   
</div>
</div>  
  <?php include "footer.php"; ?>

<script type="text/javascript">
 $(document).ready(function(){

  load_data();

  
  function load_data(page)
  {
   var action = "Load";
   $.ajax({
    url:"user_action.php",
    method:"POST",
    data:{action:action, page:page},
    success:function(data)
    {
     $('#user_table').html(data);
    }
   });
  }
  
 $(document).on('click', '.user_status1', function(){
   var user_id = $(this).attr("id");
   var user_id1 = $(this).val();
     
   var action = "set_user_status";
   $.ajax({
     url:"user_action.php",
     method:"POST",
     data:{user_id:user_id, action:action, user_id1:user_id1},
     success:function(data)
     {
      //alert(data);
      load_data();
     }
    });
}); 
  

  $(document).on('click', '.pagination_link', function(){
   var page = $(this).attr("id");
   load_data(page);
  });
  
  $(document).on('click', '.delete', function(){
   var user_id = $(this).attr("id");
   var action = "Delete";
   if(confirm("Are you sure you want to delete this?"))
   {
    $.ajax({
     url:"user_action.php",
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
     url:"user_action.php",
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

