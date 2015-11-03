<?php

$accounts = mysql_connect("localhost:8000","root","314159")
        or die (mysql_error());

mysql_select_db("accounts",$accounts);

$sql = "INSERT INTO users2(Username, Password, First, Last) VALUES 
        ('Hans', '123456', 'Hans', 'df')";

mysql_query($sql, $accounts);

echo 'worked?';