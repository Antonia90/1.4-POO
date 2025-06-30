    
    <?php

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
        abstract function calculateArea(): float;
    }
