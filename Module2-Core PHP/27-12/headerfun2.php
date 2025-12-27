<?php

   // header("Location: http://www.facebook.com"); 

   header("refresh:12;http://www.facebook.com"); 

    header("Expires: Sun, 25 Jul 1997 06:02:34 GMT"); 
    header("Cache-Control: no-cache"); 
    header("Pragma: no-cache"); 

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
            print_r(headers_list()); 
        ?> 
</body>
</html>