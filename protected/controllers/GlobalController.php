<?php
namespace application\controllers;

use application\components\Controller;

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
        $this->render('login');
    }
}
