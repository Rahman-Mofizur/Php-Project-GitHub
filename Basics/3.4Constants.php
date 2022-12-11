<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    define("Welcome_note", "Hi There! How are You?");
    echo Welcome_note;
    echo "<br>";

    // Php Array
    $cars = array("BMW", "Marcedes", "Toyota", "Lexus");
    echo $cars[0 + 3];
    echo "<br>";

    // Constant Array
    define("Cars", ["Toyota", "BMW", "Marcedes"]);
    echo Cars[0];
    echo "<br>";
    echo Cars[1];
    ?>
</body>

</html>