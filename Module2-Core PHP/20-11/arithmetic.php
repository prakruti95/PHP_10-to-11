<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
    Enter A: <input type="text" name="num1"/>
    Enter B: <input type="text" name="num2"/>
    <input type="submit" value="Go"/>
</form>    


</body>
</html>


<?php

    //$_POST -> super global variable
    $a = $_POST["num1"];
    $b = $_POST["num2"];

    $add = $a+$b;//15
    $sub = $a-$b;//5
    $mul = $a*$b;//50
    $div = $a/$b;//2
    $mod = $a%$b;//0

    echo $add." ".$sub." ".$mul." ".$div." ",$mod;

    
    ?>