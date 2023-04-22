<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Document</title>
</head>
<body class="container">
<!-- <div class="search">
    <input type="text"  placeholder="Search here" name="uname" required>
   <button class="btn btn-dis-search ">Search</button>
    </div> -->
   <div class="center "> 
    <?php 
    if($_SESSION['uname'] == 'admin')
    { 
    ?>
    <a class="btn btn-dis" href="insert.php">Add Record</a>
    <a class="btn btn-dis" href="about.php">About Us</a>
    <a class="btn btn-dis" href="chngpass.php">Change_Pass</a>
    <a class="btn btn-dis" href="contact.php">Contact Us</a>
    <a class="btn btn-dis" href="logout.php">Log out</a>
    <?php
}
?>
   <?php 
    if($_SESSION['uname'] == 'superadmin'){ ?>
    <a class="btn btn-dis" href="insert.php">Add Record</a>
    <a class="btn btn-dis" href="about.php">About Us</a>
    <a class="btn btn-dis" href="contact.php">Contact Us</a>
    <a class="btn btn-dis" href="chngpass.php">Change_Pass</a>
    <a class="btn btn-dis" href="showMsg.php">Massages</a>
   <a class="btn btn-dis" href="logout.php">Log out</a>
   <?php } ?>
   
</div>
</body>
</html>