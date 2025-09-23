<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My PHP Application</title>
    </head>
    <body>
        <?php
        $name = "World";
        $age = 21;
        $courses = array("PHP", "JavaScript", "HTML", "C");
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "3rd Course: " . $courses[2] . "<br>";
        ?>
    </body>
</html>