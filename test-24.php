<?php

// global & local veriable
$user = "akash";
function user(){
    global $user;
    echo "inside function name : $user <br>";
}
user();
echo "outside function name: $user <br>"; 
?>