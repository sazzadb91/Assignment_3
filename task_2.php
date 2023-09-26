<?php
$numbers=range(1,40);
function removeEven($number){
    if($number % 2!=0){
        return $number;
    }
}
$result=array_filter($numbers,'removeEven');
print_r($result);
