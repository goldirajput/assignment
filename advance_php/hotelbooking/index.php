<!-- <?php 
include 'connection.php';
if(isset($_REQUEST['btn-submit'])){

 $q="insert into cust_details set
    cust_name='".$_REQUEST['name']."',
    cust_email='".$_REQUEST['email']."',
    cust_num='".$_REQUEST['num']."',
    cust_date='".$_REQUEST['date']."',
    cust_booking_type='".$_REQUEST['type']."',
    cust_slot='".$_REQUEST['slot']."'
  ";
  mysqli_query($c,$q);
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Booking</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h3 class="head">BOOK YOUR HOTEL</h3>
        <form  method="post">
  <div class="main-form">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your phone Number</label>
    <input type="text" class="form-control" name="num" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Select Your Date</label>
    <input type="date" name="date" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Select Your BookingType</label>
    <select name="type" id="type">
        <option>Chooise Your Booking Type</option>
    </select>
  </div>
  <div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Select Your Slote</label>
    <select name="slot" id="slot">
       
    </select>
  </div>
  <button type="submit" name="btn-submit"class="btn btn-primary">Submit</button>
  </div>
</form>
<table>
    <tr>
        <td id="my-table"></td>
    </tr>
</table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        function mydata(){
        $.ajax({
             url:'backenddis.php',
             type:'POST',
             success:function(data){
                 $('#my-table').html(data);
                //  console.log(data);
             }  
            })
    }
mydata();
      function loadData(type,category_id){
        $.ajax({
          url:"backend.php",
          type:"POST",
          data: {type : type, id : category_id},
          success:function(data){
            
            if(type == "slotdata"){
              $("#slot").html(data);
            }else{

              $("#type").append(data);
            }
          
            console.log(data); 
            console.log(type); 
            // console.log(status); 
          }
        })
      }
      loadData();
      $("#type").on("change",function(){
        var bookingType = $("#type").val();
        console.log(bookingType);
        loadData("slotdata",bookingType);
      })
    });
    </script>
</body>
</html>