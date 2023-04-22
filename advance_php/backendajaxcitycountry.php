<?php 
include("./admin4466/conn.php");
echo $_POST['type'];
if($_POST['type'] == "")
{
    $q="select * from cust_state";
$res=mysqli_query($c,$q);
$action="";
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
    $action .= "<option value='{$row["state_id"]}'>{$row['state_name']}</option>";
}

}

else{
    echo "SORRY NO DATA FOUND";
}
}
elseif($_POST['type'] == "citydata"){

    $q="select * from cust_city where state_id =  {$_POST['id']}";
    $res=mysqli_query($c,$q);
    $action="";

    while($row=mysqli_fetch_assoc($res)){
        $action .= "<option value='{$row["city_name"]}'>{$row['city_name']}</option>";
    }
}
echo $action;
?>