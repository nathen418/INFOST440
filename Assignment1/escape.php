<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>String Escaping</title>
</head>

<body>
    <h2>String Escaping in PHP</h2>
    <br><br>
    <?php
    // This is a PHP comment
    $variable = ". Hello I am a string variable";

    echo "The PHP varible name is \$variable<br>";
    echo "This is a PHP variable$variable. Notice how the variable is not escaped";
    echo "<br>";
    echo "This is a PHP var surrounded in escaped quotes\"$variable\". Notice how the variable is escaped and shows up as a string";
    echo "<br>";
    ?>
    <img src="Problem3.png">
</body>

</html>