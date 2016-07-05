<?php

namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;

class IndexController extends Controller
{

    // 显示视图
    public function actionIndex($message = 'Hello'){

        $str = 'hello word';
        $data['content_str'] = $str;
        //把需要传递的数据传到数组当中
        //return $this->renderPartial('index2',$data);        //不使用布局

		//return $this->render('index', ['message' => '123']);  // 渲染一个名称为"view"的视图并使用布局

    }

    //demo
    public function actionIndex2(){
        $res = \YII::$app->response;

        // 增加一个 Pragma 头，已存在的Pragma 头不会被覆盖。
        //$res->headers->add('Pragma', 'no-cache');

        // 设置一个Pragma 头. 任何已存在的Pragma 头都会被丢弃
        //$res->headers->set('Pragma', 'no-cache');

        // 删除Pragma 头并返回删除的Pragma 头的值到数组
        //$res->headers->remove('Pragma');



        //第一种跳转
        //$res->statusCode = 302;
        //$res->headers->add('Location', 'http://www.baidu.com');
        //第二种跳转
        //$this->redirect('http://www.baidu.com',302);

        //文件下载
        //$res->headers->add('content-disposition','attachment;filename="a.jpg"');    //下载文件重命名
        //$res->sendFile('F:\Chrysanthemum.jpg');     //文件位置


        //session的使用
        //$session = \YII::$app->session;
        //$session->open();                   //手动开启 session
        /* if ($session->isActive){            //判断是否开启session 功能
            echo 'sesseion is active';
        } */
        //$session->set('user', 'ck');
        //echo $session->get('user');
        // 删除一个session变量，以下用法是相同的：
        //$session->remove('user');       // unset($session['user']);     unset($_SESSION['user']);


        //cookie的使用
        //发送 Cookies
        $cookies = \YII::$app->response->cookies;
        $cookie_data =array('name'=>'user','value'=>'ck');
        $cookies->add(new Cookie($cookie_data));
        // 删除一个cookie
        $cookies->remove('user');       //unset($cookies['user']);

        //读取 Cookies
        $cookies = \YII::$app->request->cookies;
        echo $cookies->getvalue('user');     //第二个参数为设置的默认值
    }
}