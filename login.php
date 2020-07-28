<!DOCTYPE html>  
 <html lang="en">  
 <head>  
   <meta charset="UTF-8">  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">  
   <title>Document</title>  
 </head>  
 <body>  
 <h2>Login/Logout in session Management</h2>  
   <form action=""method="post">  
   Username: <input type="text" name="un"><br><br>  
   Password: <input type="text" name="pw"><br><br>  
   <input type="submit" name="b1" Value="LOGIN">  
   </form>  
 </body>  
 </html>  
 <?php  
 session_start();  
 include 'connection.php';  
 if(isset($_POST['b1']))  
 {  
 $uname= $_POST['un'];  
 $pwd= $_POST['pw'];  
 $query = "select * from secetable where username='$uname' && password='$pwd'";  
 $data = mysqli_query($conn, $query);  
 $totRec = mysqli_num_rows($data);  
 if($totRec==1)  
 {  
   // echo "Login Ok";  
   $_SESSION['user_name'] = $uname;  
   $_SESSION['last_login'] = time();  
   header('location:home.php');  
 }else  
 {  
   echo "Login Failed";  
 }  
 }  
 ?> 
