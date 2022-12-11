<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome
        <?php
        echo $_GET['name'];
        ?>
    </h1>
    <h2>Your Email address is =
        <?php
        echo $_GET['email'];
        ?>
    </h2>
</body>

</html>