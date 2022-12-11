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
    $name = "Mohammed Mofizur Rahman";

    echo strlen($name);
    echo "<br><br>";

    var_dump($name);
    echo "<br><br>";

    echo str_word_count($name);
    echo "<br><br>";

    echo strrev($name);
    echo "<br><br>";

    echo strpos($name, "Rahman");
    echo "<br><br>";

    echo str_replace("Mofizur Rahman", "Eiman", $name);
    echo "<br><br>";

    ?>
</body>

</html>