<?php

// multidimensional associatave array 

$user = [
    "akash" => [
        "bengali" => 65,
        "english" => 55,
        "math" => 55
    ],
    "chandan" => [
        "bengali" => 78,
        "english" => 54,
        "math" => 95
    ],
    "sujay" => [
        "bengali" => 45,
        "english" => 64,
        "math" => 68
    ],
    "riya" => [
        "bengali" => 65,
        "english" => 87,
        "math" => 48
    ],
];

// preview array 
// echo "<pre>";
// print_r($user);
// echo "</pre>";

// printing array in table format 
echo "<table border='2px' cellpading='5px' cellpdding='5px'>";
echo "<tr>
        <th>Student name</th>
        <th>Bnegali</th>
        <th>English</th>
        <th>Math</th>
        </tr>";
foreach ($user as $key => $value) {
    echo "<tr>";
    echo "<td> $key </td>" ;
    foreach ($value as $value2) {
        echo "<td> $value2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>