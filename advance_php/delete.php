<?php
include("conn.php");
$qq="delete from stud_info where stud_id=".$_GET['cust_id'];
mysqli_query($c,$qq);
    header("location:dis.php");
?>