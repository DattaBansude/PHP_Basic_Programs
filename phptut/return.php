<?php
function sum($math , $eng, $hindi, $sci){
    $s = $math+$eng+$hindi+$sci;
    return $s;

}
function percentage($st){
    $per = $st/4;
    echo $per. "%";
}
$total =sum(23,34,46,56);
percentage($total);
?>