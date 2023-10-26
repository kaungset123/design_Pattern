<?php

require_once "Notify.php";
require_once "EmailNotify.php";
require_once "SmsNotify.php";
require_once "PhoneNotify.php";
require_once "Notifier.php";
require_once "EmailUser.php";
require_once "PhoneUser.php";

class User {
    
    public function __construct()
    {
    //     $obj = NULL ;
    //     switch($type){
    //     case "phone" : $obj = new PhoneNotify();break;
    //     case "email" : $obj = new EmailNotify();break;
    //     case "sms" : $obj = new SmsNotify();break;
    //     default:
    //         echo "Invalid notification system";
    //    }
    //    $notifier = new Notifier();
    //    $notifier->changeNotiType($obj);
    //    $notifier->sendNow();

        $obj = new EmailUser();
        $obj->changeNotiType(new SmsNotify());
        $obj->sendNow();
    }
}
new User();