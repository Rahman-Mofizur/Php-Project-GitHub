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
    // Type: 01
    echo "This is echo!";

    // Type: 02
    echo "<h1>This is a H1 Command within echo! </h2>";
    echo "This is a bracket <br>";

    // Type: 03
    echo "I'm learning PHP!";

    // Type: 04
    echo "This ", "String ", "is ", "made ", "with multiple parameters divided by Commas!";


    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;
    echo "<h1>" . $txt2 . "</h1>";
    echo "<h2> Wait!  $txt1  </h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo "Study PHP at $txt2 <br>";
    echo $x + $y;


    // Print - Exactly same as echo!

    print "<h1>" . $txt2 . "</h1>";
    print "<h2> Wait!  $txt1  </h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print "Study PHP at $txt2 <br>";
    print $x + $y;




    ?>
</body>

</html>