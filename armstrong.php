<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n=153;$sum=0;
        $org=$n;
        while ($n!=0) 
        {
            $r=$n%10;    
            $sum=$sum+$r*$r*$r;
            $n=$n/10;    
        }
        if($org==$sum)
        {
            echo "$org is an armstrong number";
        }
        else
        {
            echo "$org is not an armstrong number";
        }
    ?>
</body>
</html>