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
                     <th width="20%">Ad Image</th>  
                     <th width="35%">Website Url</th>  
                     <th width="35%">Address</th>  
                     <th width="10%">Update</th>  
                     <th width="10%">Delete</th>  
                </tr>  
           ';  
           while($row = mysqli_fetch_object($result))  
           {  
                $output .= '  
                <tr>  
                     <td><img src="classifiedimage/'.$row->ad_image.'" class="img-thumbnail" width="300" height="300" /></td>  
                     <td>'.$row->web_url.'</td>  
                     <td>'.$row->ad_address.'</td>  
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs update">Update</button></td>  
                     <td><button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs delete">Delete</button></td>  
                </tr>  
                ';  
           }  
           $output .= '</table>';  
           return $output;  
      }  
      function upload_file($file)  
      {  
           if(isset($file))  
           {  
                $extension = explode('.', $file['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = 'classifiedimage/' . $new_name;  
                move_uploaded_file($file['tmp_name'], $destination);  
                return $new_name;  
           }  
      }  
 }  
 ?>  