<?php
namespace application\controllers;

use application\components\Controller;
use Yii;

\Yii::import('ext.partist.partistConnector', true);

class PartistController extends Controller
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

    public function actionLogin()
    {
        die('1');
    }

    public function actionIndex()
    {

        //$this->layout = 'equipment';
        $this->render('index');
    }


}
