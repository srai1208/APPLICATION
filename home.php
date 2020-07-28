<?php  
 session_start();  
 include 'connection.php';  
 $username = $_SESSION['user_name'];  
 if(isset($_SESSION['user_name']))  
 {  
   if(time()-$_SESSION['last_login']>15)  
   {  
     header('location:logout.php');  
   }  
   else  
   {  
     $_SESSION['last_login'] = time();  
   }  
 }  
 else  
 {  
   header('location:login.php');  
 }  
 $query ="select * from secetable where username='$username '";  
 $data = mysqli_query($conn, $query);  
 $result = mysqli_fetch_assoc($data);  
 echo "Welcome ".$result['name']."<br>";  
 echo "<img src='$result[photo]' width='100'>";  
 ?>  
 <?php  
 session_start();  
 include 'connection.php';  
 $username = $_SESSION['user_name'];  
 if(isset($_SESSION['user_name']))  
 {  
   if(time()-$_SESSION['last_login']>15)  
   {  
     header('location:logout.php');  
   }  
   else  
   {  
     $_SESSION['last_login'] = time();  
   }  
 }  
 else  
 {  
   header('location:login.php');  
 }  
 $query ="select * from secetable where username='$username '";  
 $data = mysqli_query($conn, $query);  
 $result = mysqli_fetch_assoc($data);  
 echo "Welcome ".$result['name']."<br>";  
 echo "<img src='$result[photo]' width='100'>";   

  ?>  
  <p align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.    
  Alias reiciendis blanditiis quos pariatur odio adipisci praesentium deleniti    
  fugiat esse accusamus. Ratione aperiam hic nobis molestiae obcaecati dolorum    
  laudantium unde impedit provident reprehenderit quas nostrum dolores quisquam    
  ipsam, nulla quod ipsa autem nam eveniet quidem mollitia. Dolorem, dolorum.    
  Pariatur cupiditate molestias reiciendis veniam, consequuntur, mollitia, esse    
  accusamus aperiam eos velit totam quis? Eaque suscipit ipsa ratione modi earum,    
  odit ducimus. Repudiandae ducimus aliquid, aut officiis quis perferendis, eveniet    
  vero, sint maiores reprehenderit accusamus ipsam tenetur. Porro dolore culpa    
  necessitatibus tenetur inventore minus ipsum error amet similique architecto    
  suscipit ullam fuga, aliquid quo voluptatibus voluptates veritatis commodi nobis    
  mollitia deserunt. Eos aut accusantium neque porro optio ab quasi illo expedita    
  sunt, esse quia incidunt minima provident quis consectetur, ipsa sit corporis    
  dolores, illum unde. Error, cumque. Amet vitae sunt suscipit magni a vel saepe    
  odio dolor eaque illo doloremque, sint sequi doloribus, modi ab officiis sit!    
  Soluta tempora voluptatum facere tempore harum. Rem nulla, officiis numquam    
  assumenda id dolorem nobis pariatur in aut reprehenderit autem commodi rerum eaque    
  veritatis repellendus quos distinctio sed aspernatur tempora asperiores, quam corrupti    
  deleniti! Quos labore reprehenderit dolor ullam, sint placeat veniam error officiis in    
  ipsam perspiciatis?    
  </p>    
  <a href="logout.php">Logout</a> 
