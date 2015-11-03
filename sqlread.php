<?php

$accounts = mysql_connect("localhost:8000","root","314159")
        or die (mysql_error());

mysql_select_db("accounts",$accounts);

$sql = "SELECT * FROM users2";

$result = mysql_query($sql, $accounts);

while($row = mysql_fetch_array($result)){ // check if OEF and gets data at same time
    echo $row['Username'] . "'s first name is " . $row['First'] . '<br>';
};

mysql_data_seek($result, 0); // reset pointer to start of file
echo '<br>';

for ($i = 1; $i <= 2; $i++) {
    $row = mysql_fetch_array($result);
    echo $row['Username'] . "'s first name is " . $row['First'] . '<br>';
}