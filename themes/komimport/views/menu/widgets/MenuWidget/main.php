<?php
Yii::import('application.modules.menu.components.YMenu');


$auth_menu = Menu::model()->getItems('auth-menu', 0);
//print_r($auth_menu);

if (Yii::app()->user->isAuthenticated()) {
    array_unshift($auth_menu, array('label' => '<a style="color:navy;font-weight:bold;" href="/global/profile" class="listItemLink" title="Профиль">' . Yii::app()->user->profile->first_name . ', ' . Yii::app()->user->profile->email . '</a>'));
}

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
