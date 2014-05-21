<?php

//$numbers = array(1, 2, 3, 4, 5);
//for ($i = 0; $i < count($numbers); $i++) {
    //echo ("\$numbers has an element with a value of {$numbers[$i]}\n");
//}

//$numbers = array(1, 2, 3, 4, 5);
//foreach ($numbers as $value) {
    //$new_number = $value * 2;
    //echo ("$value * 2 is {$new_number}\n");
//}

//$animal_types = array('dogs', 'cats', 'birds', 'narwhals');
//foreach ($animal_types as $animal) {
    //echo "Old McDonald had a farm, and on that farm he raised some {$animal}\n";
//}

$data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);
foreach ($data as $datum) {
    if (is_numeric($datum)) {
        echo "{$datum} is a number\n";
    } else if (is_string($datum)) {
        echo "{$datum} is a string\n";
    }
}
