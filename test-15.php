<?php

// nested loop
for ($a = 1; $a <= 100; $a = $a +10) { 
    for ($b = $a; $b < $a + 10; $b++) { 
        echo $b . " ";
    }
    echo"<br>";
}


// for ($a = 0; $a <= 200 ; $a = $a + 10) { 
//     for ($b = $a; $b < $a + 10 ; $b++) { 
//         echo $b . " ";
//     }
//     echo"<br>";
// }
?>