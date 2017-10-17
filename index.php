<?php

$x = 0;    
$y = 1; 

for($i=0;$i<=100;$i++)    
{    
    $z = $x + $y;    
    echo $z."<br />";         
    $x=$y;       
    $y=$z;     
}   