<html> 
    <body> 
        <p>Hello World!</p> 
      
        <!-- PHP program to display 
        header list --> 
        <?php 
            print_r(headers_list()); 
        ?> 
    </body> 
</html> 

<?php

    //header("Location: http://www.facebook.com");
     //header("refresh:2;http://www.facebook.com"); 
    header("Expires: Sun, 25 Jul 1997 06:02:34 GMT"); 
    header("Cache-Control: no-cache"); 
    header("Pragma: no-cache"); 
?>