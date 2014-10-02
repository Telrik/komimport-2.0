<?php
$this->pageTitle = Yii::app()->getModule('yupe')->siteName . ' - ' . 'Поиск: ' . $term;
$this->breadcrumbs = array('Поиск');

$this->widget('bootstrap.widgets.TbGridView', array(
        'dataProvider' => new CArrayDataProvider($data, array('id' => 'blink', 'pagination' => array('pageSize' => 512))),
        'type' => 'striped bordered condensed',
        'template' => "{items}\n{pager}",
        'columns' => array(
            array(
                'name' => 'mark',
                'header' => 'Марка'
            ),
            array(
                'name' => 'name_offers',
                'htmlOptions' => array('class' => 'search-name'),
                'header' => 'Название'
            ),
            array(
                'name' => 'cat_num',
                'header' => 'Каталожный номер'
            ),
            array(
                'name' => 'transport_price_num',
                'type' => 'raw',
                'header' => 'Цена',

                'value' =>
                    function ($data, $row) {
                        return '<b>' . $data['transport_price_num'] . ' <i style="font-size:13px" class="fa fa-rub"></i>' . '</b>';
                        //return is_numeric($data['price']) ? $data['price'] . $data['price_valute'] : '';
                    }
            ),
            array(
                'name' => 'mass_netto_num',
                'header' => 'Масса, кг',
                'value' =>
                    function ($data, $row) {
                        return round($data['mass_netto_num'], 1);
                    }
            ),

            array(
                'name' => 'link_on_picture',
                'type' => 'raw',
                'header' => 'Ссылка на каталог',
                'value' =>
                    function ($data, $row) {
                        return '<a target="_blank" href="' . $data['link_on_picture'] . '"><i class="fa fa-gear"></i></a>';
                    }
            ),
        ),
    )
);

//print_r($data);

/*

array(
'name' => 'name',
/* 'type' => 'raw',
'value' => function ($data, $row) use ($countries) {
return $data['name'];
//return CHtml::link($data["text"], array("group", "catalog" => $catalog, "model" => $model, "category" => $data["key"]));
),

// 'analog_num',
//  'mass_netto',
//'group_analog',
//'cat_num_char',
//'MARK_id',
//  'MARK_name',
//'MANUFACTURER_id',
//'MANUFACTURER_name',
[cat_num] => 6212-61-1305
[link_on_picture] => http://komatsupartsbook.com/ru#?sp=6212-61-1305
[mark] => KOMATSU
[name] => WATER PUMP
[name_offers] => Водяной насос (помпа )
[num_analog] => 6212-61-1203, 6212-61-1205
[mass_netto] => 17,000
[mass_netto_num] => 17.000
[mass] => 0,000
[mass_ca] => 17,000
[mass_ca_num] => 17
[price] => n/a
[margin] => n/a
[price_margin] => n/a
[transport_day] => 2 дня
[transport_price] => 36&nbsp;275,00 руб.
[transport_price_num] => 36275
[price_valute] => Руб.
[date_update] => 21.04.2014
[supplier] => n/a
[manufacturer] => OEM
[id_trade] => 1767427
[id_offer] => 983194
[delivery] => 211
[history] =>
[photos] => Array

*/