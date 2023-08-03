<?php
  $con=mysqli_connect('localhost','root','','edit_content');

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
?>