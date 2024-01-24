<?php 

// multidimensional array or nested array 

$users = [
    [1 , "akash halder", "male", "graduated", 20000],
    [2 , "sanjay natta", "male", "HS pass", 50000],
    [3 , "lipika halder", "female", "HS pass", 8000],
    [5 , "uttam halder", "male", "8 pass", 30000],
    [4 , "chandan saha", "male", "graduated", 4000]
];

// for print dedicated array details, this is also complex.
// echo $users[0][0];

// this is the easy way to print multigimensional array using for loop
// for ($row=0; $row < 4; $row++) { 
//     for ($col= 0; $col < 4; $col++) {
//         echo $users[$row][$col]. " ";
//     }
//     echo "<br>";
// }


echo "<table border='2px' cellpading='5px' cellpdding='5px'>";
echo "<tr>
        <th>ID</th>
        <th>NAME</th> 
        <th>GENDER</th> 
        <th>QULIFICATION</th> 
        <th>SALLERY</th> ";

foreach ($users as $v1) {
    echo "<tr>";
    foreach ($v1 as $v2) {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
};
echo "</table>";

// for print all multigimensional array but this is too complex
// echo "<pre>";
// print_r($users);
// echo "</pre>";
?>