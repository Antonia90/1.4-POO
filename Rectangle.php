<?php
class Rectangle extends Shape
{
    public function calculateArea(): float
    {
        return $this->height * $this->width;
    }
}
