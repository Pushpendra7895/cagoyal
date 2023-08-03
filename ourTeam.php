<?php
  include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Our Team</title>
</head>
<body>
    <div class="container">
     <button class="btn btn-primary my-5"><a href="website.php" class="text-light">Add User</a></button>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no.</th>
      <th scope="col">image</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th colspan="2" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

     $sql='select * from crudoperation';
     $result=mysqli_query($con,$sql);
     if($result)
     {
     while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $image=$row['image'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];

  echo '<tr>
      <th scope="row">'.$id.'</th>
      <td><img src="'.$image.'" height="70px" width="70px"></td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
      <button type="submit" class="btn btn-primary" name="submit"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
      <button type="submit" class="btn btn-danger" name="submit"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
      </td>
      </tr>';
     }
    
     }
  ?>
  </tbody>
</table>
    </div>
</body>
</html>