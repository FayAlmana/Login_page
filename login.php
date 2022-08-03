<!DOCTYPE html>
<html>

 <head>

    <title>Login</title>

    <link rel="stylesheet" href="main.css">

 </head>

 <body>
    <form method="post" action="login.php">

      <h1 class="login">Login</h1>

      <div class="textBox">
         <input type="text" placeholder="username" name="username">
      </div>

      <div class="textBox">
         <input type="password" placeholder="password" name="password">
      </div>

      <button type="submit" class="LoginButton" name="login_but" ><b>Login</b></button>

      <div class="signUp">
        <h4>Don't have an account?</h4>
        <a href="#">Sign up</a>
      </div>

   </form>
 </body>

</html>

<?php

$conn = mysqli_connect("localhost", "root", "");

if(isset($_POST['login_but'])){

   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "SELECT * FROM websiteloginpage.logindetails WHERE username = '$username'";
   $result = mysqli_query($conn,$sql);
 
   while($row = mysqli_fetch_assoc($result)){
      
      $resultPassword = $row['password'];

      if($password == $resultPassword){
        
         header('Location:index.html'); }
      
      else{
        
         echo "<script> alert('Login unsuccessful'); </script>" ; }
      
   } }
?>