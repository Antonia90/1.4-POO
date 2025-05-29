

    <?php
    //Ejercicio 1

    class Employee
    {
        public $nombre;
        public $sueldo;

        function __construct($nombre, $sueldo)
        {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }
        function get_nombre()
        {
            return $this->nombre;
        }

        function imprimir()
        {
            if ($this->sueldo > 6000) {
                echo $this->nombre . " debes pagar impuestos";
            } else {
                echo $this->nombre . " no debes pagar impuestos";
            }
        }
    }

    $empleado = new Employee("Marta", 9000);
    echo $empleado->get_nombre();
    echo "<br>";
    $empleado->imprimir();

    //Ejercicio 2

    abstract class Shape
    {
        public $height;
        public $width;
        function __construct($height, $width)
        {
            $this->height = $height;
            $this->width = $width;
        }

        function get_height()
        {
            return $this->height;
        }
        function get_width()
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
