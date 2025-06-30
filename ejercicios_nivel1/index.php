<?php
require_once 'Employee.php';
require_once 'Shape.php';
require_once 'Rectangle.php';
require_once 'Triangle.php';

echo "<h1>Ejercicio 1 </h1>";
$empleado = new Employee("Marta", 9000);
echo $empleado->getName();
echo "<br>";
$empleado->print();


echo "<h1>Ejercicio 2 </h2>";
echo "<br>";
$rectangulo = new Rectangle(2, 5.5);
echo "El área del rectángulo es: " . $rectangulo->calculateArea();
echo "<br>";
$triangulo = new Triangle(3, 4);
echo "El área del triángulo es: " . $triangulo->calculateArea();
