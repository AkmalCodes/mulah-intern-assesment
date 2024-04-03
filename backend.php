<?php

// for table 1 data exctraction
$csvFilePath = 'Table_input.csv';

// Open the CSV file for reading
if (($handle = fopen($csvFilePath, 'r')) !== false) {
    // Initialize an empty map to store data
    $dataMap = [];
    // Flag to skip the first line
    $skipFirstLine = true;
    // Loop through each line in the CSV file
    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        // Check if it's the first line, if so, skip
        if ($skipFirstLine) {
            $skipFirstLine = false;
            continue;
        }
        // Assuming the first column is the key and the second column is the value
        $key = $data[0];
        $value = intval($data[1]);
        // Store key-value pair in the map
        $dataMap[$key] = $value;
    }
    // Close the file handle
    fclose($handle);
    // Output the data map
} else {
    // Handle error opening the file
    echo "Error opening file.";
}

// table 2 calculations
$alpha = $dataMap['A5'] + $dataMap['A20'];
$beta = $dataMap['A15'] / $dataMap['A7'];
$charlie = $dataMap['A13'] * $dataMap['A12'];
// $alphaType = gettype($alpha); // get data type of alpha
// $betaType = gettype($beta); // get data type of beta
// $charlieType = gettype($charlie); // get data type of charlie

?>