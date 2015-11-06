<?php

require_once 'vendor/autoload.php';

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/template');

$form = <<< XYZ
    <form method="post">
    First name: <input name="firstname" type="text"><br>
    Age: <input name="age" type="number"><br>
    <input type="submit" value="Register">
    </form>
XYZ;

$app->get('/login', function() use ($app) {
    $app->render("login.html.twig");
});

$app->post('/login', function() use ($app, $loginForm) {
    $username = $app->request->params('username');
    $password = $app->request->params('password');

    $errorList = array();
    if ((strlen($username) < 2) || (strlen($password) < 2)) {
        array_push($errorList, "Username and password must be at least 2 characters long");
    }
    //
    if (!$errorList) {
        echo "<h2>Login successful</h2>";
    } else {
        // Submission failed - errors
        $app->render("login.html.twig", array("errorList" => $errorList));
    }
});


$app->get('/register', function () {
    global $form;
    echo $form;
});

$app->post('/register', function () use ($app) {
    $firstname = $app->request->params('firstname');
    $age = $app->request->params('age');

    $errorList = array();
    if (strlen($firstname) < 2) {
        array_push($errorList, "Name must be at least 2 characters long");
    }
    if ($age < 0 || $age > 150) {
        array_push($errorList, "Age must be between 0 and 150");
    }
    //
    if (!$errorList) {
        echo "<h2>Submission successful</h2>";
        echo "Received name " . $firstname . "<br>";
        echo "Received age " . $age . "<br>";
    } else {
        // Submission failed - errors
        foreach ($errorList as $error) {
            echo "<p>Error: $error</p>";
        }
        echo $form;
    }
});

$app->get('/hello/:name', function ($name) use ($app) {
    $app->render("hello.html.twig", array ("name" => $name));    
});

$app->get('/', function() {
    echo "This is the index page";
});

$app->run();

