<?php

// ternary operator

$age = 15;

// ($age > 18)? $elegable = "yes" : $elegable = "not";
// echo "$elegable";

// or

$elegable = "age you elegable : " . ($age >= 18?  "yes" : "no");
echo $elegable;

?>