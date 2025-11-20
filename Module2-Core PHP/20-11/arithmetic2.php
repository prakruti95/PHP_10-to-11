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
        Enter A: <input type="text" name="num1"/>
    </p>
    <p>
      Enter B: <input type="text" name="num2"/>
    </p>
   <p>
        Choose : 
        <select name="op">
        <option value="add">Addition</option>
        <option value="sub">Substraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Divsion</option>
        <option value="mod">Modulus</option>
       
        </select>
    </p>
    <input type="submit" value="Go"/>
</form>    


</body>
</html>


<?php

    $a = $_POST["num1"];
    $b = $_POST["num2"];
    $op = $_POST["op"];

    //echo "".$a."".$b."".$op."";

    if($op == "add")
    {
        $ans = $a+$b;
      
    }
    if($op == "sub")
    {
         $ans = $a-$b;
    }
    if($op == "mul")
    {
        $ans = $a*$b;
    }
    if($op == "div")
    {
        $ans = $a/$b;   
    }
    if($op == "mod")
    {
        $ans = $a%$b;
    }
   

    echo "Your Answer is ".$ans;
   
  

  

    
    ?>