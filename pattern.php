<?php
        for ($i=1; $i <=5; $i++) 
        { 
            for ($j=1; $j <=4; $j++) 
            { 
                if ($i==1 || $i==5) 
                {
                    echo "*";
                } 
                if ($j==1) 
                {
                    echo "*";
                }                 
            }
            
            echo "<br>";
        }
?>
