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
    $base = 5;
    echo pi();
    echo "<br>";
    echo $base * pi();
    echo "<br>";
    echo min(10, 30, 60, -100, -2000, 7070);
    echo "<br>";
    echo max(10, 30, 60, -100, -2000, 7070);
    echo "<br>";
    echo sqrt(64);
    echo "<br>";
    echo round(0.98);
    echo "<br>";
    echo round(5.15);
    echo "<br>";
    echo round(3.8);
    echo "<br>";
    echo rand();
    echo "<br>";
    echo rand(10, 100);  // Random number from 10 to 100.
    ?>
</body>

</html>