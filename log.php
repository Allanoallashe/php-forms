<?php

  session_start();
  include("connect.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    // something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
      // read from database
      $user_id = random_num(25);
      $query = "select* from user where user_name = '$user_name' limit 1";

      $result = mysqli_query($con,$query);
      if($result){
        if($result && mysqli_num_rows($result) > 0){
          $user_data = mysqli_fetch_assoc($result);
          if($user_data['password'] === $password){
            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location: index.php");
            die;
          }
        }
      }
      
      echo "invalid information!";
    }else{
      echo "invalid information!";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@AllasheCodingForum/LoginPage.com</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="box">
      <div class="title">Sign In</div>
    <form action="#" method="post">
      <input id="text" type="text" name="user_name"><br><br>
      <input id="text" type="password" name="password"><br><br>
      <input id="button" type="submit" value="Sign In"><br><br>
      <a href="sign.php">Click to Sign Up</a><br><br>
    </form>
  </div>
</body>
</html>