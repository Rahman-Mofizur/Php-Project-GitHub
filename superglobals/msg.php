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
    echo $_SERVER['PHP_SELF'];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = htmlspecialchars($_REQUEST['fName']);
        $id = htmlspecialchars($_REQUEST['id']);
        $cgpa = htmlspecialchars($_REQUEST['cgpa']);
        if (empty($name) || empty($id) || empty($cgpa)) {
            echo "Either Name, ID or CGPA field is empty!";
        } else {
            echo "Name = $name";
            echo "<br><br>";
            echo "ID = $id";
            echo "<br><br>";
            echo "CGPA = $cgpa";
            echo "<br><br>";
        }
    }
    ?>
</body>

</html>