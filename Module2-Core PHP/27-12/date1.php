<?php

    //ECHO time();

    echo "<br>";
    echo $Date = "2010-10-15";
    echo "<br>";
    echo date("d-m-Y",strtotime($Date));

    $month = 12;  
$day = 31;  
$year = 2017;  
  
// returns a boolean value after validation of date  
var_dump(checkdate($month, $day, $year)); 
//checkdate End  

echo "<br>";
echo "<br>";

$date=date_create();
date_date_set($date,2020,10,30);
echo date_format($date,"Y/m/d");

print_r(date_parse("2017-11-08 11:10:40.5"));

print_r(getdate());
echo "<br><br>";

$mk=mktime(0,0,0,date('m'),date('d')+2,date('y'));//display day after 5 days
echo date("D-m-Y",$mk);

date_default_timezone_set('Asia/Kolkata');

echo "Current time in Asia/Kolkata: " . date('Y-m-d H:i:s T');
?>