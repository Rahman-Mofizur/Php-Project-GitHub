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
    <?php
    // Setting up Variables
    $name = $email = $website = $comment = $gender = "";
    $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";

    // Collecting data from the formusing Post method!
    // Step 01: Checking whether the method is in POST or not!
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Name Required!
        if (empty($_POST['name'])) {
            $nameErr = "Name is Required field!";
        } else {
            $name = test_data($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST['email'])) {
            $emailErr = "Email is Required field!";
        } else {
            $email = test_data($_POST['email']);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }


        if (empty($_POST['website'])) {
            $website = "";
        } else {
            $website = test_data($_POST['website']);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }


        if (empty($_POST['comment'])) {
            $comment = "";
        } else {
            $comment = test_data($_POST['comment']);
        }

        if (empty($_POST['gender'])) {
            $genderErr = "Gender is required field!";
        } else {
            $gender = test_data($_POST['gender']);
        }
    }


    // Function for checking for Extra spaces, Tabs, and Backslashes (\)
    function test_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <!-- Form Creation with Post method and Must Fill up * -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name">
        <span class="error">*
            <?php echo $nameErr; ?></span>
        <br><br>
        Email: <input type="text" name="email">
        <span class="error">*
            <?php echo $emailErr; ?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error">
            <?php echo $websiteErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" cols="30" rows="10"></textarea>
        <span class="error">
            <?php echo $commentErr; ?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="others">Others
        <span class="error">*
            <?php echo $genderErr; ?></span>
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
</body>

</html>