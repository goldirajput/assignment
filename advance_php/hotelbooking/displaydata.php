<?php 
include 'connection.php';
$q="select * from cust_details";
$res=mysqli_query($c,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Display all data</title>
</head>
<body>
    <div class="container">
        <h3 class="head">show all data</h3>
        <p><a class="btn btn-primary" href="insert.php">ADD</a></p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">NUMBER</th>
      <th scope="col">DATE</th>
      <th scope="col">BOOKING TYPE</th>
      <th scope="col">BOOKING SLOT</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row=mysqli_fetch_object($res)){ ?>
    <tr>
      <td><?php echo $row->cust_id; ?></td>
      <td><?php echo $row->cust_name; ?></td>
      <td><?php echo $row->cust_email; ?></td>
      <td><?php echo $row->cust_num; ?></td>
      <td><?php echo $row->cust_date; ?></td>
      <td><?php echo $row->cust_booking_type; ?></td>
      <td><?php echo $row->cust_slot; ?></td>
      <td><a class="btn btn-primary" href="update.php?id=<?php echo $row->stud_id; ?>">EDIT</a></td>
      <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row->stud_id; ?>">DELETE</a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</body>
</html>
