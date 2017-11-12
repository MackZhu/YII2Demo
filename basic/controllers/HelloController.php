<?php

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller
{
    public function actionHello()
    {
        echo "Hello YII2";
    }
    
    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }
}