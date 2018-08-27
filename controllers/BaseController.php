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
    // ����get �������
    protected function get($key, $value = "")
    {
        return \Yii::$app->request->get($key, $value);
    }

    // ����post �������
    protected function post($key, $value = "")
    {
        return \Yii::$app->request->post($key, $value);
    }

    // request ����
    protected function request()
    {
        return \Yii::$app->request;
    }

    // ��֤�����Ƿ�Ϊ post
    protected function isPost()
    {
        return (boolean) \Yii::$app->request->isPost;
    }

    // �첽����JSON ����
    protected function renderJSON($data = [])
    {
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $data;
    }
}