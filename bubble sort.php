<?php

$arr = [3,4,5,62,33,99,22,31];
$size = count($arr)-1;
for ($i = $size; $i>=0; $i--) {
    for ($j = 0; $j<=($i-1); $j++)
        if ($arr[$j]>$arr[$j+1]) {
            $k = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $k;
        }
}
print_r($arr);