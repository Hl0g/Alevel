<?php
for ($number = 1; $number <= 120; $number++) {
    if ($number % 25 == 0) {
        echo 'FizzBuzz<br>';
    } elseif ($number % 6 == 0) {
        echo 'F<br>';
    } elseif ($number % 15 == 0) {
        echo 'B<br>';
    } else {
        echo $number . '<br>';
    }
}