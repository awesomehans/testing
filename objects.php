<?php
$person = array(
    'first' => 'John',
    'last' => 'Doe',
    'job' => 'Teacher'
);

var_dump($person);
echo '<br>';

class Person {
    public $name;
    public $job;
    
    public function __construct($name, $job) {
        $this->name = $name;
        $this->job = $job;
    }
    
    public function communicate($style = 'voice'){
        return 'communicating with ' . $style;
    }
    
}

$p = new Person('Hans', 'Hoser');

var_dump($p);
echo '<br>';

echo $p->communicate('telepathy');

$person2 = new stdClass;
$person2->first = 'John';
$person2->last = 'Doe';
$person2->job = 'Teacher';

echo '<br>';
var_dump($person2);

$person3 = array(
    'first' => 'John',
    'last' => 'Doe',
    'job' => 'Teacher'
);

echo '<br>';
var_dump($person3);
echo '<br>';
var_dump((object)$person3);
echo '<br>';

$o = (object)$person3;
echo $o->first;
