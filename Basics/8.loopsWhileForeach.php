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
    // While Loop
    $n = 1;
    while ($n <= 5) {
        echo "This is $n <br><br>";
        $n++;
    }
    echo "While loop ends here! <br><br><br>";

    // do While
    $a = 10;
    do {
        echo "This is $a <br><br>";
        $a++;
    } while ($a <= 10);
    echo "do While loop ends here! <br><br><br>";


    // for Loop
    $p = 100;
    for ($i = 10; $i <= $p; $i += 10) {
        echo "This is $i <br><br>";
    }
    echo "For loop ends here! <br><br><br>";

    // Foreach Loop 1
    echo "Foreach loop 1: <br><br>";

    $color = array("Blue", "Green", "Red");
    foreach ($color as $values) {
        echo "$values is Beautiful!<br><br>";
    }

    // Foreach Loop 2
    echo "<br><br>Foreach loop 2: <br><br>";
    $person = array("Mofiz" => "23", "Ruman" => "26", "Babu" => "24");
    foreach ($person as $name => $age) {
        echo "$name is $age years old!<br><br>";
    }
    echo "Foreach loop ends here! <br><br><br>";

    ?>
</body>

</html>