<?php

function welcome($name, $age)
{
    echo 'Welcome to the website ' . $name . ' you are ' . $age . ' years old!';
}

function add($num1, $num2)
{
    echo $num1 + $num2;
}

function sub($num1, $num2)
{
   return $num1 - $num2;
}        

welcome('Hans', 36);
echo '<br>';
add(3,4);
echo '<br>';
echo sub(23,4); // need echo because you want the 'return' to be on screen

