<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'Chris'and $password == 'password1')
{
    echo 'Welcome to the secret website, you are in';
}
 else 
{
     echo 'Wrong username or password';
}