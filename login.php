<?php
   $login=false;
   $showError = false;
if($_SERVER["REQUEST_METHOD"]== "POST" ){
    
    include 'network/connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
   

    
           $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

           $res = mysqli_query($conn, $sql);
            
            $num= mysqli_num_rows($res);

           if($num==1){
               $login = true;
               session_start();
               $_SESSION['loggedin'] = true;
               $_SESSION['username'] = $username;
            //    $_SESSION['password'] = $password;

               header("Location: welcome.php");


           } else{
          $showError = "Invalid credentials ";
        }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
 <?php require 'network/nav.php' ?>
             
      <?php
           if($login){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>Success!</strong> You are logged in.
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                         </button></div>';
                }
           if($showError){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                       <strong>Error!</strong> '.$showError.'
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                         </button></div>';
                }
       ?> 
             
             
 <div class="container my-4" >
     <h1 class="text-center">Login here</h1>
          
<form action="/loginsystem/login.php" method="post">
  <div class="username">
    <label for="username">Username</label>
    <input type="text" placeholder="username" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>


  <div class="form-group ">
    <label for="password">Password</label>
    <input type="password"  placeholder="password"  class="form-control" name="password" id="password">
      <small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long.
    </small>
  </div>


 

  <button type="submit" class="btn btn-primary ">Login</button>
</form>



 </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>