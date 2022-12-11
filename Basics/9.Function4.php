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
    function add_five(&$value)
    {
        return $value += 5;
    }

    $num = 2;
    echo add_five($num);
    ?>
</body>

</html>