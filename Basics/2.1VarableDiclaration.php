<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Page</title>
</head>

<body>
    <?php

    // Global Variables
    $x = 5;
    $y = 10;

    $a = 60;
    $b = 40;
    $sum = 0;
    function myTest()
    {
        // Local Variables
        $x = 1000;
        $y = 500;
        echo $x + $y;
        echo "<br>";

        // You can access Global Variables by using global datatype
        global $a, $b;
        echo "This is a global variable 'a' & the value is =  $a<br>";

        // You can also access Global Variables by using Array of GLOBALS['index']
        echo  $GLOBALS['sum'] = $GLOBALS['a'] + $GLOBALS['b'];
        echo "<br>";
    }

    myTest();
    echo $x + $y;
    ?>
</body>

</html>