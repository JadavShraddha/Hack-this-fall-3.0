<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: login_index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  
  if(mysqli_num_rows($result) > 0){

    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: login_index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login_styles.css">
    <title>Login</title>
  </head>
  <body>
    <h2>Login</h2>
    <form class="container" action="" method="post" autocomplete="off">
      <div class="form-group col-xs-6">
              <label for="usernameemail">Username or Email : </label>
              <input type="text" name="usernameemail" class="form-control" id = "usernameemail" required value="">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
              <label for="password">Password : </label>
              <input type="password" class="form-control" name="password" id = "password" required value=""> <br>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Login</button>
      <!-- <a href="registration.php">Registration</a> -->
      <button type="submit" class="btn btn-primary" name="submit" ><a href="registration.php">Registration</a></button>
      
    </form>
  </body>
</html>