<?php

class Notifier{
    protected $notification;

    public function sendNow(){
        $this->notification->send();
    }

    public function changeNotiType(Notify $noti){
        $this->notification = $noti;
    }
}