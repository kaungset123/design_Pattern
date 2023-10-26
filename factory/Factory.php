<?php

interface  Car{

}

class BMW implements Car{
    public function getName(){
        echo "I am ". __CLASS__ . " car";
    }
}

class Chevolet implements Car{
    public function getName(){
        echo "I am ". __CLASS__ . " car";
    }
}
class CarMaker{
    public function make($type){
        if($type ==  "BMW"){
            return new BMW();
        }elseif($type == "Chevolet"){
            return new Chevolet();
        }
    }
}

 function outCar(Car $car){
    $car->getName();
}

$car1 = new CarMaker;
$beamdeblu = $car1->make("BMW");
$beamdeblu->getName();

$car2 = new CarMaker;
$chev = $car1->make("Chevolet");
$chev->getName();
echo "<br>";
outCar($chev);
outCar($beamdeblu);
