<?php

require_once "Circle.php";
require_once "Rectangle.php";
require_once "Square.php";

class User2 {
    public function __construct()
    {$obj = new ShapeFacade();
        $obj->drawCircle();
        echo "<br>";
        $obj->drawSquare();
        echo "<br>";
        $obj->drawRectangle();
        echo "<br>";
    }
}
new User2();