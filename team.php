<?php
  include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylee.css">
    <title>Document</title>
</head>
<body>
<section>
   <div class="row">
    <h1>Our team</h1>
</div>
<div class="row">
<div>
 <button class="btn btn-primary my-5"><a href="website.php" class="text-light">Add User</a></button>
</div>
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
   
echo'   <div class="column">
        <button type="submit" class="btn btn-primary" name="submit"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
        <button type="submit" class="btn btn-danger" name="submit"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                <div class="card">
                    <div class="img-container">
                    <img src="'.$image.'">
                    </div>
                <h3>'.$name.'</h3>
                <p> Founder FCA,B.Com(H)<br>'.$email.'</p><br>
                <div class="icons">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
                </div>
                </div>';
}
}
?>
</section>
    <!-- <section>
        <div class="row">
            <h1>Our team</h1>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="image/Aditya-Goel.webp" alt=""/>
                    </div>
                <h3>Aditya Goel</h3>
                <p> Founder FCA,B.Com(H)</p><br>
                <div class="icons">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
</div>
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="image/manjeet-sharma.webp" alt=""/>
                    </div>
                <h3>Manjeet Sharma</h3>
                <p>Consultant MBA in Finance</p><br>
                <div class="icons">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="image/Bharat_Gulati.webp" alt=""/>
                    </div>
                <h3>Bharat Gulati</h3>
                <p>Consultant Company Secretary</p><br>
                <div class="icons">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </section> -->
</body>
</html>