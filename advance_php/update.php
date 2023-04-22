<?php
session_start();
include ("ucheckforsession.php");
include("conn.php");
$qq="select * from stud_info where stud_id=".$_GET['id'];
$res=mysqli_query($c,$qq);
$row=mysqli_fetch_object($res);
if(isset($_REQUEST['btnsubmit'])){
  if($_FILES['stud_img']['name']==""){
     $q="
    update stud_info set
    stud_name='".$_REQUEST['txtname']."',
    stud_email='".$_REQUEST['txtemail']."',
    stud_num='".$_REQUEST['txtnum']."',
    stud_course='".$_REQUEST['txtopt']."',
    stud_city='".$_REQUEST['txtcity']."'
    where stud_id=".$_GET['id'];
  }
  else{
     $q="
    update stud_info set
    stud_name='".$_REQUEST['txtname']."',
    stud_email='".$_REQUEST['txtemail']."',
    stud_num='".$_REQUEST['txtnum']."',
    stud_course='".$_REQUEST['txtopt']."',
    stud_city='".$_REQUEST['txtcity']."',
    stud_img='".$_FILES['stud_img']['name']."'
    where stud_id=".$_GET['id'];
    move_uploaded_file($_FILES['stud_img']['tmp_name'],"uploadimg/".$_FILES['stud_img']['name']);
  }
   mysqli_query($c,$q);
    header("location:dis.php");
  }
  $qn="select * from course_info";
$res2=mysqli_query($c,$qn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <!-- <link href="stleup.css" rel="stylesheet" type="text/css"/> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<form method="post">
<div class="df-main-update">
<div class="df-update">
    <label for="Name">Name:</label>
    <input type="text" class="form-control"  value="<?php echo $row->stud_name; ?>"  name="txtname" required>    
</div>
  <div class="df-update">
    <label for="Email">Email:</label>
    <input type="email" class="form-control" value="<?php echo $row->stud_email; ?>"  name="txtemail"required>    
  </div>
  <div class="df-update">
    <label for="Address">MobileNo:</label>
    <input type="number" class="form-control" value="<?php echo $row->stud_num; ?>"  name="txtnum"required/> 
  </div>
  <div class="form-group">
      <label for="city">Select Your Course</label>
      <select name='txtopt'>
      <option>Select your course</option>
        <?php 
        while($row2=mysqli_fetch_object($res2))
        {
          ?>
            <option><?php echo $row2->course_name; ?></option>
           
       <?php
          }
        ?>
      </select>
    </div> 
<div class="df-update">
  
<label for="city">city:</label>
    <input type="text" class="form-control"  value="<?php echo $row->stud_city; ?>"  name="txtcity"required/>    
</div>
  
  <div class="form-group">
    <label for="image">Image:</label><img src="uploadimg/<?php echo $row->stud_img; ?>" height="45" width="45"/>
    <input type="file" class="form-control" accept="image/*" name="stud_img">    
  </div>  
  <button type="submit" class="btn btn-diss"name="btnsubmit">Update</button>
  <button class="btn btn-diss"name="back">back</button>
</div>
</form>
</body>
</html>