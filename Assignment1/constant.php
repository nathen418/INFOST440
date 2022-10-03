<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Using constants in PHP</title>
</head>

<body>
    <h2>Using constants in PHP</h2>
    <?php
    echo "This code will show you how to use constants in PHP, by using the define() function on 4 different data types";
    echo "The first constant is a string:<br>";
    define("STRING", "This is a string constant");
    echo STRING;
    echo "<br><br>";
    echo "The second constant is an integer:<br>";
    define("INTEGER", 123);
    echo INTEGER;
    echo "<br><br>";
    echo "The third constant is a float:<br>";
    define("FLOAT", 123.456);
    echo FLOAT;
    echo "<br><br>";
    echo "The fourth constant is a boolean:<br>";
    define("BOOLEAN", true);
    echo BOOLEAN;
    echo "<br><br>";
    echo "The fifth constant is an array:<br>";
    define("ARRAY", array("This", "is", "an", "array", "constant"));
    echo array(0) . " " . array(1) . " " . array(2) . " " . array(3) . " " . array(4);
    echo "<br><br>";
    echo "The sixth constant is a class:<br>";
    class MyClass
    {
        const CONSTANT = 'This is a class constant';
    }
    echo MyClass::CONSTANT;
    echo "<br><br>";
    echo "The seventh constant is null:<br>";
    define("NULL", null);
    echo NULL;
    echo "<br><br>";
    echo "The eigth constant is a resource:<br>";
    define("RESOURCE", fopen("constant.php", "r"));
    echo RESOURCE;
    echo "<br><br>";
    ?>
    <img src="Problem7.png">
</body>

</html>