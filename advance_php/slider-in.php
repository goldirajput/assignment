<?php
include("conn.php");
if(isset($_REQUEST['btnsubmit'])){

  $q="
  insert into slider set
  slider_name='".$_REQUEST['txtname']."',
  slider_img='".$_FILES['stud_img']['name']."'
  ";
  mysqli_query($c,$q);
  move_uploaded_file($_FILES['stud_img']['tmp_name'],"uploadimg/".$_FILES['stud_img']['name']);
  header("location:slider.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="style.css" rel="stylesheet" type="text/css"/> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<form method="post" enctype="multipart/form-data">
  <div class="df-main">
  <div class="form-group ">
    <label for="Name">Name</label>
    <input type="text" class="form-control"  placeholder="Enter Name" name="txtname" required>    
  </div>
    <div class="form-group">
    <label for="Image">Upload image</label>
    <input type="file" accept="image/*" class="form-control" placeholder="select your Image" name="stud_img" required />    
  </div>
  </div>
  
  <button type="submit" class="btn btn-primary"name="btnsubmit">Submit</button>
  </div>
</form>
</body>
</html>