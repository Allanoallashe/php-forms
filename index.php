<?php
 
 session_start();
 $_SESSION;
 include("connect.php");
  include("functions.php");
  $user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@AllasheCodingForum.com</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="home">
  <a href="signout.php">Sign Out</a>
 <h1>This is the index Page</h1>  
 <br>
 Hello, Username.
 </div>
</body>
</html>