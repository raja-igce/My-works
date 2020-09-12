<?php  
 include 'footer_crud.php';  
 $object = new Crud();  
 if(isset($_POST["action"]))  
 {  
      if($_POST["action"] == "Load")  
      {  
           echo $object->get_data_in_table("SELECT * FROM footer_ads ORDER BY id DESC");  
      }  
        
      if($_POST["action"] == "Fetch Single Data")  
      {  
           $output = '';  
           $query = "SELECT * FROM footer_ads WHERE id = '".$_POST["user_id"]."'";  
           $result = $object->execute_query($query);  
           while($row = mysqli_fetch_array($result))  
           {  
                $output["first_name"] = $row['cust_name'];  
                $output["image"] = '<img src="footerimage/'.$row['ban_ads'].'" class="img-thumbnail" width="60%" height="200px;" />';  
                $output["user_image"] = $row['ban_ads'];  
           }  
           echo json_encode($output);  
      }  
      if($_POST["action"] == "Edit")  
      {  
           $image = '';  
           if($_FILES["user_image"]["name"] != '')  
           {  
                $image = $object->upload_file($_FILES["user_image"]); 
unlink('footerimage/'.$_POST["hidden_user_image"]);				
           }  
           else  
           {  
                $image = $_POST["hidden_user_image"];  
           }  
           $cust_name = mysqli_real_escape_string($object->connect, $_POST["first_name"]);  
            
           $query = "UPDATE footer_ads SET cust_name = '".$cust_name."', ban_ads = '".$image."' WHERE id = '".$_POST["user_id"]."'";  
           $object->execute_query($query);  
           echo 'Data Updated';  
      }  
 }  
 ?>  