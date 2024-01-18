<?php
// function with return value

function user($name = "akash", $title = "halder"){
    $userid = "hi my name is $name $title. <br>";
    return $userid;
}
$id = user("sujay");
echo "good morning, $id";

function sub($polsc, $edu, $phil){
    $sum = $polsc + $edu + $phil;
    return $sum;
}

function parcentage($subs){
    $arts = (($subs * 30) / 100);
    echo "total parcentage $arts %" ;
}
$total = sub(63,44,98);

parcentage($total)


?>