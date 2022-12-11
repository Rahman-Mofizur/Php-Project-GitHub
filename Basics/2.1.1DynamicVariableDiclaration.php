<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?PHP
    // isset($x);
    // isset($y);
    $x = $_REQUEST['x'] ?? "";
    $y = $_REQUEST['y'] ?? "";
    // if (isset($_REQUEST['x']) && isset($_REQUEST['y'])) {
    //     // echo $x+$y;

    // } else {
    //     $x = 100;
    //     $y = 50;
    // }
    echo $x;
    echo $y;
    ?>
</body>

</html>