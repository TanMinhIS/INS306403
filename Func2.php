<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'Func.php';
    echo "<br>";
    $a = 5;
    $b = 10;
    echo("Number a is: $a <br>");
    echo("Number b is: $b <br>");
    echo("After swapping <br>");
    function swap(&$x, &$y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
    swap($a, $b);
    echo("Number a is: $a <br>");
    echo("number b is: $b <br>");
    ?>
</body>
</html>