<?php

require_once "Shape.php";
require_once "Circle.php";
require_once "Square.php";
require_once "Rectangle.php";

class ShapeFacade {
    private $circle,$square,$rectangle;

    public function __construct()
    {
        $this->circle = new Circle();
        $this->square = new Square();
        $this->rectangle = new Rectangle();
    }

    public function drawCircle(){
        $this->circle->draw();
    }

    public function drawSquare(){
        $this->square->draw();
    }

    public function drawRectangle(){
        $this->rectangle->draw();
    }
}