# 🧠 Ejercicios de Programación Orientada a Objetos en PHP

Este repositorio contiene dos ejercicios básicos de **Programación Orientada a Objetos (POO)** en PHP. El objetivo es practicar la creación de clases, uso de atributos y métodos, herencia, y lógica de control según principios fundamentales de POO.

---

## 📚 Nivel 1

### ✅ Ejercicio 1: `Employee`

Crea una clase `Employee` con los siguientes elementos:

- Atributos: `nombre` y `sueldo`
- Método `initialize($nombre, $sueldo)` para asignar valores.
- Método `print()` que muestra el nombre y si debe pagar impuestos (cuando el sueldo supera los 6000).

> 💡 Este ejercicio refuerza el uso de clases, métodos, atributos y estructuras condicionales.

---

### ✅ Ejercicio 2: `Shape` con herencia

Define una clase base `Shape` con:

- Atributos: `ancho` y `alto`
- Constructor que recibe los valores como parámetros

Luego se definen dos subclases:

- `Triangulo`: que implementa el método `area()` para calcular el área del triángulo.
- `Rectangulo`: que implementa el método `area()` para calcular el área del rectángulo.

> 💡 Este ejercicio introduce el concepto de **herencia**, y cómo subclases pueden extender y especializar una clase base.

## 📚 Nivel 2

- Ejercicio 1:

Crea la clase PokerDice. Las caras de un dado de póquer tienen las siguientes figuras: As, K, Q, J, 7 y 8.
Crea el método throw que no hace otra cosa que echar el dado, es decir, genera un valor aleatorio para el objeto al que se le aplica el método.
Crea también el método shapeName, que diga cuál es la figura que ha salido en el último tirón del dado en cuestión.
Realiza una aplicación que permita echar cinco dados de póquer a la vez.
Además, programa el método getTotalThrows que debe mostrar el número total de tiradas entre todos los dados.

---

## Requisitos

-PHP 7.4 o superior

-Editor de texto o IDE compatible (VS Code, PhpStorm, etc.)

## Instalación

1.Clona este repositorio: git clone <https://github.com/Antonia90/1.4-POO.git>
2.Accede al directorio del proyecto

## ▶️ Ejecución Para visualizar los ejercicios

Asegúrate de que el servidor PHP esté corriendo (opcional, recomendado): php -S localhost:8000

Abre tu navegador y accede a: <http://localhost:8000/poo_nivel_1.php>

O simplemente abre el archivo ejercicios_nivel_1.php directamente en tu navegador (funciona para scripts simples).
