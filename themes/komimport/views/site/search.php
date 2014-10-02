<?php
$this->pageTitle = Yii::app()->getModule('yupe')->siteName . ' - ' . 'Поиск: ' . $term;
$this->breadcrumbs = array('Поиск');



$this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider' => new CArrayDataProvider($data, array('id' => 'blink', 'pagination' => array('pageSize' => 512))),
    'type' => 'striped bordered condensed',
    'template' => "{items}\n{pager}",
    'columns' => array(
        'id',
        'cat_num',
        array(
            'name' => 'name',
            /* 'type' => 'raw',
             'value' => function ($data, $row) use ($countries) {
                     return $data['name'];
                     //return CHtml::link($data["text"], array("group", "catalog" => $catalog, "model" => $model, "category" => $data["key"]));
                 }*/
        ),
        'analog_num',
        'mass_netto',
        //'group_analog',
        //'cat_num_char',
        //'MARK_id',
        'MARK_name',
        //'MANUFACTURER_id',
        //'MANUFACTURER_name',


    )
));

//print_r($data);