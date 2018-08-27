<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2018/8/23
 * Time: 14:34
 */

namespace app\controllers;



use yii\web\Response;
use yii\web\Controller;

class BaseController extends Controller
{
    // 接收get 请求参数
    protected function get($key, $value = "")
    {
        return \Yii::$app->request->get($key, $value);
    }

    // 接收post 请求参数
    protected function post($key, $value = "")
    {
        return \Yii::$app->request->post($key, $value);
    }

    // request 对象
    protected function request()
    {
        return \Yii::$app->request;
    }

    // 验证请求是否为 post
    protected function isPost()
    {
        return (boolean) \Yii::$app->request->isPost;
    }

    // 异步发送JSON 数据
    protected function renderJSON($data = [])
    {
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $data;
    }
}