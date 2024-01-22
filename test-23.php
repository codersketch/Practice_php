<?php

// recursive function

function display($number){
    if ($number <= 10){
        echo "$number <br>";
        display ($number + 1);
    }
}

display(1);

function fac($n){
    if($n == 0){
        return 1;
    }else{
        return ($n * fac($n-1));
    }
}
echo fac(50);
?>