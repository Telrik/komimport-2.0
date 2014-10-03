<?php
namespace application\controllers;

use application\components\Controller;

\Yii::import('ext.partist.partistConnector', true);

class EquipmentController extends Controller
{

    public function actionIndex()
    {
        $this->layout = 'equipment';

        $this->render('index');
    }

    public function actionView($id)
    {
        $data = \PartistConnector::getOfferEquipmentByID($id);

        $row = $data[$id];
        $mark = $row['M_mark'];
        $type = $row['M_type'];

        $related = \PartistConnector::getOfferEquipmentByParams($mark, $type, 50);

        unset($related[$id]);
        shuffle($related);
        $related = array_slice($related, 0, 4);

        $this->render('view', array(
            'id' => $id,
            'row' => $row,
            'related' => $related,
        ));
    }
}