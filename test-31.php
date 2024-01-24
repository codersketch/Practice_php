<?php 

// count and sizeof 

$food = ["Milk", "Juice", "Fruits", "Cakes","Milk"];

// $len = sizeof($food);
// for ($i=0; $i < $len ; $i++) { 
//     echo $food[$i]."<br>";
// };
echo"<pre>";
print_r(array_count_values($food));
echo"</pre>";
$market = [
    'food' => 'Milk', 'Juice', 'Fruits', 'Cakes',
    'nonveg' => 'Biriyani', 'Fried rice', 'Mutton', 'Polau',
];
// echo sizeof($market,1);
?>