<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">

       
        <p>
             Enter How Many times you wan to work:<input type="text" name="num"/>
        </p>
        <p>
            <input type="submit" value="OK"/>
        </p>

    </form>
    
</body>
</html>

<?php

    $num =$_POST["num"];

    for($i=1;$i<=$num;$i++)
    {
        echo "<br>".$i;
    }
?>