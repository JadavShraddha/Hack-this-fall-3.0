<?php
require 'config.php';
// var_dump($_SESSION["id"]);
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1><a href="index.php" id="welcome">Welcome <?php echo $row["name"]; ?></a></h1>
    <a href="logout.php" id="home">Home</a>
  </body>
</html>