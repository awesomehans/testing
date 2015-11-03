<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="isset2.php" method="GET">
            <input type="number" name="num1"> + 
            <input type="number" name="num2">
            <input type="submit" value="Add">
            
            
        </form>


<?php

if (isset($_GET['num1'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $total = $num1 + $num2;
    echo '<br>The total is' . $total;
}
?>

    </body>
</html>