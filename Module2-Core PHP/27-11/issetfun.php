<?php

    if(isset($_POST["frm1"]))
    {
        $name = $_POST["name"];
        echo "Form 1".$name."";
    }

    if(isset($_POST["frm2"]))
    {
        $name = $_POST["name"];
        echo "Form 2".$name."";
    }

?>


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
            Enter Name:
            <input type="text" name="name"/>
            <input type="submit" name="frm1" value="Go"/>
        </p>
    </form>

    <form method="post">
        <p>
            Enter Name:
            <input type="text" name="name"/>
            <input type="submit" name="frm2" value="Go"/>
        </p>
    </form>
    
</body>
</html>