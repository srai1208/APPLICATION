//createFirstRecord.php
<?php  
 include_once 'connection.php';  
 $query = "insert into secetable values(105,'Mohak','3E')";  
 $data = mysqli_query($conn,$query);  
 if($data){  
 echo "Record Inserted";  
 }  
 else{  
 echo "Record not Inserted";  
 }  
 ?> 