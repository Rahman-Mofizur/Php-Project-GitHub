<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Form Creation -->
    <form method="post" action="/php/Form/validation1/validationwelcome.php">
        Name: <input type="text" name="name" placeholder="Your Name"><br><br>
        E-mail: <input type="email" name="email" placeholder="Your Email"><br><br>
        ID: <input type="text" name="id" placeholder="ID"><br><br>
        Comment: <textarea name="comment" cols="30" rows="10" placeholder="Write something about youself!"></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="others">Others
        <br><br>
        <input type="submit">
    </form>

    <?php
    // Data Collection through Post method!
    if ($_SERVER['REQUEST_METHOD'] == "post") {
        $name = testData($_POST['name']);
        $email = testData($_POST['email']);
        $id = testData($_POST['id']);
        $comment = testData($_POST['comment']);
        $gender = testData($_POST['gender']);
    }

    // Function for checking extra space, Tab, Slashes ( / )
    function testData($data)
    {
        $data = trim($data);  // trim()= trim extra spaces, Tabs
        $data = stripslashes($data);  // stipslashes()= delete Slashes ( / ) 
        $data = htmlspecialchars($data);  // htmlspecialchars()= Secure the data of the user! 
    }
    ?>
</body>

</html>