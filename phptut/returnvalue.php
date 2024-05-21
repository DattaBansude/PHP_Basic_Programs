<?php
function hello($fname ,$lname){
    $v="$fname $lname";
    return $v;

}
$name =hello("datta","bansude");
echo"Hello $name";
?>