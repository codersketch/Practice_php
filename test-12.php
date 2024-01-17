<?php 

// type of loop ---
// while loop
// do/while loop
// for loop
// forEach

// while loop ------------
// $number = 0;
// while ($number <= 100) {
//     echo $number . ") my name is akash<br>";
//     $number = $number + 1;
// }

// with html tag-----------

$number = 1;
echo"<ul>";
while ($number <= 100) {
    echo "<li>" . $number . ") my name is akash</li>";
    $number = $number + 1;
}
echo"</ul>";

?>