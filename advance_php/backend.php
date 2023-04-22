<?php
include ("conn.php");
$q="select * from stud_info";
$res=mysqli_query($c,$q);
$target="";
if(mysqli_num_rows($res)>0){

    $target='<table border="2"><tr> 
        <td>ID</td> 
        <td>NAME</td>
        <td>EMAIL</td>
    </tr>';
    while($row=mysqli_fetch_assoc($res)){
        $target .="<tr> 
            <td>{$row['stud_id']}</td> 
            <td>{$row['stud_name']}</td>
            <td>{$row['stud_email']}</td>
        </tr>";
    }
    $target .='</table>';
    mysqli_close($c);
    echo $target;
}
else{
    echo "sorry no data found";
}
?>