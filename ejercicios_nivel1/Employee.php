

    <?php


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










    ?>
