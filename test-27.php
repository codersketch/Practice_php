<?php
// foreach loop 

$user = [
    "akash",
    "user@g.com",
    "male"
];
// foreach loop used to print array in a smiple way 
// printing indexed array  
foreach ($user as $value) {
    echo  $value ."<br>";
};

echo"<br>";

$user2 = [
    "name" => "sanjay",
    "email"=> "test@gmail.com",
    "age"=> 22,
    "height"=> 5.11,
    "login"=> true,
];
echo "<ol>";
// this for each loop print associative array with key 
foreach ($user2 as $key => $value2) {
    echo "<li>$key => $value2 </li>";
}
echo "</ol>";

?>