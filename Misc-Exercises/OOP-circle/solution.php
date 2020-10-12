<?php

/* 
Your task is to create a Circle constructor that creates a circle with a radius 
provided by an argument. The circles constructed must have two getters 
getArea() (PIr^2) and getPerimeter() (2PI*r) which give both respective areas and 
perimeter (circumference).

For help with this class, I have provided you with a Rectangle constructor 
which you can use as a base example.

Examples
$circy = new Circle(11);
$->getArea();

// Should return 380.132711084365

$circy = new Circle(4.44);
$->getPerimeter();

// Should return 27.897342763877365
*/

Class Circle 
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi()*$this->radius*$this->radius;
    }

    public function getPerimeter() {
        return 2*pi()*$this->radius;
    }

}

$circ1 = new Circle(11);
echo $circ1->getArea();

$circ2 = new Circle(4.44);
echo $circ2->getPerimeter();
