<?php 
include 'conn.php';
$q = "select * from slider";
$res=mysqli_query($c,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script>
      $(function(){
    $('.bxslider').bxSlider({
      mode: 'fade',
      captions: true,
      slideWidth: 600
    });
  });
    </script>
</head>
<body>
<div class="bxslider">
    <?php 
    while($row=mysqli_fetch_object($res)){
    ?>
  <div><img src="uploadimg/<?php echo $row->slider_img; ?>" /></div>
  <?php } ?>
</div>
</body>
</html>