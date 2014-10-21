<h3>Какието Данные</h3>
<?php

$this->widget('bootstrap.widgets.TbDetailView', array(
    'type' => 'striped bordered condensed',
    'data' => $offer['data']['head'],
    'attributes' => array_keys($offer['data']['head']),
    /*array(
        'shipping_price',
        array(
            'label' => Yii::t('main', 'Weight, kg'),
            'value' => $model->weight,
        ),
        //'weight',
        'shop_comment',
    )*/
));
?>
<h3>Запчасти?</h3>
<?php

/*$parts = array();
foreach ($offer['data']['parts'] as $key => $value) {
    //print_r($value);
    $parts[] = $value;
    print_r(array_keys($value));
}
//print_r($parts);
   [id_position] => 61333
            [id_offer] => 104710
            [id_trade] => 3604
            [id_supplier] => 175
            [id_transport] => 0
            [id_mark] => 1
            [id_manufacturer] => 3
            [mark] => KOMATSU
            [manufacturer] => ORIGINAL
            [name] => Стойка рыхлителя
            [cat_num] => 195-79-31141
            [analog_num] =>
            [mass] => 586
            [price_trade] => 303575
            [valute] => 3
            [valute_name] => руб.
            [margin] => 21.43
            [margin_valute] => 0
            [margin_valute_name] => %
            [transport_name] => Без доставки
            [transport_day] => 1 день
            [order_num] => 1
            [summ] => 303575
            [date_load] => 2011-09-14 09:53:59
            [date_update] => 13.03.2013
*/
$this->widget('bootstrap.widgets.TbGridView', array(
        'dataProvider' => new CArrayDataProvider($offer['data']['parts'], array('pagination' => array('pageSize' => 50))),
        'template' => '{items}',
        'htmlOptions' => array('class' => 'offers-view', 'style' => 'padding-top:0px;'),
        'type' => 'striped bordered condensed',
        'columns' => array(
            'mark', 'manufacturer', 'name', 'cat_num', 'analog_num', 'mass', 'price_trade', 'valute', 'valute_name', 'transport_name'
        )
        //'columns' => array(array_keys($offer['data']['parts'][0])),
        //'columns' => array('*')
        /*'columns' => array(
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
        ),*/
    )
);



