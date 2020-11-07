<?php

require 'network/config.php'

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="network/style.css">
    <title>Signup</title>
  </head>
  <body>
 <?php require 'network/nav.php' ?>
             
      <?php
           if($showAlert){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>Success!</strong> Your account is now created.
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                         </button></div>';
                }
           if($showError){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                       <strong>Error ! </strong> '.$showError.'
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                         </button></div>';
                }
       ?> 
             
             
 <div class="container my-4" >
     <h1 class="text-center">Signup to our website</h1>
          
<form action="/loginsystem/signup.php" method="post">
  <div class="username">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" maxlength="15" id="username" name="username" aria-describedby="emailHelp" required>
  </div>


  <div class="form-group ">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" required>
      <small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long.
    </small>
  </div>


  <div class="form-group ">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" id="cpassword" required>
     <small id="emailHelp" class="form-text text-muted">Make sure to enter same password.</small>
  </div>


  <button type="submit" class="btn btn-primary ">Signup</button>
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


    <script src="network/index.js"></script>
  </body>
</html>