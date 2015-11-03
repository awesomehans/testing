<?php
// === are the values exacly the same and the same data type

$haystack = 'This is tutorial number 21';
$needle = 'x';

$search = strpos($haystack, $needle); //returns an INT for pos or FALSE if not present

if ($search === FALSE){
    echo 'The string was not found';
} else {
    echo 'The position of the string is ' . $search;
}
    

echo'<br><br>';

$email = 'testing@hotmail.com';
$needle = '@';
$search = strpos($email, $needle);

if ($search === FALSE){
    echo 'This is not a valid email';
}  else {
    echo 'This is a valid email';
}
