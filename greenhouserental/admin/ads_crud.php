<?php
include "../config.php";

class Crud
{

 public $connect;
 private $host = DB_HOST;
 private $username = DB_USERNAME;
 private $password = DB_PASSWORD;
 private $database = DB_NAME;

 function __construct()
 {
  $this->database_connect();
 }

 public function database_connect()
 {
  $this->connect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
 }

 public function execute_query($query)
 {
  return mysqli_query($this->connect, $query);
 }

 public function get_data_in_table($query)
 {
  $output = '';
  $result = $this->execute_query($query);
  $output .= '
  <table class="table table-bordered table-striped">
   <tr>
    <th>S No:</th>
    <th>User Name</th>
    <th>Ad Title</th>
    <th>Ad Type</th>
    <th>Item Type</th>
    <th>Property Type</th>
	<th>Main Catgory</th>
	<th>Sub Catgory</th>
	<th>Ad Location</th>
	<th>Created Date</th>
	<th>Remaining Days</th>
	<th>Featured Ads</th>
	<th>Ad Status</th>
	<th>View</th>
	<th>Delete</th>
	</tr>
  ';
  if(mysqli_num_rows($result) > 0)
  {
   while($row = mysqli_fetch_object($result))
    {
$now = time(); // or your date as well
$your_date = strtotime($row->post_date);
$datediff = $now - $your_date;
$da = floor($datediff / (60 * 60 * 24));
$da1 = 30-$da;		
		
 	$output .= '
    <tr>
	 <td>'.++$s.'</td>
	 <td>'.$row->user_name.'</td>
	 <td>'.$row->ad_title.'</td>
	 <td>'.$row->ad_type.'</td>
	 <td>'.$row->item_type.'</td>
	 <td>'.$row->property_type.'</td>
	 <td>'.$row->main_catgory.'</td>
	 <td>'.$row->sub_catgory.'</td>
	 <td>'.$row->ad_location.'</td>
	  
     <td>'.date("d-m-y h:i a", strtotime($row->post_date)).'</td>
	 
	 <td><span class="btn btn-warning">'. $da1 .' Days</span></td>';
	 
	 if($row->featured == 1)
	 {	 
	$output .= '<td><button type="button" name="hotel_satus_1" id="'.$row->id.'" value="2" class="btn btn-warning btn-sm hotel_satus_1"><span class="fa fa-close"></span> Not Set</button></td>';
	 }
	 else
	 {
	$output .= '<td><button type="button" name="hotel_satus_1" id="'.$row->id.'" value="1" class="btn btn-info btn-sm hotel_satus_1"><span class="fa fa-check"></span> Set Featured </button></td>';	 
	 }
	 	 
	 if($row->ad_status == 1)
	 {	 
	$output .= '<td><button type="button" name="hotel_satus" id="'.$row->id.'" value="2" class="btn btn-danger btn-sm hotel_satus"><span class="glyphicon glyphicon-remove-circle"></span> Not Approved</button></td>';
	 }
	 else
	 {
	$output .= '<td><button type="button" name="hotel_satus" id="'.$row->id.'" value="1" class="btn btn-success btn-sm hotel_satus"><span class="glyphicon glyphicon-ok-circle"></span> Approved</button></td>';	 
	 }	 
    $output .= '<td><a class="hpass btn btn-success btn-sm" href="#" data-fullText="'.$row->id.'" data-toggle="modal" data-target="#myModal8"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
	<td><button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-sm delete"><span class="glyphicon glyphicon-trash"></span> Delete</button></td>
    </tr>
    ';
   }
  }
  else
  {
   $output .= '
    <tr>
     <td colspan="12" align="center">No Data Found</td>
    </tr>
   ';
  }
  $output .= '</table>';
  return $output;
 } 
 
 function make_pagination_link($query, $record_per_page)
 {
  $output = '';
  $result = $this->execute_query($query);
  $total_records = mysqli_num_rows($result);
  $total_pages = ceil($total_records/$record_per_page);
  for($i=1; $i<=$total_pages; $i++)
  {
   $output .= '<span class="pagination_link" style="cursor:pointer; padding:6px; border:1px solid #ccc;" id="'.$i.'">'.$i.'</span>';
  }
  return $output;
 }
}
?>

