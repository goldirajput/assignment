<?php
include("conn.php");
$qq="delete from slider where slider_id=".$_GET['id'];
mysqli_query($c,$qq);
    header("location:slider.php");
?>