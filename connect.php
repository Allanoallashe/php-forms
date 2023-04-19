<?php

  $con = mysqli_connect('localhost', 'root', '', 'logs' );
  if($con){
    echo("Connection Successful");
  }else{
    die("Connection Failed!!!");
  }


?>