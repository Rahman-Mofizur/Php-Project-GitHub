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
    echo "Your Inputs:";
    echo "<br><br>";
    echo "Name: " . $_POST['name'];
    echo "<br>";
    echo "E-Mail: " . $_POST['email'];
    echo "<br>";
    echo "ID: " . $_POST['id'];
    echo "<br>";
    echo "Comment: " . $_POST['comment'];
    echo "<br>";
    echo "Gender: " . $_POST['gender'];
    ?>
</body>

</html>