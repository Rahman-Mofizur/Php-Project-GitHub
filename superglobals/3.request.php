<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Here Action = Same page! -->
    <form method="post" action="<?php
                                echo $_SERVER['PHP_SELF'];
                                ?>">
        Name: <input type="text" name="fullName">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = htmlspecialchars($_REQUEST['fullName']);

        if (empty($name)) {
            echo "Name is Empty!";
        } else {
            echo $name;
        }
    }
    ?>
</body>

</html>