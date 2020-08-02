<?php
    // Exercise 1
    // Write the necessary code to generate the final string using the given array
    // Lado, ledo, lido, lodo, ludo,
    // Say it backwards I doubt it.
    // Ludo, lodo, lido, ledo, lado,
    // What a job it has cost me!


    $array = [
        'keyStr1' => 'lado',
        0 => 'ledo',
        'keyStr2' => 'lido',
        1 => 'lodo',
        2 => 'ludo'
    ];

    foreach($array as $element) {
        echo $element . ', ';
    }
    echo "\n" . "Say it backwards I doubt it. \n";

    foreach(array_reverse($array) as $element) {
        echo "$element, ";
    }
    echo "\nWhat a job it has cost me! \n\n";

    // Exercise 2
    // Create an array containing the names of 5 countries as the key and 
    // another array with 3 cities belonging to that country as a value, 
    // then use a foreach cycle, to print the name of the country followed 
    // by the cities you defined:
    $array2 = [
        'Colombia' => ['Medellín', 'Bogotá', 'Cali'],
        'México' => ['Monterrey', 'Querétaro', 'Guadalajara'],
        'Perú' => ['Lima', 'Cusco', 'Trujillo'],
        'Argentina' => ['Buenos Aires', 'Rosario', 'Mar del Plata'],
        'Chile' => ['Santiago de Chile', 'Concepción', 'Viña del Mar']
    ];

    foreach($array2 as $key => $valor) {
        echo "$key: ";
        foreach($valor as $item) {
            echo "$item ";
        }
        echo "\n";
    }   
    echo "\n";

    // Exercise 3
    // Write the code needed to find the 3 largest numbers and the 3 lowest 
    // numbers from the following list:
    $values = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
    
    rsort($values);
    $size = count($values);
    for($i = 0; $i < 3; $i++) {
        echo "$values[$i] ";
    }
    echo "\n";

    sort($values);
    for($i = 0; $i < 3; $i++) {
        echo "$values[$i] ";
    }
?>