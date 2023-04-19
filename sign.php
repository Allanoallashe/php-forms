<?php

  session_start();
  include("connect.php");
  include("functions.php");

  

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
      <div class="title">Sign Up</div>
    <form action="#" method="post">
      <input id="text" type="text" name="user_name"><br><br>
      <input id="text" type="password" name="password"><br><br>
      <input id="button" type="submit" value="Sign Up"><br><br>
      <a href="log.php">Click to Sign In</a><br><br>
    </form>
  </div>
</body>
</html>