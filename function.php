<?php
$rest = substr("abcde", 1);    // возвращает "edcde"
$rest = substr("abcde", 1, 3); // возвращает "bcd"
$rest = substr("abcde", 0, 4); // возвращает "abcd"
$rest = substr("abcde", 0, 8); // возвращает "abcdef"
$string = 'abcde';
echo $string{0};                // выводит a
echo $string{3};                // выводит d
?>