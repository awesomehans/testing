<?php

//header('Content-Type: text/plain'); //you can't have html tags anymore
$file = "./fileget.txt";
$document = file_get_contents($file);
echo $document;

echo '<br>';
$lines = explode("\n", $document);
foreach ($lines as $newline){
    echo '<b>' . $newline . '</b><br>';
}
