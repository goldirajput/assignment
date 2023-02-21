<?php
$balance = array(
    array(1.5, 2.8, 4.1,),
    array(1.5, 2.8, 4.1,),
    array(1.5, 2.8, 4.1,),
    array(1.5, 2.8, 4.1,),
    array(1.5, 2.8, 4.1,));
    for ($i=0; $i < count($balance); $i++) 
    {
        for ($j=0; $j < count($balance[$i]); $j++) { 
            echo $balance[$i][$j]."&nbsp;&nbsp;";
        } 
        echo "<br>";
    }

    ?>