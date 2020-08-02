<?php 
    // Exercise 1
    $var = 32 + 3;
    $var2 = 3 * (2+3);
    echo "32 + 3 = $var \n";
    echo "3 * (2+3) = $var2 \n\n";

    // Exercises 2
    $value = 9;
    if ($value > 5 && $value < 10) {
        echo "Value is greater than 5 but less than 10\n";
    }

    if($value >= 0 && $value <= 20) {
        echo "Value is greater than or equal to 0 but less than or equal to 20\n";
    }

    if($value === '10') {
        echo "Value equals '10' ensuring that the data type is string\n";
    }

    if(($value > 0 && $value < 5) || ($value > 10 && $value < 15)) {
        echo "Value is greater than 0 but less than 5 or is greater than 10 but less than 15";
    }
?>

