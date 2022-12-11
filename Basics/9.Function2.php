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
    function person(string $name, int $age = 23)
    {
        echo "Name = $name <br>Age = $age<br><br><br>";
    }

    person("Abdullah", 15);
    person("Afia", 11);
    person("Mofiz");  // Not declaring the Age! But still get an age!
    person("Farzana", 21);
    ?>
</body>

</html>