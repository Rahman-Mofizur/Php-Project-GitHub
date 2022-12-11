<!DOCTYPE html>
<html>

<body>

    <?php

    function myTest($y)
    {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
        echo "the number 2 is = " . $y;
    }
    myTest(10);

    // using x outside the function will generate an error
    echo "<p>Variable x outside function is: $x</p>";
    ?>

</body>

</html>