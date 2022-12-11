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

    /*
    1. A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    2. A variable name cannot start with a number
    3. Variable names are case-sensitive ($age and $AGE are two different variables)
*/

    // Variables are case sensitive!
    // Php Variables are dynamic!
    $color = "red";
    $name = "Mohammed Mofizur Rahman";
    $id = "19-40120-1";
    $cgpa = 3.66;

    echo "My id is =  $id! <br>";
    echo "I am $name <br>";

    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>"; // Will not work!
    echo "My name is " . $name . "<br>";
    echo "My id is " . $id . "<br>";
    echo "My CGPA is " . $cgpa . "<br>";


    ?>
</body>

</html>