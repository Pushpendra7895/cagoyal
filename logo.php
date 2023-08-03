<?php
include('conn1.php');
error_reporting(0);
 
$msg = "";
 
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $filename1 = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "images/" . $filename;
    $folder="images/".$filename1;
 echo "<img src='$folder'";
//  $sql="insert into images (filename) values ('$filename')";

//   if (move_uploaded_file($tempname, $folder)) {
//         echo "<h3>  Image uploaded successfully!</h3>";
//     } else {
//         echo "<h3>  Failed to upload image!</h3>";
//     }
}
?>
 
<!DOCTYPE html>
<html>
 
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css" />
</head>
 
<body>
    <div id="content">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="filename" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
    <!-- <div id="display-image">
        <?php
        $sql = "select * from images";
        $result = mysqli_query($con, $sql);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="./cagoyal/images/<?php echo $data['filename']; ?>">
 
        <?php
        }
        ?> -->
    </div>
</body>
 
</html>
