<?php
 //Initialize variable $name
 $name = "World";
 //Checking the existence of command line argument (It in indexed from 0 but 0 is the file name)
 if (isset($argv[1])) {
 //Assigning the value of the argument to the name variable
 $name = $argv[1];
 }
 //Returning the text to the command line
 echo "Hello " . $name . "!\n";