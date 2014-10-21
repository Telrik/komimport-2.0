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

    public function actionViewOffer($id)
    {
        $data = json_decode(Yii::app()->user->profile->partist, true);
        $offer = \PartistConnector::readOffer($id, $data['SID']);

        $this->render('viewoffer', array(
            'data' => $data,
            'offer' => $offer,
        ));
    }

    public function actionProfile()
    {
        $data = json_decode(Yii::app()->user->profile->partist, true);
        $myoffers = \PartistConnector::listOffers($data['SID']);
        $this->render('profile', array(
            'data' => $data,
            'myoffers' => $myoffers,
        ));
    }
}
