<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

 
</head>
<body>
    
    <form method="post">

        <h4>Print 1 For English ,Print 2 For Hindi and Print 3 For gujarati</h4>

        <p>
        Enter Your Number: <input type="text" name="num"/>
        </p>

        <p>
            <input type="submit" value="Go"/>
        </p>

    </form>

</body>
</html>


<?php



    $num = $_POST["num"];

    switch($num)
    {
        case 1: echo "English";
        break;

        case 2: echo "Hindi";
        break;

        case 3: echo "Gujarati";
        break;

        default: echo "<h4 style='color: red;'>Number is not valid</h4>";
    }

?>