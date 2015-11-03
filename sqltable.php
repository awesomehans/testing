<?php

$accounts = mysql_connect("localhost:8000","root","314159")
        or die (mysql_error());

mysql_select_db("accounts",$accounts);

$sql = "CREATE TABLE users2
(ID int NOT NULL AUTO_INCREMENT,
 PRIMARY KEY(ID),
 Username varchar(20),
 Password varchar(20),
 First varchar(20),
 Last varchar(20),
 About text)";
       
mysql_query($sql, $accounts);