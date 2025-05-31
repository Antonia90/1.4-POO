

    <?php
    //Ejercicio 1

    class Employee
    {
        public string $name;
        public float $salary;

        function __construct(string $name, float $salary)
        {
            $this->name = $name;
            $this->salary = $salary;
        }
        function getName()
        {
            return $this->name;
        }

        function print() : void
        {
            if ($this->salary > 6000) {
                echo $this->name . " debes pagar impuestos";
            } else {
                echo $this->name . " no debes pagar impuestos";
            }
        }
    }

    $empleado = new Employee("Marta", 9000);
    echo $empleado->getName();
    echo "<br>";
    $empleado->print();

    //Ejercicio 2

    abstract class Shape
    {
        public float|int $height;
        public float|int $width;
        function __construct(float|int $height, float|int $width)
        {
            $this->height = $height;
            $this->width = $width;
        }

        function getHeight()
        {
            return $this->height;
        }
        function getWidth()
        {
            return $this->width;
        }
        abstract function calculateArea() : float;
    }

    class Triangle extends Shape{

        public function calculateArea() : float {
            return ($this->height * $this->width) / 2;
        }
    }

    class Rectangle extends Shape{
        public function calculateArea(): float
        {
            return $this->height * $this->width;
        }
    }
    echo "<br>";
    $rectangulo = new Rectangle(2, 5.5);
    echo "El área del rectángulo es: " . $rectangulo->calculateArea();
    echo "<br>";
    $triangulo = new Triangle(3, 4);
    echo "El área del triángulo es: " . $triangulo->calculateArea();
    ?>
