<?php

namespace app\controllers;
use yii\web\Controller;

//布局使用控制器
class LayoutController extends Controller{

    public $layout = 'common';
    //1、视图之布局文件
    public function actionIndex(){

        return $this->render('about');//$content
    }


    //2、视图之在视图中显示另外一个视图
    public function actionIndex2(){
        return $this->renderPartial('index');//$content
    }

    //3、视图之数据块
    public function actionIndex3(){
        return $this->render('block1');//$content
    }
}