<?php
namespace application\controllers;

use application\components\Controller;
use Yii;

\Yii::import('ext.partist.partistConnector', true);


class GlobalController extends Controller
{
    public function actions()
    {
        return array(
            'captcha' => array(
                'class' => 'yupe\components\actions\YCaptchaAction',
                'backColor' => 0xFFFFFF,
                'testLimit' => 1,
                'minLength' => Yii::app()->getModule('user')->minCaptchaLength,
            ),
        );
    }

    public function actionIndex()
    {

        //$this->layout = 'equipment';
        $this->render('index');
    }

    public function actionLogin($login = null, $password = null)
    {

        if (Yii::app()->user->isAuthenticated()) {
            $this->controller->redirect(Yii::app()->getUser()->getReturnUrl());
        }

        //@TODO 3 вынести в настройки модуля
        $scenario = Yii::app()->authenticationManager->getBadLoginCount(Yii::app()->getUser()) > 3 ? 'loginLimit' : '';
        $module = Yii::app()->getModule('user');

        $model = new \LoginForm($scenario);
        $this->render('login', array('model' => $model, 'module' => $module));


    }
}
