<?php 
$grades = [85, 92, 78, 88, 95];

function DescendingOrder(&$decgrades) {
    rsort($decgrades);
}
DescendingOrder($grades);
print_r($grades);

?>
