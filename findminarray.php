<?php
$arr = [];
function findMinArr($arr) {
    $min = $arr[0];
    $position = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
            $position = $i;
        }
    }
    return $position;
}
echo findMinArr([1,4,3]);
?>