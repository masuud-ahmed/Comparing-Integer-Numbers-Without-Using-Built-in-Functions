<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Integer Numbers</title>
</head>
<body>
    <?php
    $a=12;
    $b= 8;
    $c= 9;
    //Comparing numbers without using built-in functions to get the greatest value
    $greatest= $a;
    if($b>$greatest){
        $greatest= $b;
    }
    if($c>$greatest){
        $greatest= $c;
    }

    ///Comparing numbers without using buuit-in functions to get the the smallest value
    $smallest=$a;
    if($b<$smallest){
        $smallest= $b;
    }
    if($c<$smallest){
        $smallest= $c;
    }
    echo"The greatest value is : $greatest <br>";
    echo "The smallest value is : $smallest <br>";
    ?>
</body>
</html>