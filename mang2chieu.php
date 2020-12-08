<?php
$arr = [[1,2,0],[3,4,0]];
$max = $arr[0][0];
$positionI = 0;
$positionJ = 0;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if ($max < $arr[$i][$j]) {
            $max = $arr[$i][$j];
            $positionI = $i;
            $positionJ = $j;
        }
    }
}
echo 'Giá trị lớn nhất là ' . $max . '<br>';
echo 'Tọa độ của max là ' . $positionI . ' và ' . $positionJ;
?>