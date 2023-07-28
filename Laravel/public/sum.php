<?php

$arr = [1, 8, 3, 2, 7, 12, 20, 3, 7, 7, 12];
$out_str = "";

foreach ($arr as $item) {

    if($item < 10) {
        $out_str .= $item . ", ";
    }
}

$out_str = trim($out_str);
$out_str[strlen($out_str)-1] = " ";

echo $out_str;

$sum_odd = 0;

foreach ($arr as $item) {
    if($item %2 == 1) {
        $sum_odd += $item;
    }
}

echo "<br/>$sum_odd";