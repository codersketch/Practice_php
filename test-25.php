<?php

// array

// 1st way to write --------
// $user = array("akash", 21, "male", true, 5.10);
// echo "$user[1] <br>";

// $colors = array("black","blue","white","pink","violet");
// echo "$colors[0] <br>";
// echo "$colors[2] <br>";
// echo "$colors[4] <br>";

// // testing purpose print ----------
// echo "<pre>";
// print_r($colors);
// echo "</pre>";

// // another way to write --------
// $num = [10, 20, 30, 40, 50];
// echo $num[1];

// for big data size array we use for loop 
$col = array("black","blue","white","pink","violet");

echo "<ol>";
for ($i=0; $i < 4; $i++) { 
    echo "<li>$col[$i]</li>";
}
echo "</0l>";
?>