<?php

// goto statement
for ($a=1; $a < 10; $a++) { 
    if ($a == 8) {
        goto abc;
    }
    echo $a.") <br>";
}


abc:
echo "akash";
?>