<?php

$a = 5;
$a = 10;
$a = 15;

echo $a;

$fname=array("a"=>"Peter","Peter","ab"=>"Ben","ac"=>"Joe");
$age=array("a"=>"35","abbbbs"=>"37","acc"=>"43","test");
echo "<br>";
print_r($fname);
echo "<br>";
print_r($age);
echo "<br>";
$newar = (array_combine($fname,$age ));
print_r($newar);
echo "<br>=============================== Array Merge =================================== <br>";
print_r(array_merge($fname,$age));
echo "<br>=============================== Array Merge Recursive=================================== <br>";
print_r(array_merge_recursive($fname,$age));

?>