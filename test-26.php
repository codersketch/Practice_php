<?php

// associative arrat 

$user= [
    "name" => "akash",
    "email"=> "test@gmail.com",
    "age"=> 22,
    "height"=> 5.11,
    "login"=> true,
];
echo $user["age"];


echo "<pre>";
print_r($user);
echo "</pre>";

// datatype print 
echo "<pre>";
var_dump($user);
echo "</pre>";

// changing array data 
$user["email"] ="test@gmail.com";
echo $user["email"];

?>