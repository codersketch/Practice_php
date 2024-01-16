<?php
// logical oprator &&, ||, !, and, or ,xor
// &&  logical and
// ||  logical or
// !  logical not
// and  logical and
// or  logical or
// xor  logical or

$age = 19;

// if($age >= 18 && $age <= 21){
//     echo "you are elegable";
// }
// if($age >= 18 and $age <= 21){
//     echo "you are elegable";
// }
// if($age >= 18 || $age <= 21){
//     echo "you are elegable";
// }
// if($age >= 18 or $age <= 21){
//     echo "you are elegable";
// }
// if(!($age <= 18)){
//     echo "you are elegable";
// }
if($age >= 18 xor $age <= 21){
    echo "you are elegable";
}


?>