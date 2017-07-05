<?php

use yii\web\Response;
use \yii\helpers\ArrayHelper;

if (!function_exists('request')) {
    /**
     * Request组件或者通过Request组件获取GET、POST值
     *
     * @param string $key
     * @param mixed $default
     * @return \yii\web\Request|string|array
     */
    function request($key = null, $default = null)
    {
        if ($key === null) {
            $data = Yii::$app->request->get();
            if (Yii::$app->request->post()) {
                $data = ArrayHelper::merge($data, Yii::$app->request->post());
            }
            return $data;
        }

        if (Yii::$app->request->get($key, $default)) {
            return Yii::$app->request->get($key, $default);
        } else {
            return Yii::$app->request->post($key, $default);
        }
    }
}

if (!function_exists('get')) {
    /**
     * Request组件或者通过Request组件获取GET值
     *
     * @param string $key
     * @param mixed $default
     * @return \yii\web\Request|string|array
     */
    function get($key = null, $default = null)
    {
        if ($key === null) {
            return Yii::$app->request->get();
        }

        return Yii::$app->request->get($key, $default);
    }
}

if (!function_exists('post')) {
    /**
     * Request组件或者通过Request组件获取POST值
     *
     * @param string $key
     * @param mixed $default
     * @return \yii\web\Request|string|array
     */
    function post($key = null, $default = null)
    {
        if ($key === null) {
            return Yii::$app->request->post();
        }

        return Yii::$app->request->post($key, $default);
    }
}

if (!function_exists('session')) {
    /**
     * Session组件或者通过Session组件获取GET值
     * @param null $key
     * @return mixed|\yii\web\Session
     */
    function session($key = null)
    {
        if ($key === null) {
            return Yii::$app->session;
        }
        return Yii::$app->getSession()->get($key);
    }
}

if (!function_exists('params')) {
    /**
     * params 组件或者通过 params 组件获取GET值
     * @param $key
     * @param $defaultValue
     * @return mixed|\yii\web\Session
     */
    function params($key, $defaultValue = null)
    {
        return isset(Yii::$app->params[$key]) ? Yii::$app->params[$key] : $defaultValue;
    }
}

/**
 * 调试专用
 * @param $message
 * @param bool|true $debug
 */
function pr($message, $debug = true)
{
    echo '<pre>';
    print_r($message);
    echo '</pre>';
    if ($debug) {
        die;
    }
}

/**
 * 调试专用，无限制添加参数
 */
function prs()
{
    $messages = func_get_args();
    if (!empty($messages)) {
        foreach ($messages as $value) {
            echo '<pre>';
            print_r($value);
            echo '</pre>';
        }
    }
    exit();
}