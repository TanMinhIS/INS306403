<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = array(34, 15, 88, 2, 19);
    $smallest = findSmallest($arr);
    function findSmallest($arr) {
        $smallest = $arr[0];
        foreach ($arr as $value) {
            if ($value < $smallest) {
                $smallest = $value;
            }
        }
        return $smallest;
    }
    ?>
    The smallest number in the array is: <?php echo $smallest; ?>
</body>
</html>