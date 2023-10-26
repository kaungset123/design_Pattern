<?php

require_once "ShapeFacade.php";

class User1 {
    public function __construct()
    {
        $obj = new ShapeFacade();
        $obj->drawCircle();
        echo "<br>";
        $obj->drawSquare();
        echo "<br>";
        $obj->drawRectangle();
        echo "<br>";
    }
}
new User1();