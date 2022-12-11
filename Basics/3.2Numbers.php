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
    $a = 4;
    $b = 2.5;
    echo $a * (int)$b; // Type Casting

    echo "<br>";
    echo var_dump($a);
    echo "<br>";
    var_dump(is_int($a));
    echo "<br>";
    var_dump(is_int($b));

    // Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).
    ?>
</body>

</html>