<?php
function k($a){
switch($a){
    case 1:
    $b="중식";
    break;
    case 2:
    $b="일식";
    break;
    case 3:
    $b="한식";
    break;
}
echo $b;
}
$a=mt_rand(1,3);
k($a);
    ?>