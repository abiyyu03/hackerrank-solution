<?php
$x = 21;
$y = 80;
$z = 4;

if(($z > $x && $x > $y) || ($z < $x && $x < $y) || (abs($z - $x) < abs($y - $z))){ echo "Cat A";} 
elseif(($z > $y && $y > $x) || ($z < $y && $y < $x) || (abs($z - $x) > abs($y - $z))) { echo "Cat B";} 
else {echo "Mouse C";}