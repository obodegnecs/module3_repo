<?php

for($i = 1; $i <= 60; $i++) {

    if($i % 15 == 0) {
        echo "FizzBuzz";
        continue;
    }
    elseif($i % 5 == 0) {
        echo "Buzz";
        continue;
    }
    elseif($i % 3 == 0) {
        echo "Fizz";
        continue;
    }
    echo $i;

    if($i != 60) {
        echo ", ";
    }
}
