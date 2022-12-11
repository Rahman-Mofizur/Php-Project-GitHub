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
    date_default_timezone_set("Asia/Dhaka");
    // h = hour(12-h format, i = Minute, s = second)
    // d_m_y = date, month, year.
    $t = date("d/m/y h:i:s");
    echo $t;
    ?>
</body>

</html>