<?php
// if elseif statement

$per = 100;

if($per >= 90 && $per <= 100){
    echo "you are  in 'A+' grade";
}elseif ($per >= 80 && $per < 90) {
    echo "you are in 'A' grade";
}elseif ($per >= 70 && $per < 80) {
    echo "you are in 'B+' grade";
}elseif ($per >= 60 && $per < 70) {
    echo "you are in 'C+' grade";
}elseif ($per >= 50 && $per < 60) {
    echo "you are in 'C' grade";
}elseif ($per >= 40 && $per < 50) {
    echo "you are in 'D' grade";
}elseif ($per >= 30 && $per < 40) {
    echo "you are in '-D' grade";
}elseif ($per < 30) {
    echo "you are Fail";
}else{
    echo "Please enter your valid parcesntage";
}
?>