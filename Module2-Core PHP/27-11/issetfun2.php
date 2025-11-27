<?php

     if(isset($_POST["frm1"]))
     {
        $year = $_POST["year"];
        
        if($year%4==0)
        {
              echo "<h3 style='color:green'>This is a Leap Year</h3>";
        }
        else
        {
             echo "<h3 style='color:green'>This is Not Leap Year</h3>";
        }

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
            Enter Year:
            <input type="text" name="year"/>
            <input type="submit" name="frm1" value="Go"/>
        </p>
    </form>

 
    
</body>
</html>