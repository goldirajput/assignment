<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
    <h1 style="font-family:Old English Text MT">Marksheet</h1>
    <table border='1px' style="background-color:skyblue;border-color:pink;"> 
          
    <?php
        
        $Physics=95;$Chemistry=92;$Biology=90;$Mathematics=98;$Computer=99;
        echo "<tr>";
            echo "<th>No.</th>";
            echo "<th>Subject</th>";
            echo "<th>Maximum Marks</th>";
            echo "<th>Obtained Marks</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>1</td>";
            echo "<td>Physics</td>";
            echo "<td>100</td>";
            echo "<td>$Physics</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>2</td>";
            echo "<td>Chemistry</td>";
            echo "<td>100</td>";
            echo "<td>$Chemistry</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>3</td>";
            echo "<td>Biology</td>";
            echo "<td>100</td>";
            echo "<td>$Biology</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>4</td>";
            echo "<td>Mathematics</td>";
            echo "<td>100</td>";
            echo "<td>$Mathematics</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>5</td>";
            echo "<td>Computer</td>";
            echo "<td>100</td>";
            echo "<td>$Computer</td>";
        echo "</tr>";        
        $total=$Physics+$Chemistry+$Biology+$Mathematics+$Computer;
        echo "<tr>";            
            echo "<td colspan='2'><center>Total</center></td>";
            echo "<td>500</td>";
            echo "<td>$total</td>";
        echo "</tr>";
        $per=$total/5;
        echo "<tr>";
            echo "<td colspan='4'><center>Percentage : $per</center></td>";
            
        echo "</tr>";
        if ($per>=91 and $per<=100) 
        {
            echo "<td colspan='4'>Grade : A1</td>";
        }
        elseif ($per>=81 and $per<=90) 
        {
            echo "<td colspan='4'>Grade : A2</td>";
        }
        elseif ($per>=71 and $per<=80) 
        {
            echo "<td colspan='4'>Grade : B1</td>";
        }
        elseif ($per>=61 and $per<=70) 
        {
            echo "<td colspan='4'>Grade : B2</td>";
        }
        elseif ($per>=51 and $per<=60) 
        {
            echo "<td colspan='4'>Grade : C1</td>";
        }
        elseif ($per>=41 and $per<=50) 
        {
            echo "<td colspan='4'>Grade : C2</td>";
        }
        elseif ($per>=31 and $per<=40) 
        {
            echo "<td colspan='4'>Grade : D1</td>";
        }
        elseif ($per>=21 and $per<=30) 
        {
            echo "<td colspan='4'>Grade : D2</td>";
        }
        else
        {
            echo "<td colspan='4'>Grade : E</td>";
        }
        
    ?>
    </table>
</body>
</html>




