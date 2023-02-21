<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style='color:blue' ;>
    <?php
    $s = 1901;
    $e = 2016;
    a:
    if ($s <= $e) 
    {
        if ($s % 4 == 0) 
        {
            if ($s % 100 == 0) 
            {
                if ($s % 400 == 0) 
                {
                    echo $s."<br>";
                } 
                else 
                {
                    // echo "$year is not a leap year";
                }
            } 
            else 
            {
                echo $s."<br>";
            }
        } 
        else 
        {
            // echo "$year is not a leap year";
        }
        $s++;
        goto a;
        
    }

    ?>
</body>
</html>