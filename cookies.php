<!DOCTYPE html>  
 <html lang="en">  
 <head>  
   <meta charset="UTF-8">  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">  
   <title>Document</title>  
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
 </head>  
 <body>  
 <div class="container">  
 <div class="card border-danger">  
   <div class="card-body text-center" id="msg">  
   </div>  
 </div>  
 <br>  
 <script type="text/javascript">  
   function cookiesEnabled()  
   {  
     var cookiesEnabled = (navigator.cookieEnabled) ? true : false;  
     return cookiesEnabled;  
   }  
   if (!cookiesEnabled())  
   {  
     document.getElementById("msg").innerHTML = "Kindly Enable your Cookies First";  
   }  
 </script>  
 <h2>Cookies in PHP</h2><br>  
   <form action=""method="post">  
   Username: <input type="text" name="un" value="<?php if(isset($_COOKIE['member_login'])){ echo $_COOKIE['member_login']; } ?>"><br><br>  
   Password: <input type="text" name="pw" value="<?php if(isset($_COOKIE['member_login'])){ echo $_COOKIE['member_pwd']; } ?>"><br><br>  
   Remember Me: <input type="checkbox" name="check"<?php if(isset($_COOKIE['member_login'])) { ?> checked <?php } ?> ><br><br>  
   <input type="submit" name="b1" Value="LOGIN">  
   </form>  
   </div>  
 </body>  
 </html>  
 <?php  
 session_start();  
 include 'connection.php';  
 if(isset($_POST['b1']))  
 {  
 $uname= $_POST['un'];    
 $pwd= $_POST['pw'];  
 $rem= $_POST['check'];  
 $query = "select * from secetable where username='$uname' && password='$pwd'";  
 $data = mysqli_query($conn, $query);  
 $totRec = mysqli_num_rows($data);  
 if($totRec==1)  
 {  
   if(!empty($_POST['check']))  
   {  
   setcookie('member_login',$uname,time()+60*60*1);    
   setcookie('member_pwd',$pwd,time()+60*60*1);    
   }  
   else  
   {  
     if(isset($_COOKIE['member_login']))  
     {  
       setcookie('member_login','');   
     }  
     if(isset($_COOKIE['member_pwd']))  
     {  
       setcookie('member_pwd','');   
     }  
   }  
   $_SESSION['user_name'] = $uname;  
   $_SESSION['last_login'] = time();  
   header('location:home.php');  
 }else  
 {   
   echo "Login Failed";  
 }  
 }  
 ?>
<script type="text/javascript">  
   function cookiesEnabled()  
   {  
     var cookiesEnabled = (navigator.cookieEnabled) ? true : false;  
     return cookiesEnabled;  
   }  
   if (!cookiesEnabled())  
   {  
     document.getElementById("msg").innerHTML = "Kindly Enable your Cookies First";  
   }  
 </script>
