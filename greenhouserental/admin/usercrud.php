<?php
include "../config.php";

class Crud
{
 //crud class
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
  $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);
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
    <th width="10%">SNo:</th>
    <th width="10%">Name</th>
    <th width="10%">Mobile No</th>
    <th width="10%">E-mail ID</th>
    <th width="15%">Created Date</th>
    <th width="15%">user block</th>
    <th width="10%">Delete</th>
   </tr>
  ';
  if(mysqli_num_rows($result) > 0)
  {
   while($row = mysqli_fetch_object($result))
   {
    $output .= '
    <tr>
	<td>'.++$s.'</td>
     <td>'.$row->name.'</td>
     <td>'.$row->mobile.'</td>
     <td>'.$row->email.'</td>
     <td>'.date("d-m-y h:i a", strtotime($row->created)).'</td>';
	 
	 if($row->user_status == 1)
	 {	 
	$output .= '<td><button type="button" name="user_status1" id="'.$row->user_id.'" value="2" class="btn btn-warning btn-sm user_status1">Unblock</button></td>';
	 }
	 else
	 {
	$output .= '<td><button type="button" name="user_status1" id="'.$row->user_id.'" value="1" class="btn btn-info btn-sm user_status1">Block</button></td>';	 
	 }
	 
     
	$output .= ' <td><button type="button" name="delete" id="'.$row->user_id.'" class="btn btn-danger btn-xs delete">Delete</button></td>
     
    </tr>
    ';
   }
  }
  else
  {
   $output .= '
    <tr>
     <td colspan="6" align="center">No Data Found</td>
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

