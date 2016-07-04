<?php

namespace app\controllers;
use yii\web\Controller;

class IndexController extends Controller
{
    // ...其它代码...

    public function actionIndex($message = 'Hello')
    {
		return $this->render('index', ['message' => '123']);
    }
}