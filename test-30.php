<?php
// multidimensional array with lish

$user = [
    [1, "Akash Halder", "CEO", 50000],
    [2, "Chandan Saha", "Senior Manager", 40000],
    [3, "Sanjay Natta", "Manager", 30000],
    [4, "Neeraj Walia", "Lead", 20000],
    [5, "Arpit Bala", "Employ", 10000],
];

echo "<table border='1px' cellpadding='5px'";
echo "<tr>
<th>S. No<th>
<th>NAME</th>
<th>POSITION</th>
<th>SALLARY</th>
</tr>";
// using list for print array 
foreach ($user as list($no, $name, $position, $sallary)) {
    echo "<tr>
    <td>$no</td> 
    <td>$name</td> 
    <td>$position</td> 
    <td>$sallary</td>
    </tr>";
}
echo "</table>";

// another array 
$marks2 = [
    [
        "Name" => "akash halder",
        "bengali" => 65,
        "english" => 55,
        "math" => 55
    ],
    [
        "Name" => "Chandan Saha",
        "bengali" => 78,
        "english" => 54,
        "math" => 95
    ],
    [
        "Name" => "Sanjay Natta",
        "bengali" => 45,
        "english" => 64,
        "math" => 68
    ],
    [
        "Name" => "Neeraj Walia",
        "bengali" => 65,
        "english" => 87,
        "math" => 48
    ],
];
echo "<table border='2px' cellpading='5px' cellpdding='5px'>";
echo "<tr>
        <th>Student name</th>
        <th>Bnegali</th>
        <th>English</th>
        <th>Math</th>
        </tr>";

        // jast we have to write down the key names =>
foreach ($marks2 as list("Name"=> $name, "bengali"=> $bengali, "english"=> $english, "math"=> $math)) {
    echo "<tr>
    <td>$name</td> 
    <td>$bengali</td> 
    <td>$english</td> 
    <td>$math</td>
    </tr>";
}
echo "</table>";
?>
