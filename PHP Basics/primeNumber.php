<?php
// Loop through numbers 1 to 100
for ($i = 1; $i <= 100; $i++) {
    $isPrime = true;

    // Check if the number is less than 2
    if ($i < 2) {
        $isPrime = false;
    }

    // Check if the number is divisible by any number between 2 and the number itself
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }

    // If the number is prime, display it on the screen
    if ($isPrime) {
        echo $i . " ";
    }
}
?>
