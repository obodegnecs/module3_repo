<?php

$left = 10;
$right = 20;
$operation = "+";

switch ($operation) {
    case "+":   $result = $left + $right;   break;
    case "-":   $result = $left - $right;   break;
    case "*":   $result = $left * $right;   break;
    case "/":   $result = $left / $right;   break;
}

echo "Result: {$left} {$operation} {$right} = {$result}";