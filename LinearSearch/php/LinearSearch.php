<?php

/**
 * @param array $array The array to search
 * @param int $length The number of elements in the array
 * @param mixed $value The target value to search in the array
 * @return mixed The index of the target value if found, -1 otherwise
 */
function linearSearch(array $array, int $length, mixed $value): int
{
    $answer = -1;

    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] === $value) {
            $answer = $i;
        }
    }

    return $answer;
}

$books = [
    "Harry Potter and the Philosopher\'s Stone",
    "The Lord of the Rings",
    "Alice's Adventures in Wonderland",
    "The Hobbit",
    "The Little Prince"
];

$value = readline("Enter the value to search: ");
$result = linearSearch($books, count($books), $value);

if ($result == -1) {
    echo "Value not found";
} else {
    echo "Value found at index " . $result;
}
