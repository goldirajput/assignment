<?php
include("conn.php");
if(isset($_REQUEST['btnsubmit'])){
 $q="insert into contact set 
   contact_num='".$_REQUEST['textphnnum']."',
   contact_msg='".$_REQUEST['textmsg']."'
";
mysqli_query($c,$q);
header("locatio:dis.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
<form method="post"> 
    <div class="msg-main df-main" >
        <div class=" df-first df">
            <span>Please Enter your phone number</span>
            <input class="phn-detail" placeholder="your phone number" type="text" name="textphnnum"/>
        </div>
        <div class="msg-detail df">
            <span>Please Enter your msg</span>
           <textarea name="textmsg" id="" cols="30" rows="6"></textarea>
        </div>
        <div class="df">
            <button name="btnsubmit" class="btn btn-dis">Send</button>
        </div>
    </div>
    <from/>
</body>
</html>