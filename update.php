<?php
   include 'connect.php';
   
   if(isset($_GET['updateid'])){
   $id=$_GET['updateid'];
   $sql="Select * from crudoperation where id=$id";
   $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
      $image=$row['image'];
      $name=$row['name'];
      $email=$row['email'];
      // $mobile=$row['mobile'];
      // $password=$row['password'];

   if(isset($_POST['submit'])){
      $image=$_POST['image'];
      $name=$_POST['name'];
      $email=$_POST['email'];
      // $mobile=$_POST['mobile'];
      // $password=$_POST['password'];

    $sql="update crudoperation set id='$id',image='$image',name='$name',email='$email'
    where id='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "edit successfully";
      header('location:team.php');
   }else{
    die(mysqli_error($con));
}
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
    <input type="text" class="form-control" name="name" placeholder="enter your name" autocomplete="off" value=<?php echo $name;?> > 
  </div>
  <div class="mb-3">
    <label>Image</label>
    <input type="file" class="form-control" name="image" value="filename" placeholder="enter your file" autocomplete="off" value=<?php echo $image;?> > 
  </div>
  <div class="mb-3">
    <label>Email Address</label>
    <input type="email" class="form-control" name="email" placeholder="enter your Email" autocomplete="off" value=<?php echo $email;?>> 
  </div>
  <!-- <div class="mb-3">
    <label>Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="enter your mobile number" autocomplete="off" value=<?php echo $mobile;?>>
  </div>
  <div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" name="password" placeholder="enter your Password" autocomplete="off" value=<?php echo $password;?>>
  </div> -->
  
  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>
    </div>
  </body>
</html>