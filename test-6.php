<?php
// logical oprator &&, ||, !, and, or ,xor
// &&  logical and means both condition truw
// and  logical and same as &&
// ||  logical or means any one or both condition true
// or  logical or same as ||
// !  logical not !() means it change the condtion t to f and f to t
// xor  logical or means if both t or f result will be f but if any one condition will be true it will be give t

$age = 1;

if($age >= 18 && $age <= 21){
    echo "you are elegable <br>";
}
if($age >= 18 and $age <= 21){
    echo "you are elegable <br>";
}
if($age >= 18 || $age <= 21){
    echo "you are elegable <br>";
}
if($age >= 18 or $age <= 21){
    echo "you are elegable <br>";
}
if(!($age <= 18)){
    echo "you are elegable <br>";
}
if($age >= 18 xor $age <= 21){
    echo "you are elegable <br>";
}


?>