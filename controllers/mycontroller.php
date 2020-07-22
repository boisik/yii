<?php
/**
 * Created by PhpStorm.
 * User: Керчь
 * Date: 30.06.2020
 * Time: 20:33
 */

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\modules\users\models\User;
use app\models\ContactForm;

class myController extends  Controller
{
     function beforeAction($action)
    {
        if (Yii::$app->user->isGuest AND $this->id . '/' . $action->id !== 'site/login') {
            Yii::$app->user->loginRequired();
        }

        return true;
    }
}