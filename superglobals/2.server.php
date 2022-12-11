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

    // Php Server : 
    // Tells us about File paths, headers, HTTP paths and script locations.
    echo $_SERVER['PHP_SELF'];  // /php/superglobals/2.server.php
    echo "<br><br>";
    echo $_SERVER['SERVER_NAME'];  // localhost
    echo "<br><br>";
    echo $_SERVER['HTTP_HOST'];    // localhost
    echo "<br><br>";
    echo $_SERVER['HTTP_REFERER'];  // http://localhost/php/superglobals/
    echo "<br><br>";
    echo $_SERVER['HTTP_USER_AGENT'];  // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
    echo "<br><br>";
    echo $_SERVER['SCRIPT_NAME']; // /php/superglobals/2.server.php

    ?>
</body>

</html>