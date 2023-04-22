<?php 
session_start();
include ("ucheckforsession.php");
include("conn.php");
include("header.php");
include("menu.php");
$q="select * from stud_info";
$res=mysqli_query($c,$q);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <link href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <!-- <h1>Welcome to <?php echo $_SESSION['uname'];?> </h1> -->
    
<table id="myTable" class="table center2 table-striped">
   <thead>
   <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Course</th>
        <th>IMAGE</th>
        <th>City</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
   </thead>
   <tbody>
    <?php 
    $n=1;
    while($row=mysqli_fetch_object($res))
    {
    ?>
    
    <tr>
        <td><?php echo $n; ?></td>
        <td><?php echo $row->stud_name;  ?></td>
        <td><?php echo $row->stud_email;  ?></td>
        <td><?php echo $row->stud_num;  ?></td>
        <td><?php echo $row->stud_course;  ?></td>
        <td><img src="uploadimg/<?php echo $row->stud_img; ?>" height="45" width="45"/></td>
        <td><?php echo $row->stud_city; ?></td>
        <td><a href="update.php?id=<?php echo $row->stud_id;?>" class="btn btn-diss">EDIT</a></td>
        <td><a href="delete.php?id=<?php echo $row->stud_id;?>" onclick="return confirm('Are you sure want to delete???')" class="btn btn-diss-del">DELETE</a></td>
    </tr>
    <?php 
    $n++;
}
?>
</tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>
