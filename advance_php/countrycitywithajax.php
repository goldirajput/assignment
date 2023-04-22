<?php 
include'header.php';
// session_start();
include ("./admin4466/conn.php");
// include ("./sessionchek-cust.php");                                                      
// $cust_name=$cust_email=$cust_phone=$cust_pass=$confm_pass=$cust_add="";
$msg="";

if(isset($_REQUEST['btn-submit'])){
  $email=$_REQUEST['cust_email'];
  $_SESSION['cust_email'] = $_REQUEST['cust_email'];
  $_SESSION['cust_pass'] = $_REQUEST['cust_pass'];
  $_SESSION['cust_name'] = $_REQUEST['cust_name'];
  
  $state="select * from cust_state";
  $city="select * from cust_city";
  $ress=mysqli_query($c,$state);
  $resss=mysqli_query($c,$city);
  $my="select * from cust_regi where cust_email='$email'";
  $res=mysqli_query($c,$my);
  $n=mysqli_num_rows($res);
  echo  $_SESSION['cname'];
  if($n > 0 ){
    $msg= "ALLREADY EXISTS EMAIL PLEASE TRY ONTHER";
  }
  else{
  
  if($_REQUEST['cust_pass'] == $_REQUEST['confm_pass'] ){
    
    $q="insert into cust_regi set
    cust_name='".$_REQUEST['cust_name']."',
    cust_email='".$_REQUEST['cust_email']."',
    cust_phone='".$_REQUEST['cust_phone']."',
    cust_pass='".$_REQUEST['cust_pass']."',
    cust_cpass='".$_REQUEST['confm_pass']."',
    cust_state='".$_REQUEST['cust_state']."',
    cust_city='".$_REQUEST['cust_city']."'
    ";
    mysqli_query($c,$q);
    header("location:index.php");
  }
  else{
    
    $msg="Please Match The Password First....!!!";
 }
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <link rel="stylesheet" href="./assets/style.css">
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  
  <title>Register</title>
</head>
<body>
  <!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <!-- <span class="pull-right"><a href="#">Home</a> / Register</span> -->
    <h2>Register</h2>
</div>
</div>
<!-- banner -->
<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
  <h4 class="msg"><b style="color:red"><?php echo $msg; ?></b></b></h4>
<form method="post" role="form">
  
    <input type="text" class="form-control" placeholder="Full Name" name="cust_name" required>
     <input type="email" class="form-control" placeholder="Enter Email" name="cust_email" required>
     <input type="number" class="form-control" placeholder="Enter Phone" name="cust_phone" required>
     <input type="password" class="form-control" placeholder="Password" name="cust_pass" required>
     <input type="password" class="form-control" placeholder="Confirm Password" name="confm_pass" required>
     <select value="" id="state-data" name="cust_state" required>
              <option>SELECT STATE</option>
     </select> <br/>
     <select value=""  id="city-data" name="cust_city" required>
     </select>

     <!-- <textarea rows="6" class="form-control" placeholder="Address" name="cust_add"></textarea> -->
      <button type="submit" name="btn-submit" class="btn btn-success">Register</button>
          
</form>                
        </div>
  
</div>
</div>
</div>
<script>
  $(document).ready(function(){
      function loadData(type,category_id){
        $.ajax({
          url:"backend.php",
          type:"POST",
          data: {type : type, id : category_id},
          success:function(data){
            
            if(type == "citydata"){

              $("#city-data").html(data);
            }else{

              $("#state-data").append(data);
            }
          
            console.log(data); 
            console.log(type); 
            // console.log(status); 
          }
        })
      }
      loadData();
      $("#state-data").on("change",function(){
        var state = $("#state-data").val();
        console.log(state);
        loadData("citydata",state);
      })
    });
</script>
</body>

</html>

<?php include'footer.php';?>