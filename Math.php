<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <?php
    $x = $_GET['x'];
    $y = $_GET['y'];
    echo "x: " . $x . "<br/>";
    echo "y: " . $y . "<br/>";
    echo " $x + $y = " . ($x + $y) . "<br/>";
    echo " $x - $y = " . ($x - $y) . "<br/>";
    echo " $x * $y = " . ($x * $y) . "<br/>";
    echo " $x / $y = " . ($x / $y) . "<br/>";
    echo " $x % $y = " . ($x % $y) . "<br/>";
    echo "x/y: " . ($x/$y) . "<br/>";
    echo "x%y: " . ($x%$y) . "<br/>";
    echo "x++: " . ($x++) . "<br/>";
    echo "++y: " . (++$y) . "<br/>";
    echo "x == y: " . ($x == $y) . "<br/>";
    echo "x != y: " . ($x != $y) . "<br/>";
    echo "x < y: " . ($x < $y) . "<br/>";
    echo "x > y: " . ($x > $y) . "<br/>";
    echo "x <= y: " . ($x <= $x) . "<br/>";
    echo "x >= y: " . ($x >= $y) . "<br./>"
    ?>
</body>
</html>