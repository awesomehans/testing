<?php

$post = array(
    'author'       => 'Jeffrey Way',
    'title'        => 'My Awesome Post',
    'body'         => 'Here is the body',
    'publish-date' => '6-10-2012'
);

$email = "<h1>{$post['title']}</h1><p>By: {$post['author']}</p><div>{$post['body']}";

echo $email;

$email = <<<EOT
    <h1>{$post['title']}</h1>
    <p>By: {$post['author']}</p>
    <div>{$post['body']}</div>
EOT;
echo '<br>';
echo $email;

extract($post); //creates variables from array tags
$email = <<<EOT
    <h1>$title</h1>
    <p>By: $author</p>
    <div>$body</div>     
EOT;
echo '<br>';
echo $email;