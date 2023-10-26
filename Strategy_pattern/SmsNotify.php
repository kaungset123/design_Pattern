<?php

class SmsNotify implements Notify{
    public function send()
    {
        echo "Notification sent by SMS";
    }
}