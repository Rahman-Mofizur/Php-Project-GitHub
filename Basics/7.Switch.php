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
    $favColor = "Green";

    switch ($favColor) {
        case "Red":
            echo "Your favourite Color is Red!";
            break;
        case "Blue":
            echo "Your favourite Color is Blue!";
            break;
        case "Green":
            echo "Your favourite Color is Green!";
            break;
        default:
            echo "Your favourite Color is neither Red, Blue, nor Green!";
    }
    ?>
</body>

</html>