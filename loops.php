<?php

$arr = ['Jeff','Collis','Tash','Amanda'];

foreach ($arr as $q) {
    echo $q . '<br>';
}

for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i] . '<br>';
}

$i=0;
while ($i < count($arr)){
    echo $arr[$i] . "<br>";
    $i++;
}