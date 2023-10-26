<?php

class Toyota {
    public function __construct()
    {
        echo "We'e created " . __CLASS__ . " car";
    }
}
class CarFactory{
    public static function make($type = ""){
        if(empty($type)){
            throw new Exception("must supply car type");
        }else{
            $className = $type;
            if(class_exists($className)){
                return new $className;
            }else{
                throw new Exception("We can't build this type of car");
            }
        }
    }
}

try{
    $car = CarFactory::make("tOyOta");
}catch(Exception $e){
    echo $e->getMessage();
}

