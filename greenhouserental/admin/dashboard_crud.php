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
                     <th width="10%">id</th>  
                     <th width="20%">Customer name</th>  
                     <th width="45%">Banner Image</th>  
                     <th width="10%">Edit</th>  
                       
                </tr>  
           ';  
           while($row = mysqli_fetch_object($result))  
           {  
                $output .= '  
                <tr> 
                    <td>'.++$i.'</td>				
                    <td>'.$row->cust_name.'</td>				
                     <td><img src="dashboardimage/'.$row->ban_ads.'" class="img-thumbnail" width="160px" height="300px" /></td>  
                                         
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs update">Update</button></td>  
                       
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
                $destination = 'dashboardimage/' . $new_name;  
                move_uploaded_file($file['tmp_name'], $destination);  
                return $new_name;  
           }  
      }  
 }  
 ?>  

