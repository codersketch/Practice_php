<?php

// function arguments by reference

function user(&$fname){
    $fname .= " akash";
}
$name= "sujoy";
user($name);
echo $name ;

function first($num){
    $num += 5;
}
function second(&$num){
    $num *= 5;
}
$number = 12;
first($number);

echo $number;

second($number);
echo $number;
?>