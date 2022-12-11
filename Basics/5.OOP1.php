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
    class car
    {
        private $color, $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            echo "This is my car. My car is a $this->color car and its a $this->model<br>";
        }
    }

    $myCar = new car("Red", "Volvo");
    echo $myCar->message();

    ?>
</body>

</html>