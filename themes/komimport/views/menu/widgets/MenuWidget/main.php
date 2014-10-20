<?php
Yii::import('application.modules.menu.components.YMenu');


$auth_menu = Menu::model()->getItems('auth-menu', 0);
//print_r($auth_menu);
array_unshift($auth_menu, array('label' => '<a style="color:#FFF;font-weight:bold;" href="/global/profile" class="listItemLink" title="Профиль">' . Yii::app()->user->profile->email . '</a>'));

/*
[label] => <i class="fa fa-unlock" title="Регистрация"></i><span class="hidden-sm hidden-xs">Регистрация</span>
[template] => {menu}
            [itemOptions] => Array
(
    [class] => listItem login-text pull-right
                )

            [linkOptions] => Array
(
    [class] => listItemLink
                    [title] => Регистрация на сайте
                )

            [visible] => 1
            [url] => Array
(
    [0] => /registration
                )

            [items] => Array
(
)
*/
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
