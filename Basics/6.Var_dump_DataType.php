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
    $x = 5;
    $y = 5.67;
    $n = null;
    $bool = true;
    $bool2 = false;
    $str = "Mohammed Mofizur Rahman";
    $ch = "H";
    $car = array("Volvo", "Toyota", "Marcedes");

    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";
    var_dump($n);
    echo "<br>";
    var_dump($bool);
    echo "<br>";
    var_dump($bool2);
    echo "<br>";
    var_dump($str);
    echo "<br><br>";
    echo "This is the length of my name = " . strlen($str);
    echo "<br>";
    var_dump($ch);
    echo "<br>";
    var_dump($car);
    echo "<br>";
    echo $car[0];
    // Learn the output of an Array!
    ?>
</body>

</html>