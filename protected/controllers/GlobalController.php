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
        $this->render('index');
    }


    public function actionProfile()
    {
        $data = json_decode(Yii::app()->user->profile->partist, true);
        $this->render('profile', array(
            'data' => $data
        ));

    }
}
