<?php

$str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";

function split($string) {

    return explode(" ", $string);
}

$arr = split($str);

foreach ($arr as $item) {

    if(strpos($item, ".")) {
        echo str_replace(".", "", $item) . "<br/>";
        continue;
    }
    echo $item . "<br/>";
}