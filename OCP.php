<?php
 // the following code illustates how the Open-closed principle(OCP) works in PHP


 interface Shape{
     public function area();
 }
 
 class Rectangle implements Shape{
     private $x;
     private $y;

     public function __construct($x, $y)
     {
         $this->x = $x;
         $this->y = $y;
     }

     public function area() : int|float
     {
         return $this->x * $this->y;
     }
 }

 class Square implements Shape{
     private $x;

     public function __construct($x)
     {
         $this->x = $x;
     }

     public function area() : int|float
     {
         return $this->x ** 2;
     }

 }

class Circle implements Shape{
    private $pi; // ~3.14
    private $r; // radius

    public function __construct($r) 
    {
        $this->pi = 3.14;
        $this->r = $r;
    }

    public function area() : int|float
    {
        return $this->pi * ($this->r ** 2);
    }
}

class Triangle implements Shape{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function area() : int|float
    {
        return ($this->x * $this->y) / 2;
    }
}

class AreaCalculator{
    private $shapes;

    public function __construct(Shape $shape)
    {
        $this->shapes = $shape;
    }

    public function display_area() : void
    {
        echo "{$this->shapes->area()}\n";
    }
}

$rect = new AreaCalculator(new Rectangle(5,10));
$square = new AreaCalculator(new Square(5));
$circle = new AreaCalculator(new Circle(5));
$triangle = new AreaCalculator(new Triangle(5, 10));


$rect->display_area();
$square->display_area();
$circle->display_area();
$triangle->display_area();
