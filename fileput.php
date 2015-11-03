<?php

$file = "./fileput.txt";
$write = "this is line three\n";

//file_put_contents($file, $write); // default is overwrite
file_put_contents($file, $write, FILE_APPEND); // default is overwrite
