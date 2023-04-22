<?php 
include("conn.php");

$q1="select * from slider  where slider_id=".$_GET['id'];
$res=mysqli_query($c,$q1);
$row=mysqli_fetch_object($res);
if(isset($_REQUEST['btnsubmit']))
{

    if($_FILES['stud_img']['name']=="")
    {
      $q="
      update slider set
      slider_name='".$_REQUEST['txtname']."'
        where slider_id=".$_GET['id'];
    }
    else
    {
     echo $q="
      update slider set
      slider_name='".$_REQUEST['txtname']."',
      slider_img='".$_FILES['stud_img']['name']."'
      where slider_id=".$_GET['id'];
      move_uploaded_file($_FILES['stud_img']['tmp_name'],"uploadimg/".$_FILES['stud_img']['name']);
      
    }
    mysqli_query($c,$q);     
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" value="<?php echo $row->slider_name; ?>"  placeholder="Enter Name" name="txtname" required>    
  </div>
  <div class="form-group">
    <label for="Image">Image</label><img src="uploadimg/<?php echo $row->slider_img;  ?>" height="55" width="55">
    <input type="file" class="form-control" accept="image/*"placeholder="Select Image" name="stud_img">
  </div>

  <button type="submit" class="btn btn-primary"name="btnsubmit">Update</button>
</form>
</body>
</html>
