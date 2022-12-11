<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Create a form and put Request method on POST -->
    <!-- Display information on the same page ['PHP_SELF'] -->
    <form method="POST" action="<?php
                                echo $_SERVER['PHP_SELF'];
                                ?>">
        <p>Name: <input type="text" name="fName"></p>
        <p>ID: <input type="text" name="id"></p>
        <p>CGPA: <input type="text" name="cgpa"></p>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {    // Php server Request Method = "POST"
        $name = htmlspecialchars($_REQUEST['fName']);  // Collecting data by Request method
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