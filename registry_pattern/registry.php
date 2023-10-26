<?php
require_once "helper.php";

class Registry{
    static $data=[];

    public static function setData($key,$value){
        if(array_key_exists($key,self::$data)){
            echo "key is already in use! please change your key name";
        }else{
            self::$data[$key] = $value;
        }
    }

    public static function getData($key){
       return isset(self::$data[$key]) ? self::$data[$key] : null ;
    }

    public static function removeData($key){
        if(array_key_exists($key,self::$data)){
            unset(self::$data[$key]);
        }else{
            echo "Value with this key \"{$key} \" isn't exit";
        }
    }
}

Registry::setData("car","toyota");
Registry::setData("language","Nihon");
echo Registry::getData("car");
echo "<br>";
echo Registry::getData("language");
$worker = new Helper();
echo "<br>";
Registry::setData("worker",$worker);
Registry::getData("worker")->work();