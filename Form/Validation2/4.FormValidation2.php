<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <!-- Defining Form Variables -->
    <?PHP
    $name = "";
    $email = "";
    $website = "";
    $comment = "";
    $gender = "";

    $nameErr = "";
    $emailErr = "";
    $websiteErr = "";
    $commentErr = "";
    $genderErr = "";



    // Collecting data through POST method and checking if EMPTY or not!
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Name Required!
        if (empty($_POST['name'])) {
            $nameErr = "Name is Required!";  // Didn.t work!
        } else {
            $name = test_data($_POST['name']);
        }

        // Email Reuired!
        if (empty($_POST['email'])) {
            $emailErr = "Email is Required!";  // Didn't work
        } else {
            $email = test_data($_POST['email']);
        }

        // Website is Optional...
        if (empty($_POST['website'])) {
            $websiteErr = "";
        } else {
            $website = test_data($_POST['website']);
        }

        // Comment is Optional...
        if (empty($_POST['comment'])) {
            $commentErr = "";
        } else {
            $comment = test_data($_POST['comment']);
        }

        // Gender is Required!
        if (empty($_POST['gender'])) {
            $genderErr = "Gender is Required!";
        } else {
            $gender = test_data($_POST['gender']);
        }
    }


    //  Checking the extra spaces, Tabs and backslashes (/) 
    function test_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <!-- Form creation with a path for output -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name:
        <input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>

        E-mail:
        <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        Website:
        <input type="text" name="website">
        <span> <?php echo $commentErr; ?></span>
        <br><br>

        Comment:
        <textarea name="comment" cols="30" rows="10"></textarea>
        <span><?php echo $commentErr; ?></span>
        <br><br>

        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="others">Others
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>



    <?php
    // Shoeing output
    echo "<h3>Your Inputs:</h3>";
    echo "Name: " . $name;
    echo "<br><br>";
    echo "E-mail: " . $email;
    echo "<br><br>";
    echo "Website: " . $website;
    echo "<br><br>";
    echo "Comment: " . $comment;
    echo "<br><br>";
    echo "Gender: " . $gender;
    echo "<br><br>";
    ?>
</body </body>

</html>