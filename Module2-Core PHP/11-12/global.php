<?php
$x = 10;
$y = 20;

function add() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    //$z = $x + $y;
}

add();
echo $z; // Output: 30
?>
