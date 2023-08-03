<?php
  $con=mysqli_connect('localhost','root','','background');

  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>