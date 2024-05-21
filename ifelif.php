<?php
$per=323;
if($per >= 80 && $per <= 100){
    echo"merit";
}elseif($per >=60 && $per < 80){
    echo"1 st division";

}elseif($per >=45 && $per < 60){
    echo"2nd division";

}elseif($per >=33 && $per < 44){
    echo"3rd division";

}elseif( $per < 33){
    echo"you are a fail";

}else
    echo"please enter the valid percentage";

?>
