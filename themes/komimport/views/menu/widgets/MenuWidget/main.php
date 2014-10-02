<?php
Yii::import('application.modules.menu.components.YMenu');

$auth_menu = Menu::model()->getItems('auth-menu', 0);

$this->widget(
    'bootstrap.widgets.TbNavbar',
    array(
        'collapse' => false,
        'brand' => false,
        'fixed' => false,
        'brandUrl' => '/',
        'htmlOptions' => array('class' => 'header-top'),
        'items' => array(
            array(
                'class' => 'YMenu',
                'type' => 'navbar',
                'encodeLabel' => false,
                'items' => $this->params['items'],
                'htmlOptions' => array(
                    'class' => 'pull-left',
                ),
            ),
            array(
                'class' => 'YMenu',
                'type' => 'navbar',
                'encodeLabel' => false,
                'items' => $auth_menu,
                'htmlOptions' => array(
                    'class' => 'pull-right',
                ),
            ),
            /*,
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'type' => 'navbar',
                'items' => $this->controller->yupe->getLanguageSelectorArray(),
                'htmlOptions' => array(
                    'class' => 'pull-right',
                ),
            )*/
        ),
    )
);
