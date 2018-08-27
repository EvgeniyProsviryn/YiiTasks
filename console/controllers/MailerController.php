<?php

namespace console\controllers;

use Yii;
use console\models\Subscriber;
use console\models\Sender;
use yii\helpers\Console;

class MailerController extends \yii\console\Controller {
    
    public function actionSend(){
        
        $subscribers = Subscriber::getSubscribers();
        $count = Sender::run($subscribers);
        
        Console::output("\nEmails sent: {$count}");
        
    }
   
}
