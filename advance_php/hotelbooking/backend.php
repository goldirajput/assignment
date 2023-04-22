<?php
include 'connection.php';
// $d = "";
// $qu="select * from cust_details";
// $res=mysqli_query($c,$qu);
// while($row=mysqli_fetch_assoc($res)){
//     $d .= "<tr> <td> {$row['cust_id']}</td>
//     <td> {$row['cust_name']}</td>
//     <td> {$row['cust_email']}</td>
//     <td> {$row['cust_num']}</td>
//     <td> {$row['cust_date']}</td>
//     <td> {$row['cust_booking_type']}</td>
//     <td> {$row['cust_slot']}</td>
//     </tr>";
// }
// echo $d;
if($_POST['type'] == "")
{
$q="select * from booking_type";
$res=mysqli_query($c,$q);
$action="";
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
    $action .= "<option value='{$row["type_id"]}'>{$row['type_name']}</option>";
}

}

else{
    echo "SORRY NO DATA FOUND";
}
}
elseif($_POST['type'] == "slotdata"){

    $q="select * from booking_slot where type_id =  {$_POST['id']}";
    $res=mysqli_query($c,$q);
    $action="";

    while($row=mysqli_fetch_assoc($res)){
        $action .= "<option value='{$row["name"]}'>{$row['name']}</option>";
    }
}
echo $action;
?>