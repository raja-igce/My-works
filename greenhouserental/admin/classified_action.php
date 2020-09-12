<?php  
 include 'classified_crud.php';  
 $object = new Crud();  
 if(isset($_POST["action"]))  
 {  
      if($_POST["action"] == "Load")  
      {  
           echo $object->get_data_in_table("SELECT * FROM classified_ads ORDER BY id DESC");  
      }  
      if($_POST["action"] == "Insert")  
      {  
           $first_name = mysqli_real_escape_string($object->connect, $_POST["first_name"]);  
           $last_name = mysqli_real_escape_string($object->connect, $_POST["last_name"]);  
           $image = $object->upload_file($_FILES["user_image"]);  
           $query = "  
           INSERT INTO classified_ads  
           (web_url, ad_address, ad_image)   
           VALUES ('".$first_name."', '".$last_name."', '".$image."')";  
           $object->execute_query($query);  
           echo 'Data Inserted';       
      }  
      if($_POST["action"] == "Fetch Single Data")  
      {  
           $output = '';  
           $query = "SELECT * FROM classified_ads WHERE id = '".$_POST["user_id"]."'";  
           $result = $object->execute_query($query);  
           while($row = mysqli_fetch_array($result))  
           {  
                $output["first_name"] = $row['web_url'];  
                $output["last_name"] = $row['ad_address'];  
                $output["image"] = '<img src="classifiedimage/'.$row['ad_image'].'" class="img-thumbnail" width="150" height="150" />';  
                $output["user_image"] = $row['ad_image'];  
           }  
           echo json_encode($output);  
      }  
      if($_POST["action"] == "Edit")  
      {  
           $image = '';  
           if($_FILES["user_image"]["name"] != '')  
           {  
                $image = $object->upload_file($_FILES["user_image"]);  
				unlink('classifiedimage/'.$_POST["hidden_user_image"]);			
           }  
           else  
           {  
                $image = $_POST["hidden_user_image"];  
           }  
           $first_name = mysqli_real_escape_string($object->connect, $_POST["first_name"]);  
           $last_name = mysqli_real_escape_string($object->connect, $_POST["last_name"]);  
           $query = "UPDATE classified_ads SET web_url = '".$first_name."', ad_address = '".$last_name."', ad_image = '".$image."' WHERE id = '".$_POST["user_id"]."'";  
           $object->execute_query($query);  
           echo 'Data Updated';  
      } 

if($_POST["action"] == "delete")
 {
$query = "SELECT * FROM classified_ads WHERE id = '".$_POST["user_id"]."'";  
           $result = $object->execute_query($query);  
           $row = mysqli_fetch_assoc($result);
				unlink('classifiedimage/'.$row["ad_image"]);				   
	 
$query1 = "DELETE FROM classified_ads WHERE id = '".$_POST["user_id"]."'";
  if($result1 = $object->execute_query($query1))
  {
   echo 'Record successful Deleted from Database';
  }
 }



	  
 }  
 ?>