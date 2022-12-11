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
    // Indexed Array
    $furniture = array("Table", "Chair", "Bed");
    echo "We need $furniture[0], $furniture[1] and $furniture[2].<br><br>";
    $lengthOfArray = count($furniture);

    sort($furniture);
    for ($i = 0; $i < $lengthOfArray; $i++) {
        echo "this is a $furniture[$i]. <br><br>";
    }

    // Associated Array
    $person = array("Mofiz" => 23, "Ruman" => 26, "Babu" => 24);
    echo "This is Mofiz and he is " . $person['Mofiz'] . " years old! <br><br>";

    foreach ($person as $name => $age) {
        echo "His name is $name and he is $age years old!<br><br>";
    }

    // Multidimentional Array
    $cars = array(array("Volvo", "good", 18), array("BMW", "good", 13), array("Toyota", "medium", 52), array("Rolls Royce", "finest", 2));
    for ($row = 0; $row <= 3; $row++) {
        for ($col = 0; $col <= 2; $col++) {
            echo "<p>" . $cars[$row][$col] . "</p>";
        }
        echo "<br>";
    }
    ?>
</body>

</html>