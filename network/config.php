
<?php

 $showAlert=false;
   $showError = false;
if($_SERVER["REQUEST_METHOD"]== "POST" ){
    
    include 'network/connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $exists=false;

    //check whether user exists or not
    $existsSql="SELECT * FROM `users` WHERE username='$username'";
     $res = mysqli_query($conn, $existsSql);
      $numExistsRows= mysqli_num_rows($res);

     if ($numExistsRows > 0) {
        //$exists = true;
          $showError = "Username already exists...";
     }
     else{
        //  $exists = false;
    

    if(($password==$cpassword) ){
           $insertdata = "INSERT INTO users (username, password, date) 
           VALUES ('$username','$password',current_timestamp())";

           $res = mysqli_query($conn, $insertdata);

           if($res){
               $showAlert = true;
               }
       }
    else{
          $showError = "Password do not match...";
        }


  }

}


?>