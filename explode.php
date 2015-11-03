<?php
$sentence = 'I am enjoyin the PHP video tutorials.';
$parts = explode(' ',$sentence); // the ' ' is the char the func looks for to split

print_r($parts);
echo '<br>';

foreach ($parts as $q)
{
    echo $q . ' ';
}