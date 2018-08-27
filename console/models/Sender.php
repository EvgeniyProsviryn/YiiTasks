<?php

namespace console\models;

use Yii;

class Sender {
    
    public static function run($subscribers){
        
        $count = 0;
        
        foreach ($subscribers as $subscriber){
           
           $result = Yii::$app->mailer->compose()
            ->setFrom('evgeniyprosviryn@gmail.com')
            ->setTo($subscriber['email'])
            ->setTextBody('Текст сообщения для '.$subscriber['email'])       
            ->setSubject('Тема сообщения')
            ->send();
         
            if($result) {
                 $count++;
            }
           
           return $count;
       }
        
    }
}
