<?php
//comparison oprator ==, ===, !> or <>, !==, <, >, >=, <=, <=>
// output will be :- 1 mean true or empty means false

// ==  equal to
// === equal value and equal data type
// != not equal
// <> not equal
// !== not equal value and equal data type
// > grater than
// < less than
// >= grater than or equal to 
// <= less than or equal to
// <=> spaceship

// if statement 
$a = 20;
$b = 10;
if ($a == $b) :
    echo "A is equal <br>";
endif;
if ($b === $a) {
    echo "A is equal and data type equal <br>";
}
if ($b != $a) {
    echo "A is not equal <br>";
}
if ($b !== $a) {
    echo "A and B is not equal and data type differant <br>";
}
if ($b > $a) {
    echo "A is grater <br>";
}
if ($b < $a) {
    echo "A is less <br>";
}
if ($b >= $a) {
    echo "A is grater than or equal to B <br>";
}
if ($b <= $a) {
    echo "A is less than or equal to B <br>";
}
if ($b <=> $a) {
    echo "A is less than or equal to B <br>";
}
?>