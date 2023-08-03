<?php
   include 'connect.php';
   if(isset($_POST['submit']))
   {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "crudoperation/". $filename;
    move_uploaded_file($tempname, $folder);

    $name=$_POST['name'];
    $image=$_POST['image'];
    $email=$_POST['email'];
    // $mobile=$_POST['mobile'];
    // $password=$_POST['password'];

    $sql="insert into crudoperation  (name,image,email) 
        values('$name','$image','$email')";
    $result=mysqli_query($con,$sql);
    if($result){
      header('location:team.php');
   }
   else{
    die(mysqli_error($con));
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
    <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="enter your name" autocomplete="off" required> 
  </div>
  <div class="mb-3">
    <label>Image</label>
    <input type="file" class="form-control" name="image" value="filename" placeholder="enter your file" autocomplete="off" required> 
  </div>
  <div class="mb-3">
    <label>Email Address</label>
    <input type="email" class="form-control" name="email" placeholder="enter your Email" autocomplete="off" required> 
  </div>
  <!-- <div class="">
    <label>Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="enter your mobile number" autocomplete="off" required>
  </div>
  <div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" name="password" placeholder="enter your Password" autocomplete="off" required>
  </div> -->
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>