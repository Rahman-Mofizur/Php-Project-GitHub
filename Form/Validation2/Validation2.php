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
    echo "<h3>Your Inputs:</h3>";
    echo "Name: " . $_POST['name'];
    echo "<br><br>";
    echo "E-mail: " . $_POST['email'];
    echo "<br><br>";
    echo "Website: " . $_POST['website'];
    echo "<br><br>";
    echo "Comment: " . $_POST['comment'];
    echo "<br><br>";
    echo "Gender: " . $_POST['gender'];
    echo "<br><br>";
    ?>
</body>

</html>