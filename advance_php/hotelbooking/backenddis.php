<?php 
$c=mysqli_connect("localhost","root","","hotelbooking");
if(!$c){
    die ("database not connected..!!!");
}
$ot = "";
$q="select * from cust_details";
$res=mysqli_query($c,$q);
if(mysqli_num_rows($res) > 0){
    $ot = '<table border="1" class="table table-striped">
        <tr>
            <th>Id</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>NUMBER</th>
            <th>DATE</th>
            <th>BOOKING TYPE</th>
            <th>BOOKING SLOTE</th>
        </tr>';
while($row = mysqli_fetch_assoc($res)){
        $ot .= "<tr>
            <td>{$row['cust_id']}</td>
            <td>{$row['cust_name']}</td>
            <td>{$row['cust_email']}</td>
            <td>{$row['cust_num']}</td>
            <td>{$row['cust_date']}</td>
            <td>{$row['cust_booking_type']}</td>
            <td>{$row['cust_slot']}</td>
        </tr>";
}
  $ot .=  '</table>';
  mysqli_close($c);
  echo $ot;
}else{
    echo "<h2>NO RECORD FOUND</h2>";

}
?>