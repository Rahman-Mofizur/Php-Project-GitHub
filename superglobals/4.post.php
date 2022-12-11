<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php
                                echo $_SERVER['PHP_SELF']
                                ?>">
        Name: <input type="text" name="fullName">
        <input type="submit">
    </form>


    <?php
    // $_POST
    // Collects form Data after submitting HTML form with method = “post”.
    // Used to Pass Variables!

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['fullName'];
        if (empty($name)) {
            echo "You didn't input your name!";
        } else {
            echo "Your name is $name";
        }
    }

    ?>
</body>

</html>