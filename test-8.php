<?php
// if elseif statement

$number = 100;

if($number >= 90 && $number <= 100){
    echo "you are  in 'A+' grade";
}elseif ($number >= 80 && $number < 90) {
    echo "you are in 'A' grade";
}elseif ($number >= 70 && $number < 80) {
    echo "you are in 'B+' grade";
}elseif ($number >= 60 && $number < 70) {
    echo "you are in 'C+' grade";
}elseif ($number >= 50 && $number < 60) {
    echo "you are in 'C' grade";
}elseif ($number >= 40 && $number < 50) {
    echo "you are in 'D' grade";
}elseif ($number >= 30 && $number < 40) {
    echo "you are in '-D' grade";
}elseif ($number < 30) {
    echo "you are Fail";
}else{
    echo "Please enter your valid parcesntage";
}


?>