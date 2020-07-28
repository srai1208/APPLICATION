//delete.php  
  <?php   
  include_once 'connection.php';   
  $roll = $_GET['rn'];   
  $query = "delete from secetable where rollno='$roll '";   
  $data = mysqli_query($conn, $query);   
  if($data)   
  {   
   echo "<script>alert('Record Deleted')</script>";   
   ?>   
   <meta http-equiv="refresh" content="0; url=http://localhost/phpCode/02-Classes/Section-3E/05-Database/read.php">   
   <?php   
  }   
  else   
  {   
   echo " Delete Process Fail";   
  }   
  ?> 