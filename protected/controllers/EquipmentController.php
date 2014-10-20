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

    public function actionList($mark = null, $type = null, $page = 1, $num_on_page = 12, $mode = 'list')
    {
        $this->layout = 'equipment';

        if ($type) {
            $all_types = \PartistConnector::getTypesEquipment();
            $current_type = $all_types[$type];
        }

        if ($mark) {
            $all_marks = \PartistConnector::getBrands();
            $current_mark = $all_marks[$mark];
        }

        $data = \PartistConnector::getOfferEquipmentByParams($mark, $type, $num_on_page, $page);

        $pager = array(
            'num_records' => $data['NUM_RECORD'],
            'pages' => $data['PAGES'],
            'num_on_page' => $data['NUM_ON_PAGE'],
            'page' => $page,
        );

        //print_r($data);

        $this->render('list', array(
            'id' => $type,
            'mode' => $mode,
            'data' => $data['CONTENT'],
            'pager' => $pager,
            'current_type' => $current_type,
            'current_mark' => $current_mark,
        ));
    }

    public function actionType($id, $mode = 'list')
    {
        $this->layout = 'equipment';
        $types = \PartistConnector::getTypesEquipment();
        $data = \PartistConnector::getOfferEquipmentByParams(null, $id, 12);

        //print_r($data);

        $this->render('type', array(
            'id' => $id,
            'mode' => $mode,
            'data' => $data,
            'type' => $types[$id],
        ));
    }

    public function actionView($id)
    {
        $data = \PartistConnector::getOfferEquipmentByID($id);
        $row = $data[$id];

        $mark = $row['M_mark'];
        $type = $row['M_type'];

        $related = \PartistConnector::getOfferEquipmentByParams($mark, $type, 50);
        $related = $related['CONTENT'];
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
