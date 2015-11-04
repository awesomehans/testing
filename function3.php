<?php

function say_hello($name='Buddy'){ //default is 'Buddy'
    return 'Hi, there ' . $name;
    
}

function pp($value){
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}

function array_pluck($to_pluck, $arr){
    $new_array = array();
    foreach ($arr as $item){
        $new_array[] = $item['age'];
    }
}

echo say_hello('Joe');

echo'<br>';
$arr = array('name' => 'Joe', 'age' => 40, 'occupation' => 'teacher');
echo "<pre>";
print_r($arr);
echo "</pre>";

pp($arr);

$people = array(
    array('name' => 'Joe', 'age' => 40, 'occupation' => 'teacher'),
    array('name' => 'Matt', 'age' => 34, 'occupation' => 'doctor'),
    array('name' => 'Dude', 'age' => 56, 'occupation' => 'janitor')
);

array_pluck('name',$people); // 