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
    $number = 5;

    switch ($number) {
        case 1:
            echo "You have choosen 1";
            break;
        case 2:
            echo "You have choosen 2";
            break;
        case 3:
            echo "You have choosen 3";
            break;
        default:
            echo "You have not choosen any number!";
    }
    ?>
</body>

</html>