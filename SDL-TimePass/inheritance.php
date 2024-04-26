<?php

class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function calculateArea() {
        // Base class method, to be overridden by subclasses
        return 0;
    }
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        parent::__construct("Triangle");
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        parent::__construct("Square");
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        parent::__construct("Circle");
        $this->radius = $radius;
    }

    public function calculateArea() {
        return M_PI * $this->radius * $this->radius;
    }
}

if (isset($_POST['shape'])) {
    $selectedShape = $_POST['shape'];

    switch ($selectedShape) {
        case 'triangle':
            $t_base = $_POST['tri_base'];
            $t_height = $_POST['tri_height'];
            $triangle = new Triangle($t_base, $t_height);
            echo "Area of " . $triangle->getName() . ": " . $triangle->calculateArea();
            break;

        case 'square':
            $side = $_POST['sq_base'];
            $square = new Square($side);
            echo "Area of " . $square->getName() . ": " . $square->calculateArea();
            break;

        case 'circle':
            $rad = $_POST['c_rad'];
            $circle = new Circle($rad);
            echo "Area of " . $circle->getName() . ": " . $circle->calculateArea();
            break;

        default:
            echo "Please select a shape.";
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape Area Calculator</title>
</head>
<body>

<form method="post" action="">
    <h3>Select a shape:</h3>
    <input type="radio" name="shape" value="triangle"> Triangle<br>
    <input type="number" name="tri_base" placeholder="Base">
    <input type="number" name="tri_height" placeholder="Height"><br><br>
  
    <input type="radio" name="shape" value="square"> Square<br>
    <input type="number" name="sq_base" placeholder="Side"><br><br>
  
    <input type="radio" name="shape" value="circle"> Circle<br>
    <input type="number" name="c_rad" placeholder="Radius"><br><br>
    <input type="submit" value="Calculate Area">
</form>
</body>
</html>
