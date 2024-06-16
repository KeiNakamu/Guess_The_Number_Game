<?php
echo 'This is a number guessing game.' . "\n";
echo 'Please enter two numbers.' . "\n";
echo 'number1: ' . "\n";
$number1 = intval(trim(fgets(STDIN)));
echo 'number2: ' . "\n";
$number2 = intval(trim(fgets(STDIN)));

$number = [$number1, $number2];
sort($number);
$randamNumber = rand($number[0], $number[1]);

echo 'Guess the number.' . "\n";

$count = 0;
while (true){

    $answer = intval(trim(fgets(STDIN)));
    
    if ($count > 2) {
        echo 'Sorry, the answer is ' . $randamNumber . "\n";
        echo 'Please try again.' . "\n";
        break;
    } else {
        if ($answer < $number[0] || $answer > $number[1]) {
            echo 'Enter a number between ' . $number[0] . ' and ' . $number[1] . "\n";
            echo 'Guess the number.' . "\n";
        } else if ($answer == $randamNumber) {
            echo 'Congratulations' . "\n";
            break;
        } else {
            echo 'Sorry, please try again' . "\n";
            echo 'Guess the number.' . "\n";
            $count++;
        }
    }
}