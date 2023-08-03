<?php
  include 'connect.php';
  if(isset($_GET['deleteid'])){
   $id=$_GET['deleteid'];

   $sql="delete from crudoperation where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:team.php');
   }else{
    die(mysqli_error($con));
}
  }
?>