<?php

namespace console\models;

use Yii;

class Subscriber {
    
    public static function getSubscribers(){
        
        $sql = 'SELECT * FROM subscribers';
        
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    
}
