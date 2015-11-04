<?php

$name = "Joe";
$age = 27;
echo printf("My name is %s and I am %d",$name,$age);//adds the number of charachters at the end
echo '<br>';
echo sprintf("My name is %s and I am %d",$name,$age);
echo '<br>';

$results = sscanf("June 7th 2012", "%s"); //%s for letters, %d for numbers
print_r($results);

echo '<br>';
$results = sscanf("June 7th, 2012", "%s %[^,], %d"); //%s for letters, %d for numbers
print_r($results);

echo '<br>';
list($month, $day, $year) = sscanf("June 7th, 2012", "%s %[^,], %d"); //%s for letters, %d for numbers
echo $month . '<br>';
echo $day . '<br>';
echo $year . '<br>';

$results = sscanf("June 7th, 2012", "%s %[^,], %d", $month, $day, $year); 
echo $month . '<br>';
echo $day . '<br>';
echo $year . '<br>';