<?php
// Given array of random numbers
$randomNumbers = [208, 54, 376, 162, 440, 64, 390, 482, 67, 209];

// Filter out the even numbers greater than 50
$filteredNumbers = array_filter($randomNumbers, function($number) {
    return $number > 50 && $number % 2 === 0;
});

// Multiply each element of the filtered array by 2
$multipliedNumbers = array_map(function($number) {
    return $number * 2;
}, $filteredNumbers);

// Display the resulting array
print_r($multipliedNumbers);
?>
