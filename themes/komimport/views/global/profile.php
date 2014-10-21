<?php
$myoffers = \PartistConnector::myoffers($data['SID']);

//print_r($myoffers);
//print_r($myoffers['data']['data']);
//$myoffers_data = json_decode($myoffers['data']);
//die();

$this->widget('bootstrap.widgets.TbTabs', array(
    'type' => 'tabs', // 'tabs' or 'pills'
    'encodeLabel' => false,
    'tabs' => array(
        array(
            'label' => Yii::t('main', 'Мои предложения'),
            'content' => $this->widget('bootstrap.widgets.TbGridView', array(

                        'selectableRows' => 1,
                        'selectionChanged' => 'function(id){ location.href = "' . $this->createUrl('view') . '?id="+$.fn.yiiGridView.getSelection(id);}',


                        'dataProvider' => new CArrayDataProvider($myoffers['data']['data'] ?  $myoffers['data']['data'] : array(), array('pagination' => array('pageSize' => 50))),
                        //'dataProvider' => new CArrayDataProvider($myoffers['data'], array('id' => 'blink', 'pagination' => array('pageSize' => 512))),
                        'template' => '{items} {pager}',
                        'htmlOptions' => array('style' => 'padding-top:0px;'),
                        'type' => 'striped bordered condensed',
                        'columns' => array(
                            array(
                                'header' => '#',
                                'htmlOptions' => array('style' => 'font-weight:bold;'),
                                'value' => function ($data, $row) {
                                        return $row + 1;
                                    },
                            ),
                            'id',
                            'data',
                            'for_firm',
                            'author_name',
                            'author_fname',
                            'author_family',
                            'curator_name',
                            'curator_fname',
                            'curator_family',
                            'status'
                        ),
                    ), true
                ),
            'active' => true
        ),
        array(
            'label' => 'Инфо',
            'content' => '<pre>' . print_r($data, true) . '</pre>',
        ),
    ),
));


//$myoffers = myoffers($data['SID']);
//echo '<pre>';
//print_r($data);
//print_r($myoffers);
//echo '</pre>';
