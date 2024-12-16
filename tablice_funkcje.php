<?php
// array_fill()
// Tworzy tablicę i wypełnia ją wartością.
$array = array_fill(0, 5, 'PHP'); // Tworzy tablicę ["PHP", "PHP", "PHP", "PHP", "PHP"]

// array_key_exists()
// Sprawdza, czy dany klucz istnieje w tablicy.
$arr = ['key1' => 'value1', 'key2' => 'value2'];
if (array_key_exists('key1', $arr)) {
    echo "Klucz 'key1' istnieje";
}

// array_keys()
// Zwraca wszystkie klucze tablicy.
$keys = array_keys($arr); // ["key1", "key2"]

// array_pop()
// Usuwa ostatni element tablicy i go zwraca.
$stack = ["apple", "orange", "banana"];
echo array_pop($stack); // "banana"

// array_push()
// Dodaje jeden lub więcej elementów na koniec tablicy.
array_push($stack, "grape"); // Tablica: ["apple", "orange", "grape"]

// array_reverse()
// Odwraca kolejność elementów w tablicy.
$reversed = array_reverse($stack); // ["grape", "orange", "apple"]

// array_search()
// Szuka wartości w tablicy i zwraca odpowiadający klucz.
$key = array_search("orange", $stack); // 1

// array_slice()
// Wycina fragment tablicy.
$sliced = array_slice($stack, 1, 2); // ["orange", "grape"]

// array_unique()
// Usuwa duplikaty z tablicy.
$unique = array_unique(["apple", "orange", "apple"]); // ["apple", "orange"]

// array_values()
// Zwraca wszystkie wartości tablicy jako nową tablicę.
$values = array_values($arr); // ["value1", "value2"]





// count()
// Zwraca liczbę elementów w tablicy.
echo count($stack); // 3

// explode()
// Rozdziela łańcuch na tablicę według separatora.
$parts = explode(",", "apple,orange,banana"); // ["apple", "orange", "banana"]

// in_array()
// Sprawdza, czy wartość znajduje się w tablicy.
if (in_array("apple", $stack)) {
    echo "apple is in the array";
}

// is_array()
// Sprawdza, czy zmienna jest tablicą.
if (is_array($stack)) {
    echo "It is an array";
}

// range()
// Tworzy tablicę liczb lub znaków w określonym zakresie.
$numbers = range(1, 5); // [1, 2, 3, 4, 5]

// list()
// Przydziela wartości z tablicy do zmiennych.
list($fruit1, $fruit2) = ["apple", "orange"];
echo $fruit1; // "apple"

// shuffle()
// Miesza elementy tablicy w losowej kolejności.
shuffle($stack); // Losowa kolejność elementów w $stack




// sort()
// Sortuje tablicę w porządku rosnącym.
sort($stack); // Tablica posortowana w porządku rosnącym

// rsort()
// Sortuje tablicę w porządku malejącym.
rsort($stack); // Tablica posortowana w porządku malejącym

// asort()
// Sortuje tablicę asocjacyjną według wartości, zachowując klucze.
asort($arr); // Tablica posortowana według wartości

// ksort()
// Sortuje tablicę według kluczy w porządku rosnącym.
ksort($arr);

// arsort()
// Sortuje tablicę asocjacyjną według wartości w porządku malejącym, zachowując klucze.
arsort($arr);

// krsort()
// Sortuje tablicę według kluczy w porządku malejącym.
krsort($arr);